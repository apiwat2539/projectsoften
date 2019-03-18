<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Teacher */

$this->title = 'แก้ไข: ' . $model->tName;
$this->params['breadcrumbs'][] = ['label' => 'อาจารย์', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->tId, 'url' => ['view', 'id' => $model->tId]];
$this->params['breadcrumbs'][] = 'แก้ไข';
?>
<div class="teacher-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
