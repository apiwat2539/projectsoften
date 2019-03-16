<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\TeacherHasSubjectHasTa */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="teacher-has-subject-has-ta-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'teacher_tId')->textInput() ?>

    <?= $form->field($model, 'subject_has_ta_subject_cId')->textInput() ?>

    <?= $form->field($model, 'subject_has_ta_ta_taId')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
