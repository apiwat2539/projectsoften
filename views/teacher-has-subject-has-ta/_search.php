<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\modelsearch\TeacherHasSubjectHasTaSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="teacher-has-subject-has-ta-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'teacher_tId') ?>

    <?= $form->field($model, 'subject_has_ta_subject_cId') ?>

    <?= $form->field($model, 'subject_has_ta_ta_taId') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
