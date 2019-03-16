<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\SubjectHasTa */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="subject-has-ta-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'subject_cId')->textInput() ?>

    <?= $form->field($model, 'ta_taId')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
