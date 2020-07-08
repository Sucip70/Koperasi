<?php

/* @var $this yii\web\View */ 

$this->title = 'Koperasi UNS';
$self_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
$member_link = "$self_link?r=anggota-periode%2Findex";
$period_link = "$self_link?r=periode%2Findex";
?>
<div class="site-index">

    <div class="jumbotron" style="background-image: url(images/image.jpg)";>
        <h1>Koperasi</h1>

        <p class="lead">You have successfully created your Yii-powered application.</p>

        <p><a class="btn btn-lg btn-success" href=<?= $member_link?>>Daftar Anggota</a></p>
        
        <p><a class="btn btn-lg btn-success" href=<?= $period_link?>>Daftar Periode</a></p>
    </div>

    <div class="body-content">

    </div>
</div>
