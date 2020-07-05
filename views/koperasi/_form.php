<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\AnggotaKoperasi */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="anggota-koperasi-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_anggota')->textInput() ?>

    <?= $form->field($model, 'nama_anggota')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'periode')->textInput() ?>

    <?= $form->field($model, 'alamat')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'no_telp')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
