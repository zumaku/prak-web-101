<?php
/** @var yii\web\View $this */
use yii\grid\GridView;

?>
<h1>mahasiswa/index</h1>

<p>
    You may change the content of this page by modifying
    the file <code><?= __FILE__; ?></code>.
</p>

<?=
GridView::widget([
    'dataProvider' => $dataProvider, // DataProvider yang berisi data yang ingin ditampilkan
    'columns' => [
        'id', // Kolom ID
        'nim', // Kolom NIM
        'nama', // Kolom Nama
        'kelas', // Kolom Kelas
        // Mengakses tabel yang berelasi
        [
            'attribute' => 'profile101.foto_profile',
            // 'label' => 'Foto Profile',
        ],
        // Menampilkan kolom edit
        [
            'class' => 'yii\grid\ActionColumn', // Kolom aksi
            'template' => '{view} {update} {delete}', // Template tombol aksi yang ingin ditampilkan
        ],
    ],
])
?>