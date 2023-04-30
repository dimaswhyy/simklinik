<?php

/** @var yii\web\View $this */

$this->title = 'My Yii Application';
?>
<div class="site-index">

    <div class="jumbotron text-center bg-transparent">
        <h1 class="display-4">Selamat Datang !</h1>

        <p class="lead">Kamu dapat mengakses sebagai Admin</p>

        <p><a class="btn btn-lg btn-success" href="<?php echo Yii::$app->urlManager->createUrl(['patient/index']); ?>">Daftarkan Pasien</a></p>
    </div>

    <div class="body-content">

        <div class="row">
            <div class="col-lg-6">
                <center>
                <h2>Tindakan</h2>

                <p><a class="btn btn-outline-secondary" href="<?php echo Yii::$app->urlManager->createUrl(['action/create']); ?>">Sekarang</a></p>
                </center>
            </div>
            <div class="col-lg-6">
                <center>
                <h2>Pembayaran</h2>

                <p><a class="btn btn-outline-secondary" href="http://www.yiiframework.com/extensions/">Sekarang</a></p>
                </center>
            </div>
        </div>

    </div>
</div>
