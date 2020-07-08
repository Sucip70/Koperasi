<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\AnggotaPeriode */

$this->title = 'Tambah Anggota';
$this->params['breadcrumbs'][] = ['label' => 'Anggota Koperasi', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="anggota-periode-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
