<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\DataTa */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="data-ta-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'ta_taId')->textInput(['maxlength' => true])->label('รหัสผู้ช่วยอาจารย์') ?>

    <?= $form->field($model, 'subjectId')->textInput()->label('รหัสวิชา') ?>

    <?= $form->field($model, 'year')->textInput()->label('ปีการศึกษา') ?>

    <?= $form->field($model, 'term')->textInput()->label('เทอม') ?>

    <div class="form-group">
        <?= Html::submitButton('บันทึก', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
