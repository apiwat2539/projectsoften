<?php

namespace app\controllers;

use Yii;
use app\models\SubjectHasTeacher;
use app\models\modelsearch\SubjectHasTeacherSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * SubjectHasTeacherController implements the CRUD actions for SubjectHasTeacher model.
 */
class SubjectHasTeacherController extends Controller
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
     * Lists all SubjectHasTeacher models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new SubjectHasTeacherSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single SubjectHasTeacher model.
     * @param integer $subject_cId
     * @param integer $teacher_tId
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($subject_cId, $teacher_tId)
    {
        return $this->render('view', [
            'model' => $this->findModel($subject_cId, $teacher_tId),
        ]);
    }

    /**
     * Creates a new SubjectHasTeacher model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new SubjectHasTeacher();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'subject_cId' => $model->subject_cId, 'teacher_tId' => $model->teacher_tId]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing SubjectHasTeacher model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $subject_cId
     * @param integer $teacher_tId
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($subject_cId, $teacher_tId)
    {
        $model = $this->findModel($subject_cId, $teacher_tId);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'subject_cId' => $model->subject_cId, 'teacher_tId' => $model->teacher_tId]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing SubjectHasTeacher model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $subject_cId
     * @param integer $teacher_tId
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($subject_cId, $teacher_tId)
    {
        $this->findModel($subject_cId, $teacher_tId)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the SubjectHasTeacher model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $subject_cId
     * @param integer $teacher_tId
     * @return SubjectHasTeacher the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($subject_cId, $teacher_tId)
    {
        if (($model = SubjectHasTeacher::findOne(['subject_cId' => $subject_cId, 'teacher_tId' => $teacher_tId])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
