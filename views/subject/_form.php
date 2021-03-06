<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Subject */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="subject-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'cNumber')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'cName')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'cYear')->textInput() ?>

    <?= $form->field($model, 'cTerm')->dropDownList(
            ['1' => '1', '2' => '2']
    ); ?>

    <?= $form->field($model, 'cSection')->dropDownList(
            ['1' => '1', '2' => '2', '3' => '3', '4' => '4', '5' => '5']
    ); ?>

    <?= $form->field($model, 'cPassword')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'cStatus')->dropDownList(
            ['0' => 'ปิด', '1' => 'เปิด']
    ); ?>

    <div class="form-group">
        <?= Html::submitButton('บันทึก', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
