<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\DataTa */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="data-ta-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'ta_taId')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'subjectId')->textInput() ?>

    <?= $form->field($model, 'year')->textInput() ?>

    <?= $form->field($model, 'term')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
