<?php

namespace app\controllers;

use Yii;
use app\models\SectionHasStudent;
use app\models\modelsearch\SectionHasStudentSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * SectionHasStudentController implements the CRUD actions for SectionHasStudent model.
 */
class SectionHasStudentController extends Controller
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
     * Lists all SectionHasStudent models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new SectionHasStudentSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single SectionHasStudent model.
     * @param integer $section_secId
     * @param integer $section_subject_cId
     * @param string $student_stuId
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($section_secId, $section_subject_cId, $student_stuId)
    {
        return $this->render('view', [
            'model' => $this->findModel($section_secId, $section_subject_cId, $student_stuId),
        ]);
    }

    /**
     * Creates a new SectionHasStudent model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new SectionHasStudent();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'section_secId' => $model->section_secId, 'section_subject_cId' => $model->section_subject_cId, 'student_stuId' => $model->student_stuId]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing SectionHasStudent model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $section_secId
     * @param integer $section_subject_cId
     * @param string $student_stuId
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($section_secId, $section_subject_cId, $student_stuId)
    {
        $model = $this->findModel($section_secId, $section_subject_cId, $student_stuId);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'section_secId' => $model->section_secId, 'section_subject_cId' => $model->section_subject_cId, 'student_stuId' => $model->student_stuId]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing SectionHasStudent model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $section_secId
     * @param integer $section_subject_cId
     * @param string $student_stuId
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($section_secId, $section_subject_cId, $student_stuId)
    {
        $this->findModel($section_secId, $section_subject_cId, $student_stuId)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the SectionHasStudent model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $section_secId
     * @param integer $section_subject_cId
     * @param string $student_stuId
     * @return SectionHasStudent the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($section_secId, $section_subject_cId, $student_stuId)
    {
        if (($model = SectionHasStudent::findOne(['section_secId' => $section_secId, 'section_subject_cId' => $section_subject_cId, 'student_stuId' => $student_stuId])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
