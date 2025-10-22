<?php

namespace app\controllers;

use Yii;
use app\models\Medicine;
use yii\web\Controller;
use yii\web\UploadedFile;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

class AdminMedicineController extends Controller
{
    /**
     * Restrict HTTP verbs for delete action
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::class,
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * List all medicines
     */
    public function actionIndex()
    {
        $medicines = Medicine::find()->all();
        return $this->render('index', ['medicines' => $medicines]);
    }

    /**
     * Create a new medicine
     */
    public function actionCreate()
    {
        $model = new Medicine();

        if ($model->load(Yii::$app->request->post())) {
            $model->imageFile = UploadedFile::getInstance($model, 'imageFile');

            if ($model->validate() && $model->upload() && $model->save(false)) {
                return $this->redirect(['index']);
            }
        }

        return $this->render('create', ['model' => $model]);
    }

    /**
     * Update existing medicine
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post())) {
            $model->imageFile = UploadedFile::getInstance($model, 'imageFile');

            if ($model->validate()) {
                if ($model->imageFile && $model->upload()) {
                    // Optional: delete old image file here if needed
                }

                if ($model->save(false)) {
                    return $this->redirect(['index']);
                }
            }
        }

        return $this->render('update', ['model' => $model]);
    }

    /**
     * Delete medicine and its image
     */
    public function actionDelete($id)
    {
        $model = $this->findModel($id);

        // Delete image file from folder if exists
        if (!empty($model->image)) {
            $imagePath = Yii::getAlias('@webroot/uploads/medicine/' . $model->image);
            if (file_exists($imagePath)) {
                unlink($imagePath);
            }
        }

        $model->delete();
        return $this->redirect(['index']);
    }

    /**
     * Finds the Medicine model based on its primary key value.
     * @param integer $id
     * @return Medicine the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Medicine::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested medicine does not exist.');
    }
}
