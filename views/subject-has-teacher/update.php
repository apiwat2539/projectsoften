<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\SubjectHasTeacher */

$this->title = 'Update Subject Has Teacher: ' . $model->subject_cId;
$this->params['breadcrumbs'][] = ['label' => 'Subject Has Teachers', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->subject_cId, 'url' => ['view', 'subject_cId' => $model->subject_cId, 'teacher_tId' => $model->teacher_tId]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="subject-has-teacher-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
