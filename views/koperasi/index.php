<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\KoperasiSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Anggota Koperasis';
$this->params['breadcrumbs'][] = $this->title;
$self_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
$ln = strlen($self_link);
$data_link = substr_replace($self_link,"anggota-periode%2Fcreate",$ln-16);
?>
<div class="anggota-koperasi-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Anggota Koperasi', $data_link, ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_anggota',
            'nama_anggota',
            'periode',
            'alamat',
            'no_telp',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
