<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\SubjectHasTa */

$this->title = 'Create Subject Has Ta';
$this->params['breadcrumbs'][] = ['label' => 'Subject Has Tas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="subject-has-ta-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
