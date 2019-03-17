<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\DataTa */

$this->title = $model->dataTa_Id;
$this->params['breadcrumbs'][] = ['label' => 'Data Tas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="data-ta-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'dataTa_Id' => $model->dataTa_Id, 'ta_taId' => $model->ta_taId], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'dataTa_Id' => $model->dataTa_Id, 'ta_taId' => $model->ta_taId], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'dataTa_Id',
            'ta_taId',
            'subjectId',
            'year',
            'term',
        ],
    ]) ?>

</div>
