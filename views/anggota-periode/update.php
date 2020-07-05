<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\AnggotaPeriode */

$this->title = 'Update Anggota Periode: ' . $model->id_anggota;
$this->params['breadcrumbs'][] = ['label' => 'Anggota Periodes', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_anggota, 'url' => ['view', 'id' => $model->id_anggota]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="anggota-periode-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
