<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\Pendidikan $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="pendidikan-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nama_sekolah')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tahun_selesai')->textInput(['maxlength' => true])->input('number') ?>
    <!-- <?= $form->field($model, 'tahun_selesai')->dropDownList([2013, 2014, 2015, 2016, 2017, 2018, 2019, 2020, 2021, 2022, 2023], ['prompt' => 'Pilih']); ?> -->

    <?= $form->field($model, 'jenis_pendidikan')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
