<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Subject */

$this->title = $model->cName;
$this->params['breadcrumbs'][] = ['label' => 'วิชา', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="subject-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('แก้ไข', ['update', 'id' => $model->cId], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('ลบ', ['delete', 'id' => $model->cId], [
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
            // 'cId',
            'cNumber',
            'cName',
            'cYear',
            'cTerm',
            'cSection',
            'cPassword',
            'cStatus',
        ],
    ]) ?>
    <?= Html::a('เพิ่ม TA', ['subject-has-ta/create','id' => $model->cNumber], ['class' => 'btn btn-success']) ?>

</div>
