<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\AnggotaPeriodeSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Anggota Periodes';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="anggota-periode-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Anggota Periode', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_anggota',
            'id_periode',
            'nama_anggota',
            'alamat',
            'no_telp',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
