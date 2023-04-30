<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;

/** @var yii\web\View $this */
/** @var app\models\Action $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="action-form">

    <?php $form = ActiveForm::begin(); ?>

    <?php // $form->field($model, 'patient_id')->textInput() ?>
    <?php
    $dataPost=ArrayHelper::map(\app\models\Patient::find()->asArray()->all(), 'id', 'patient_name');
	echo $form->field($model, 'patient_id')
        ->dropDownList(
            $dataPost,           
            ['id'=>'patient_name']
        );
    ?>

    <?= $form->field($model, 'action')->textarea(['rows' => 6]) ?>

    <div class="row">
        <div class="col-md-6">
            <?php
                $dataPost=ArrayHelper::map(\app\models\Medicine::find()->asArray()->all(), 'id', 'medicine_name');
	            echo $form->field($model, 'medicine_id')
                    ->dropDownList(
                    $dataPost,           
                    ['id'=>'medicine_name']
                );
             ?>
        </div>

        <div class="col-md-6">
            <?= $form->field($model, 'medicine_price')->textInput(['readonly', 'maxlength' => true]) ?>
        </div>

        <div class="mt-2">
            <button type="button" class="btn btn-lg btn-sm btn-success add-item">+</button>
            <button type="button" class="btn btn-lg btn-sm btn-danger remove-item">-</button>
        </div>
    </div>
    <?php // $form->field($model, 'medicine_id')->textInput() ?>


    <?php //$form->field($model, 'medicine_id')->dropDownList($medicineName, ['prompt'=>'Pilih Obat', 'onchange' => '
    //$.post( "'.Yii::$app->urlManager->createUrl('actioncontroller/getharga?id=').'"+$(this).val(), function( data ) {
        //$( "input#medicine_price" ).val( data );
    //});'])
    ?>

    <?= $form->field($model, 'total_payment')->textInput(['maxlength' => true]) ?>

    <div class="form-group mt-2">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>