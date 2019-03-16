<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\modelsearch\SectionHasStudentSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Section Has Students';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="section-has-student-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Section Has Student', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'section_secId',
            'section_subject_cId',
            'student_stuId',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
