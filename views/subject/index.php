<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\modelsearch\SubjectSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'วิชา';
?>
<div class="subject-index">
  <nav class="navbar navbar-default">
    <div class="container-fluid">
      <div class="navbar-header">
        <a class="navbar-brand">ระบบเช็คชื่อนักศึกษา</a>
      </div>
      <ul class="nav navbar-nav">
        <li><a href="/projectsoften/web/site/index">หน้าแรก</a></li>
        <li><a href="/projectsoften/web/student/index">นักศึกษา</a></li>
        <li class="active"><a href="/projectsoften/web/subject/index">วิชา</a></li>
        <li><a href="/projectsoften/web/teacher/index">อาจารย์</a></li>
        <li><a href="/projectsoften/web/ta/index">ผู้ช่วยอาจารย์</a></li>
        <li><a href="/projectsoften/web/data-ta/create">กำหนดผู้ช่วยอาจารย์ประจำวิชา</a></li>
      </ul>
      </div>
    </nav>

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('เพิ่มวิชา', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'cId',
            'cNumber',
            'cName',
            'cYear',
            'cTerm',
            //'cSection',
            //'cPassword',
            //'cStatus',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
