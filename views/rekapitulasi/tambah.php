<?php 
    $this->title = "Tambah Produk Baru"
?>

<?=
    $this->render('_form', [
        'model' => $model,
    ]);
?>