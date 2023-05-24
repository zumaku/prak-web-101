<?php

namespace app\controllers;

use yii\db\ActiveRecord;
use app\models\MasterMahasiswa;
use yii\data\ActiveDataFilter;
use yii\data\ActiveDataProvider;

class MasterMahasiswaController extends \yii\web\Controller
{
    public function actionIndex()
    {
        $dataProvider = new ActiveDataProvider([
            'query' => MasterMahasiswa::find(),
        ]);
        // var_dump($dataProvider);
        // die;
        return $this->render('index', [
            'dataProvider' => $dataProvider,
        ]);
        return $this->render('index');
    }

}
