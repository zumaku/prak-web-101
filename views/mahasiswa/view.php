<?php
use  yii\widgets\DetailView;


$this->title = 'View Data Pendidikan';
// $this->params['breadcrumbs'][] = ['label' => 'Mahasiswa', 'url' => ['index']];
// $this->params['breadcrumbs'][] = $this->title;
echo DetailView::widget([
    'model' => $model,
]) ?>