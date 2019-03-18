<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Ta */

$this->title = 'แก้ไข: ' . $model->taId;
$this->params['breadcrumbs'][] = ['label' => 'ผู้ช่วยอาจารย์', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->taId, 'url' => ['view', 'id' => $model->taId]];
$this->params['breadcrumbs'][] = 'แก้ไข';
?>
<div class="ta-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
