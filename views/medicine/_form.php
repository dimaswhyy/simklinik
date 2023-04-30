<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\Medicine $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="medicine-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'medicine_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'medicine_detail')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'medicine_price')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
