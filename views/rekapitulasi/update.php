<?php 
    $this->title = "Update Produk Baru";
    // var_dump($data_produk);
    // die;
?>

<?=
    $this->render('_form_update', [
        'model' => $model,
        'data_produk' => $data_produk,
    ]);
?>