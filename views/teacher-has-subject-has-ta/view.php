<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\TeacherHasSubjectHasTa */

$this->title = $model->teacher_tId;
$this->params['breadcrumbs'][] = ['label' => 'Teacher Has Subject Has Tas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="teacher-has-subject-has-ta-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'teacher_tId' => $model->teacher_tId, 'subject_has_ta_subject_cId' => $model->subject_has_ta_subject_cId, 'subject_has_ta_ta_taId' => $model->subject_has_ta_ta_taId], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'teacher_tId' => $model->teacher_tId, 'subject_has_ta_subject_cId' => $model->subject_has_ta_subject_cId, 'subject_has_ta_ta_taId' => $model->subject_has_ta_ta_taId], [
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
            'teacher_tId',
            'subject_has_ta_subject_cId',
            'subject_has_ta_ta_taId',
        ],
    ]) ?>

</div>
