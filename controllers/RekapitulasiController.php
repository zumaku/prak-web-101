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
    public function behaviors(){
        return [
            'access' => [
                'class' => AccessControl::class,
                'only' => ['index', 'tambah', 'view'],
                'rules' => [
                    [
                        'allow' => true,
                        'actions' => [ 'view'],
                        'roles' => ['?'],
                    ],
                    [
                        'allow' => true,
                        'actions' => ['tambah', 'index', 'view'],
                        'roles' => ['@'],
                    ],
                ],
            ],
        ];
    }

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

    public function actionUpdate($id){
        $produk = new Produk;
        $data_produk = Produk::findOne(['id' => $id]);
        $id_user = $data_produk->id_user;

        if($produk->load($this->request->post())){     // load semua data yang ada di post dan save. redirect ke halaman view?id=...
            $data_produk->nama_produk = $produk->nama_produk;
            $data_produk->id_user = $id_user;
            $data_produk->deskripsi = $produk->deskripsi;
            $data_produk->kategori = $produk->kategori;
            $data_produk->stok = $produk->stok;
            $data_produk->harga = $produk->harga;
            // var_dump($data_produk);
            // die;
            if( $data_produk->save() ){
                return $this->redirect([
                    'view',
                    'id' => $data_produk->id,
                ]);
            } else{
                var_dump($data_produk->getError());
                die();
            }
        } else{
            $produk->loadDefaultValues();
        }

        return $this->render('update', [
            'model' => $produk,
            'data_produk' => $data_produk,
        ]);
    }

    public function actionDelete($id){
        $produk = Produk::findOne($id);
        $penjualan = Penjualan::findOne(['id_produk' => $id]);

        if ($penjualan->delete()) {
            if($produk->delete()){
                Yii::$app->getSession()->setFlash('delSuccess', 'Produk <strong>berhasil dihapus!</strong>');
                return $this->redirect(['index']);
            } else{
                var_dump($produk->getError());
                die();
            }
        }
        else {
            var_dump($produk->getError());
            die();
        }
    }


}