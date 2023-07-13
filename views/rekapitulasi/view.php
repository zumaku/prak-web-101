<?php

use app\models\Produk;
use  yii\widgets\DetailView;

$msg = Yii::$app->session->getFlash('addSuccess');
if( $msg !== NULL )
    echo '<div class="alert alert-success d-flex align-items-center" role="alert"><div>' . $msg . ' </div></div>';

echo '<a href="/rekapitulasi" class="btn bgku-primary my-2"><i class="ti-arrow-left"></i> Kembali</a>';

$this->title = 'Detail Produk';
echo DetailView::widget([
    'model' => $model,
    'attributes' => [
        'nama_produk',
        'deskripsi',
        [
            'attribute' => 'kategori',
            'value' => function($model){
                return Produk::KATEGORI[$model->kategori];
            }
        ],
        'stok',
        'user.username',
        'harga',
        'penjualan.jumlah_terjual',
        'penjualan.keuntungan',
    ],
]) ?>