<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\SectionHasStudent */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="section-has-student-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'section_secId')->textInput() ?>

    <?= $form->field($model, 'section_subject_cId')->textInput() ?>

    <?= $form->field($model, 'student_stuId')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
