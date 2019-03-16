<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\SubjectHasTeacher */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="subject-has-teacher-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'subject_cId')->textInput() ?>

    <?= $form->field($model, 'teacher_tId')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
