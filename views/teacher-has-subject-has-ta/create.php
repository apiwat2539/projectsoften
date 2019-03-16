<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\TeacherHasSubjectHasTa */

$this->title = 'Create Teacher Has Subject Has Ta';
$this->params['breadcrumbs'][] = ['label' => 'Teacher Has Subject Has Tas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="teacher-has-subject-has-ta-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
