<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\DataTa */

$this->title = 'Update Data Ta: ' . $model->dataTa_Id;
$this->params['breadcrumbs'][] = ['label' => 'Data Tas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->dataTa_Id, 'url' => ['view', 'dataTa_Id' => $model->dataTa_Id, 'ta_taId' => $model->ta_taId]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="data-ta-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
