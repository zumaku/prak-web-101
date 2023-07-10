<?php
namespace app\controllers\api;

use yii\rest\ActiveController;

class ApiMahasiswaController extends ActiveController
{
    // Class ActiveController telah memiliki default method yg bisa digunakan
    // Method Index
    // Method Insert
    // Method Update
    // Method Delete
    // Method View

    public $modelClass = 'app\models\Mahasiswa';
}

// Documentation: https://www.yiiframework.com/doc/guide/2.0/en/rest-quick-start