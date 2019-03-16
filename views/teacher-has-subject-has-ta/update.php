<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\TeacherHasSubjectHasTa */

$this->title = 'Update Teacher Has Subject Has Ta: ' . $model->teacher_tId;
$this->params['breadcrumbs'][] = ['label' => 'Teacher Has Subject Has Tas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->teacher_tId, 'url' => ['view', 'teacher_tId' => $model->teacher_tId, 'subject_has_ta_subject_cId' => $model->subject_has_ta_subject_cId, 'subject_has_ta_ta_taId' => $model->subject_has_ta_ta_taId]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="teacher-has-subject-has-ta-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
