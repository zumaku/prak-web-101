<?php

use Symfony\Component\VarDumper\VarDumper;
use yii\grid\GridView;
$this->title = "Rekapitulasi Penjualan";

// var_dump($dataProvider);
// die;
$del = Yii::$app->session->getFlash('sucDelMhs');
if( $del !== NULL )
    echo '<div class="alert alert-success d-flex align-items-center" role="alert"><div>' . $del . ' </div></div>';
?>

<a href="/rekapitulasi/tambah" class="btn bgku-secondary my-2"><i class="ti-plus"></i> Produk Baru</a>

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