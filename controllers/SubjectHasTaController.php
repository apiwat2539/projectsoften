<?php

namespace app\controllers;

use Yii;
use app\models\SubjectHasTa;
use app\models\modelsearch\SubjectHasTaSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * SubjectHasTaController implements the CRUD actions for SubjectHasTa model.
 */
class SubjectHasTaController extends Controller
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
     * Lists all SubjectHasTa models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new SubjectHasTaSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single SubjectHasTa model.
     * @param integer $subject_cId
     * @param string $ta_taId
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($subject_cId, $ta_taId)
    {
        return $this->render('view', [
            'model' => $this->findModel($subject_cId, $ta_taId),
        ]);
    }

    /**
     * Creates a new SubjectHasTa model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new SubjectHasTa();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'subject_cId' => $model->subject_cId, 'ta_taId' => $model->ta_taId]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing SubjectHasTa model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $subject_cId
     * @param string $ta_taId
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($subject_cId, $ta_taId)
    {
        $model = $this->findModel($subject_cId, $ta_taId);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'subject_cId' => $model->subject_cId, 'ta_taId' => $model->ta_taId]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing SubjectHasTa model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $subject_cId
     * @param string $ta_taId
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($subject_cId, $ta_taId)
    {
        $this->findModel($subject_cId, $ta_taId)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the SubjectHasTa model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $subject_cId
     * @param string $ta_taId
     * @return SubjectHasTa the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($subject_cId, $ta_taId)
    {
        if (($model = SubjectHasTa::findOne(['subject_cId' => $subject_cId, 'ta_taId' => $ta_taId])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
