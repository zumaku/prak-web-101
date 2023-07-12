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
}