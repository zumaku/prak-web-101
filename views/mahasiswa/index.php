<?php
/** @var yii\web\View $this */
use yii\grid\GridView;

?>
<a href="/mahasiswa/tambah" class="btn btn-primary">Mahasiswa Baru</a>
<?=
GridView::widget([
    'dataProvider' => $dataProvider,
    'tableOptions' => [
        'class' => 'table table-striped table-bordered'
    ],
    'options' => [
        'class' => 'table-responsive',
    ],
    'columns' => [
        // Number of row
        [
            'class' => 'yii\grid\SerialColumn'
        ],
        'id_101',
        'no_induk_mahasiswa_101',
        'nama_mahasiswa_101',
        'kelas_101',
        'status_101',
        // Menampilkan kolom edit
        [
            'class' => 'yii\grid\ActionColumn',
            'template' => '{view} {update} {delete}',
        ],
    ],
])
?>