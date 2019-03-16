<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\modelsearch\TeacherHasSubjectHasTaSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Teacher Has Subject Has Tas';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="teacher-has-subject-has-ta-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Teacher Has Subject Has Ta', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'teacher_tId',
            'subject_has_ta_subject_cId',
            'subject_has_ta_ta_taId',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
