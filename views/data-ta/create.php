<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\DataTa */

$this->title = 'Create Data Ta';
$this->params['breadcrumbs'][] = ['label' => 'Data Tas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="data-ta-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
