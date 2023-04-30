<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\UserAccess $model */

$this->title = 'Ubah Akses : ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'User Accesses', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="user-access-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
