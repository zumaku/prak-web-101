<a href="/mahasiswa" class="btn btn-primary mb-2"><i class="ti-arrow-left"></i> Back</a>
<?php
use  yii\widgets\DetailView;


$this->title = 'View Data Pendidikan';
// $this->params['breadcrumbs'][] = ['label' => 'Mahasiswa', 'url' => ['index']];
// $this->params['breadcrumbs'][] = $this->title;
echo DetailView::widget([
    'model' => $model,
]) ?>