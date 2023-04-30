<?php

use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\Payment $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="payment-form">

    <?php $form = ActiveForm::begin(); ?>

    <?php // $form->field($model, 'action_id')->textInput() ?>
    <?php
        $dataPost=ArrayHelper::map(\app\models\Action::find()->asArray()->all(), 'id', 'id');
	    echo $form->field($model, 'action_id')
            ->dropDownList(
            $dataPost,           
            ['id'=>'id']
        );
    ?>
    <div hidden>
        <?= $form->field($model, 'payment_number')->textInput(['hidden']) ?>
    </div>


    <?= $form->field($model, 'payment_date')->textInput() ?>

    <?= $form->field($model, 'total_payment')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>