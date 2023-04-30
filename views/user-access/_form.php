<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\UserAccess $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="user-access-form"> 

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'access_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'access_code')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Simpan', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
