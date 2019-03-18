<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Subject */

$this->title = 'แก้ไข: ' . $model->cNumber;
$this->params['breadcrumbs'][] = ['label' => 'วิชา', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->cNumber, 'url' => ['view', 'id' => $model->cNumber]];
$this->params['breadcrumbs'][] = 'แก้ไข';
?>
<div class="subject-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
