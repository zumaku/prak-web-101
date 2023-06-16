<?php

namespace app\controllers;

use yii\db\ActiveRecord;
// use app\models\Mahasiswa101;
use app\models\Mahasiswa;
use yii\data\ActiveDataFilter;
use yii\data\ActiveDataProvider;
use Yii;

class MahasiswaController extends \yii\web\Controller{

    public function actionIndex(){
        $dataProvider = new ActiveDataProvider([
            'query' => Mahasiswa::find(),
        ]);
        return $this->render('index', [
            'dataProvider' => $dataProvider,
        ]);
    }

    public function actionView($id){
        $data = Mahasiswa::findOne($id);
        return $this->render('view', [
            'model' => $data,
        ]);
    }

    public function actionTambah(){
        $mhs = new Mahasiswa;
        if($mhs->load($this->request->post()) && $mhs->save()){     // load semua data yang ada di post dan save. redirect ke halaman view?id=...
            return $this->redirect([
                'view',
                'id' => $mhs->id_101,
            ]);
        } else{
            $mhs->loadDefaultValues();
        }

        // Yii::$app->getSession()->setFlash('sucAddMhs', 'Mahasiswa baru <strong>berhasil ditambahkan!</strong>');
        // return $this->redirect(['index']);

        return $this->render('create', [
            'model' => $mhs,
        ]);
    }

    public function actionUpdate($id){
        $mhs = new Mahasiswa;
        $mhs = $mhs->findOne($id);
        $mhs->status_101 = 'Update';
        $mhs->save();
        Yii::$app->getSession()->setFlash('sucUpdMhs', 'Data mahasiswa ' . $mhs->no_induk_mahasiswa_101 . ' <strong>berhasil diupdate!</strong>');
        return $this->redirect(['index']);
    }
    
    public function actionDelete($id){
        $mhs = Mahasiswa::findOne($id);
        if ($mhs->delete()) {
            Yii::$app->getSession()->setFlash('sucDelMhs', 'Data mahasiswa ' . $mhs->no_induk_mahasiswa_101 . ' <strong>berhasil dihapus!</strong>');
            return $this->redirect(['index']);
        }
        else {
            var_dump($mhs->getError());
            die();
        }
    }
    
    public function actionCari($nim){
        return $this->render('cari', [
            'nim' => $nim,
        ]);
    }

}
