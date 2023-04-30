<?php

use app\models\UserAccess;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var app\models\UserAccessSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Akses Pengguna';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="user-access-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Tambah', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            // 'id',
            'access_name',
            'access_code',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, UserAccess $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                 }
            ],
        ],
    ]); ?>


</div>
