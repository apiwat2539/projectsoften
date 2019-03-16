<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\modelsearch\SubjectHasTeacherSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Subject Has Teachers';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="subject-has-teacher-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Subject Has Teacher', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'subject_cId',
            'teacher_tId',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
