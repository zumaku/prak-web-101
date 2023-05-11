<?php

namespace app\controllers;

class MahasiswaController extends \yii\web\Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }
    
    public function actionCari($nim)
    {
        return $this->render('cari', [
            'nim' => $nim,
        ]);
    }

}
