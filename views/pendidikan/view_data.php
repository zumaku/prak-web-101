<?php
use  yii\widgets\DetailView;


$this->title = 'View Data Pendidikan';
$this->params['breadcrumbs'][] = ['label' => 'Pendidikans', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
echo DetailView::widget([
    'model' => $model,
]) ?>

<a href="/pendidikan" class="btn btn-outline-primary">Kembali</a>