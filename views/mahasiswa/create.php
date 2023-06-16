<?php 
    $this->title = "Tambah Mahasiswa Baru"
?>

<?=
    $this->render('_form', [
        'model' => $model,
    ]);
?>