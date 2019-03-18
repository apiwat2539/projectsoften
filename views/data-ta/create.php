<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\DataTa */

$this->title = 'เพิ่มผู้ช่วยอาจารย์';
$this->params['breadcrumbs'][] = ['label' => 'จัดการ TA ประจำรายวิชา', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="data-ta-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
