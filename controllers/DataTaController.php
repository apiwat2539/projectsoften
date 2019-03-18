<?php

namespace app\controllers;

use Yii;
use app\models\DataTa;
use app\models\modelsearch\DataTaSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * DataTaController implements the CRUD actions for DataTa model.
 */
class DataTaController extends Controller
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
     * Lists all DataTa models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new DataTaSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single DataTa model.
     * @param integer $dataTa_Id
     * @param string $ta_taId
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($dataTa_Id, $ta_taId)
    {
        return $this->render('view', [
            'model' => $this->findModel($dataTa_Id, $ta_taId),
        ]);
    }

    /**
     * Creates a new DataTa model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new DataTa();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'dataTa_Id' => $model->dataTa_Id, 'ta_taId' => $model->ta_taId]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing DataTa model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $dataTa_Id
     * @param string $ta_taId
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($dataTa_Id, $ta_taId)
    {
        $model = $this->findModel($dataTa_Id, $ta_taId);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'dataTa_Id' => $model->dataTa_Id, 'ta_taId' => $model->ta_taId]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing DataTa model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $dataTa_Id
     * @param string $ta_taId
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($dataTa_Id, $ta_taId)
    {
        $this->findModel($dataTa_Id, $ta_taId)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the DataTa model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $dataTa_Id
     * @param string $ta_taId
     * @return DataTa the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($dataTa_Id, $ta_taId)
    {
        if (($model = DataTa::findOne(['dataTa_Id' => $dataTa_Id, 'ta_taId' => $ta_taId])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
