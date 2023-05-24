<?php
/** @var yii\web\View $this */
use yii\grid\GridView;
?>
<h1>master-mahasiswa/index</h1>

<p>
    You may change the content of this page by modifying
    the file <code><?= __FILE__; ?></code>.
</p>


<?=
GridView::widget([
    'dataProvider' => $dataProvider, // DataProvider yang berisi data yang ingin ditampilkan
    'columns' => [
        'id', // Kolom ID
        'tahun', // Kolom NIM
        'tanggal_mulai', // Kolom Nama
        'tanggal_selesai', // Kolom Kelas
        [
            'class' => 'yii\grid\ActionColumn', // Kolom aksi
            'template' => '{view} {update} {delete}', // Template tombol aksi yang ingin ditampilkan
        ],
    ],
])
?>