<?php
/** @var yii\web\View $this */
use yii\grid\GridView;
$this->title = "Pendidikan";
?>
<h1>pendidikan/index</h1>

<p>
    You may change the content of this page by modifying
    the file <code><?= __FILE__; ?></code>.
</p>

<a href="/mahasiswa/tambah" class="btn btn-primary">Mahasiswa Baru</a>

<?=
GridView::widget([
    'dataProvider' => $dataProvider,
    'columns' => [
        'id',
        'nama_sekolah',
        'tahun_selesai',
        'jenis_pendidikan',
        [
            'class' => 'yii\grid\ActionColumn',
            'template' => '{view} {update} {delete}',
        ],
    ],
])
?>