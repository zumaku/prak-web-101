<?php

namespace app\controllers;

use yii\db\ActiveRecord;
use app\models\Pendidikan;
use yii\data\ActiveDataFilter;
use yii\data\ActiveDataProvider;
use yii\web\Request;


class PendidikanController extends \yii\web\Controller{

    public function actionIndex(){
        $dataProvider = new ActiveDataProvider([
            'query' => Pendidikan::find()
        ]);
        return $this->render('index', [
            'dataProvider' => $dataProvider
        ]);
    }

    public function actionView($id){
        $data = Pendidikan::findOne($id);
        return $this->render('view_data', [
            'model' => $data,
        ]);
    }

    public function actionCreate(){
        $req = new Request;
        if ($req->post()){
            $req =  $req->post()['Pendidikan'];
            $req['tahun_selesai'] = (int)$req['tahun_selesai'];
            
            $new_data = new Pendidikan;
            $new_data->nama_sekolah = $req['nama_sekolah'];
            $new_data->tahun_selesai = $req['tahun_selesai'];
            $new_data->jenis_pendidikan = $req['jenis_pendidikan'];

            if ($new_data->save()) {
                return $this->redirect(['index']);
            } else {
                var_dump($new_data->getError());
                die();
            }
        }

        return $this->render('tambah', [
            'model' => new Pendidikan,
        ]);
    }

    public function actionDelete($id){
        $mhs = Pendidikan::findOne($id);
        if ($mhs->delete()) {
            return $this->redirect(['index']);
        }
        else {
            var_dump($mhs->getError());
            die();
        }
    }

    public function actionUpdate($id){
        $data = new Pendidikan;
        $data = $data->findOne($id);

        $req = new Request;
        if ($req->post()){
            $req =  $req->post()['Pendidikan'];
            $req['tahun_selesai'] = (int)$req['tahun_selesai'];
            
            $data->nama_sekolah = $req['nama_sekolah'];
            $data->tahun_selesai = $req['tahun_selesai'];
            $data->jenis_pendidikan = $req['jenis_pendidikan'];

            if ($data->save()) {
                return $this->redirect(['index']);
            } else {
                var_dump($data->getError());
                die();
            }
        }

        return $this->render('edit', [
            'model' => $data,
        ]);
    }


}
