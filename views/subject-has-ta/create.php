<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\SubjectHasTa */

$this->title = 'สร้าง TA ประจำรายวิชา';
$this->params['breadcrumbs'][] = ['label' => 'TA ประจำรายวิชา', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="subject-has-ta-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
