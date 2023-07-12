<?php

use Symfony\Component\VarDumper\VarDumper;
use yii\grid\GridView;
$this->title = "Rekapitulasi Penjualan";

// var_dump($dataProvider);
// die;
?>

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
        ['class' => 'yii\grid\SerialColumn'],
        'nama_produk',
        // 'deskripsi',
        'stok',
        'user.username',
        'harga',
        'penjualan.jumlah_terjual',
        'penjualan.keuntungan',
        [
            'class' => 'yii\grid\ActionColumn',
            'template' => '{view} {update} {delete}',
        ],
    ],
])
?>