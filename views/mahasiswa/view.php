<a href="/mahasiswa" class="btn bgku-primary my-2"><i class="ti-arrow-left"></i> Back</a>
<?php

use app\models\Mahasiswa;
use  yii\widgets\DetailView;


$this->title = 'View Data Pendidikan';
// $this->params['breadcrumbs'][] = ['label' => 'Mahasiswa', 'url' => ['index']];
// $this->params['breadcrumbs'][] = $this->title;
echo DetailView::widget([
    'model' => $model,
    'attributes' => [
        'status_101', 
        [
            'attribute' => 'status_101',
            'value' => function($model){
                return Mahasiswa::STATUS[$model->status_101];
            }
        ]
    ],
]) ?>   