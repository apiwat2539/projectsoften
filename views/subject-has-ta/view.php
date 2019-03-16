<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\SubjectHasTa */

$this->title = $model->subject_cId;
$this->params['breadcrumbs'][] = ['label' => 'Subject Has Tas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="subject-has-ta-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'subject_cId' => $model->subject_cId, 'ta_taId' => $model->ta_taId], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'subject_cId' => $model->subject_cId, 'ta_taId' => $model->ta_taId], [
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
            'subject_cId',
            'ta_taId',
        ],
    ]) ?>

</div>
