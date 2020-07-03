<?php
use yii\helpers\Html;
use yii\widgets\LinkPager;
?>
<h1>coperation</h1>
<ul>
<?php foreach ($coperation as $period): ?>
    <li>
        <?= Html::encode("{$period->periode} ({$period->id_periode})") ?>:
        <?= $period->keterangan ?>
    </li>
<?php endforeach; ?>
</ul>

<?= LinkPager::widget(['pagination' => $pagination]) ?>