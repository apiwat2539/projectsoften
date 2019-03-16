<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\SubjectHasTa */

$this->title = 'Update Subject Has Ta: ' . $model->subject_cId;
$this->params['breadcrumbs'][] = ['label' => 'Subject Has Tas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->subject_cId, 'url' => ['view', 'subject_cId' => $model->subject_cId, 'ta_taId' => $model->ta_taId]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="subject-has-ta-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
