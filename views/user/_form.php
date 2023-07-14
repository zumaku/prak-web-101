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
    <?= $form->field($model, 'username')->textInput(['maxlength' => true, 'value' => $data_user->username]) ?>
    <?= $form->field($model, 'email')->textInput(['maxlength' => true, 'value' => $data_user->email]) ?>
    <?= $form->field($model, 'password')->textInput(['maxlength' => true, 'placeholder' => "Masukkan Password Baru"]) ?>
    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn bgku-secondary']) ?>
        <a href="/mahasiswa" class="btn bgku-primary">Cancel</a>
    </div>

    <?php ActiveForm::end(); ?>

</div>