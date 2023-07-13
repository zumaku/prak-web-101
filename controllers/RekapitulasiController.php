<?php

namespace app\controllers;

use yii\db\ActiveRecord;
use app\models\Produk;
use app\models\Penjualan;
use yii\data\ActiveDataFilter;
use yii\data\ActiveDataProvider;
use yii\web\Controller;
use yii\filters\AccessControl;
use Yii;

class RekapitulasiController extends \yii\web\Controller{
    public function actionIndex(){
        $dataProvider = new ActiveDataProvider([
            'query' => Produk::find()->with('penjualan', 'user'),
        ]);
        return $this->render('index', [
            'dataProvider' => $dataProvider,
        ]);
    }

    public function actionView($id){
        $data = Produk::findOne($id);
        return $this->render('view', [
            'model' => $data,
        ]);
    }

    public function actionTambah(){
        $newProduk = new Produk;

        // Jika ada request melalui post
        if($newProduk->load($this->request->post())){
            $newProduk->id_user = Yii::$app->user->identity->id;    // Menambah id user yang sedang login

            if($newProduk->save()){
                // Menyimpan data untuk penjualan
                $newId = $newProduk->getPrimaryKey();

                // random number untuk jumlah terjual dan harga
                $jum_jual = rand(1, 100);
                $untung = $jum_jual * $newProduk->harga;

                $newPenjualan = new Penjualan;
                $newPenjualan->jumlah_terjual = $jum_jual;
                $newPenjualan->keuntungan = $untung;
                $newPenjualan->id_produk = $newId;
                
                if($newPenjualan->save()){
                    Yii::$app->getSession()->setFlash('addSuccess', 'Produk baru<strong>berhasil ditambahkan!</strong>');
                    return $this->redirect([
                        'view',
                        'id' => $newProduk->id,
                    ]);
                } else{
                    var_dump($newPenjualan->getError());
                    die();
                }
            } else{
                var_dump($newProduk->getError());
                die();
            }

            return $this->redirect([
                'view',
                'id' => $newProduk->id,
            ]);
        } else{
            $newProduk->loadDefaultValues();
        }

        return $this->render('tambah', [
            'model' => $newProduk,
        ]);
    }

    // public function actionBalala(){
    //     $jum_jual = rand(1, 100);
    //     $untung = $jum_jual * '10000';

    //     $newPenjualan = new Penjualan;
    //     $newPenjualan->jumlah_terjual = $jum_jual;
    //     $newPenjualan->keuntungan = $untung;
    //     $newPenjualan->id_produk = 25;
    //     if($newPenjualan->save()){
    //         var_dump($newPenjualan);
    //         die;
    //     } else{
    //         var_dump($newPenjualan->getError());
    //         die();
    //     }
    // }
}