<?php

use app\models\Produk;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\Mahasiswa $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="mahasiswa-form">
    <h1>Tambah Produk Baru</h1>
    <?php $form = ActiveForm::begin(); ?>
    <!-- <?= $form->field($model, 'owner')->textInput([
        'maxlength' => true,
        'value'=> Yii::$app->user->identity->username,
        'disabled' => true
    ])?> -->
    <?= $form->field($model, 'nama_produk')->textInput(['maxlength' => true]) ?>
    <?= $form->field($model, 'deskripsi')->textArea() ?>
    <?= $form->field($model, 'kategori')->textInput(['maxlength' => true])
        ->dropDownList(Produk::KATEGORI) ?>
    <?= $form->field($model, 'stok')->textInput(['maxlength' => true])->input('number') ?>
    <?= $form->field($model, 'harga')->textInput(['maxlength' => true])->input('number') ?>
    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn bgku-secondary']) ?>
        <a href="/mahasiswa" class="btn bgku-primary">Cancel</a>
    </div>

    <?php ActiveForm::end(); ?>

</div>