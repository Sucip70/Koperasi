<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use app\models\Periode;
/* @var $this yii\web\View */
/* @var $model app\models\AnggotaPeriode */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="anggota-periode-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_anggota')->textInput() ?>
     
    <?= $form->field($model, 'id_periode')->dropdownList($items = Periode::find()
        ->select(['id_periode'])
        ->indexBy('id_periode')
        ->column(),
        ['prompt'=>'Select Periode']
    ); ?>

    <?= $form->field($model, 'nama_anggota')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'alamat')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'no_telp')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
