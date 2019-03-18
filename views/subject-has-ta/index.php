<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\helpers\ArrayHelper;
use app\models\SubjectHasTa;

/* @var $this yii\web\View */
/* @var $searchModel app\models\modelsearch\SubjectHasTaSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'TA ประจำรายวิชา';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="subject-has-ta-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('เพิ่ม TA ประจำรายวิชา', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            [
              'attribute' => 'รหัสวิชา',
              'filter' => ArrayHelper::map(SubjectHasTa::find()->all(), 'subject_cId', 'subject_cId'),//กำหนด filter แบบ dropDownlist จากข้อมูล ใน field แบบ foreignKey
              'value' => function($model){
                    return $model->subjectC->cNumber;
                }
            ],
            'ta_taId',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
