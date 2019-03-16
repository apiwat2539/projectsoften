<?php

namespace app\controllers;

use Yii;
use app\models\TeacherHasSubjectHasTa;
use app\models\modelsearch\TeacherHasSubjectHasTaSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * TeacherHasSubjectHasTaController implements the CRUD actions for TeacherHasSubjectHasTa model.
 */
class TeacherHasSubjectHasTaController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all TeacherHasSubjectHasTa models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new TeacherHasSubjectHasTaSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single TeacherHasSubjectHasTa model.
     * @param integer $teacher_tId
     * @param integer $subject_has_ta_subject_cId
     * @param string $subject_has_ta_ta_taId
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($teacher_tId, $subject_has_ta_subject_cId, $subject_has_ta_ta_taId)
    {
        return $this->render('view', [
            'model' => $this->findModel($teacher_tId, $subject_has_ta_subject_cId, $subject_has_ta_ta_taId),
        ]);
    }

    /**
     * Creates a new TeacherHasSubjectHasTa model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new TeacherHasSubjectHasTa();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'teacher_tId' => $model->teacher_tId, 'subject_has_ta_subject_cId' => $model->subject_has_ta_subject_cId, 'subject_has_ta_ta_taId' => $model->subject_has_ta_ta_taId]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing TeacherHasSubjectHasTa model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $teacher_tId
     * @param integer $subject_has_ta_subject_cId
     * @param string $subject_has_ta_ta_taId
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($teacher_tId, $subject_has_ta_subject_cId, $subject_has_ta_ta_taId)
    {
        $model = $this->findModel($teacher_tId, $subject_has_ta_subject_cId, $subject_has_ta_ta_taId);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'teacher_tId' => $model->teacher_tId, 'subject_has_ta_subject_cId' => $model->subject_has_ta_subject_cId, 'subject_has_ta_ta_taId' => $model->subject_has_ta_ta_taId]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing TeacherHasSubjectHasTa model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $teacher_tId
     * @param integer $subject_has_ta_subject_cId
     * @param string $subject_has_ta_ta_taId
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($teacher_tId, $subject_has_ta_subject_cId, $subject_has_ta_ta_taId)
    {
        $this->findModel($teacher_tId, $subject_has_ta_subject_cId, $subject_has_ta_ta_taId)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the TeacherHasSubjectHasTa model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $teacher_tId
     * @param integer $subject_has_ta_subject_cId
     * @param string $subject_has_ta_ta_taId
     * @return TeacherHasSubjectHasTa the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($teacher_tId, $subject_has_ta_subject_cId, $subject_has_ta_ta_taId)
    {
        if (($model = TeacherHasSubjectHasTa::findOne(['teacher_tId' => $teacher_tId, 'subject_has_ta_subject_cId' => $subject_has_ta_subject_cId, 'subject_has_ta_ta_taId' => $subject_has_ta_ta_taId])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
