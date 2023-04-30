<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\Payment $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="payment-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'action_id')->textInput() ?>

    <?= $form->field($model, 'payment_number')->textInput() ?>

    <?= $form->field($model, 'payment_date')->textInput() ?>

    <?= $form->field($model, 'total_payment')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
