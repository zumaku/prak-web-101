<?php

namespace app\controllers;

use yii\db\ActiveRecord;
use app\models\Mahasiswa101;
use yii\data\ActiveDataFilter;
use yii\data\ActiveDataProvider;

class MahasiswaController extends \yii\web\Controller
{
    public function actionIndex()
    {
        $dataProvider = new ActiveDataProvider([
            // 'query' => Mahasiswa101::find()->with('profile_101'),
            'query' => Mahasiswa101::find()->with('profile101'),
        ]);
        // var_dump($dataProvider);
        // die;
        return $this->render('index', [
            'dataProvider' => $dataProvider,
        ]);
    }
    
    public function actionCari($nim)
    {
        return $this->render('cari', [
            'nim' => $nim,
        ]);
    }

}
