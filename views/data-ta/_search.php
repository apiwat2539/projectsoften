<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\modelsearch\DataTaSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="data-ta-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'dataTa_Id') ?>

    <?= $form->field($model, 'ta_taId') ?>

    <?= $form->field($model, 'subjectId') ?>

    <?= $form->field($model, 'year') ?>

    <?= $form->field($model, 'term') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
