<?php

use app\models\Mahasiswa;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\Mahasiswa $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="mahasiswa-form">

    <?php $form = ActiveForm::begin(); ?>
    <?= $form->field($model, 'no_induk_mahasiswa_101')->textInput(['maxlength' => true])->input('number') ?>
    <?= $form->field($model, 'nama_mahasiswa_101')->textInput(['maxlength' => true]) ?>
    <?= $form->field($model, 'kelas_101')->textInput(['maxlength' => true])
        ->dropDownList(Mahasiswa::KELAS) ?>
    <?= $form->field($model, 'status_101')->textInput(['maxlength' => true])
        ->dropDownList(Mahasiswa::STATUS) ?>
    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn bgku-secondary']) ?>
        <a href="/mahasiswa" class="btn bgku-primary">Cancel</a>
    </div>

    <?php ActiveForm::end(); ?>

</div>
