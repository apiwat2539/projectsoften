<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Ta */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="ta-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'taId')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'taName')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('บันทึก', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
