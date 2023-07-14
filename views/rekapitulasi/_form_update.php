<?php

use app\models\Produk;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\Mahasiswa $model */
/** @var yii\widgets\ActiveForm $form */

// var_dump($data_produk->nama_produk);
// die;
?>

<div class="mahasiswa-form">
    <h1>Edit Produk Baru</h1>
    <?php $form = ActiveForm::begin(); ?>
    <?= $form->field($model, 'nama_produk')->textInput(['maxlength' => true, 'value' => $data_produk->nama_produk]) ?>
    <?= $form->field($model, 'deskripsi')->textArea(['value' => $data_produk->deskripsi]) ?>
    <?= $form->field($model, 'kategori')->textInput(['maxlength' => true])
        ->dropDownList(Produk::KATEGORI, ['options' => [$data_produk->kategori => ['selected' => true]]]) ?>
    <?= $form->field($model, 'stok')->textInput(['maxlength' => true])->input('number', ['value' => $data_produk->stok]) ?>
    <?= $form->field($model, 'harga')->textInput(['maxlength' => true])->input('number', ['value' => $data_produk->harga]) ?>
    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn bgku-secondary']) ?>
        <a href="/mahasiswa" class="btn bgku-primary">Cancel</a>
    </div>

    <?php ActiveForm::end(); ?>

</div>