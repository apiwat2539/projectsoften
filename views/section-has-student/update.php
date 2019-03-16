<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\SectionHasStudent */

$this->title = 'Update Section Has Student: ' . $model->section_secId;
$this->params['breadcrumbs'][] = ['label' => 'Section Has Students', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->section_secId, 'url' => ['view', 'section_secId' => $model->section_secId, 'section_subject_cId' => $model->section_subject_cId, 'student_stuId' => $model->student_stuId]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="section-has-student-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
