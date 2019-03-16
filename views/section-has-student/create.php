<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\SectionHasStudent */

$this->title = 'Create Section Has Student';
$this->params['breadcrumbs'][] = ['label' => 'Section Has Students', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="section-has-student-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
