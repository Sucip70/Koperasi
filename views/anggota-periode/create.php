<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\AnggotaPeriode */

$this->title = 'Create Anggota Periode';
$this->params['breadcrumbs'][] = ['label' => 'Anggota Periodes', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="anggota-periode-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
