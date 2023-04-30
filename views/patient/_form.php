<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;

/** @var yii\web\View $this */
/** @var app\models\Patient $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="patient-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'patient_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'gender')->dropDownList([ 'Laki-laki' => 'Laki-laki', 'Perempuan' => 'Perempuan', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'address')->textInput(['maxlength' => true]) ?>

    <?php // $form->field($model, 'city')->textInput(['maxlength' => true]) ?>

    <?php
    $dataPost=ArrayHelper::map(\app\models\City::find()->asArray()->all(), 'city_name', 'city_name');
	echo $form->field($model, 'city')
        ->dropDownList(
            $dataPost,           
            ['city_name'=>'city_name']
        );
    ?>

    <?php // $form->field($model, 'province')->textInput(['maxlength' => true]) ?>

    <?php
    $dataPost=ArrayHelper::map(\app\models\Province::find()->asArray()->all(), 'province_name', 'province_name');
	echo $form->field($model, 'province')
        ->dropDownList(
            $dataPost,           
            ['province_name'=>'province_name']
        );
    ?>

    <?= $form->field($model, 'phone_number')->textInput(['maxlength' => true]) ?>

    

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
