<?php

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
        ->dropDownList([
            'A' => 'A',
            'B' => 'B',
            'C' => 'C',
            'D' => 'D'
        ]) ?>
    <?= $form->field($model, 'status_101')->textInput(['maxlength' => true])
        ->dropDownList([
            'Lulus' => 'Lulus',
            'Tidak Lulus' => 'Tidak Lulus',
            'Sedang Belajar' => 'Sedang Belajar'
        ]) ?>
    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
