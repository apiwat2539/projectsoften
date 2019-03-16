<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\SectionHasStudent */

$this->title = $model->section_secId;
$this->params['breadcrumbs'][] = ['label' => 'Section Has Students', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="section-has-student-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'section_secId' => $model->section_secId, 'section_subject_cId' => $model->section_subject_cId, 'student_stuId' => $model->student_stuId], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'section_secId' => $model->section_secId, 'section_subject_cId' => $model->section_subject_cId, 'student_stuId' => $model->student_stuId], [
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
            'section_secId',
            'section_subject_cId',
            'student_stuId',
        ],
    ]) ?>

</div>
