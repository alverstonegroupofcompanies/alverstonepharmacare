<?php

namespace app\controllers;

use Yii;
use yii\web\Controller;
use app\models\Medicine;

class MedicineController extends Controller
{
    public function actionIndex()
    {
        $medicines = Medicine::find()->all();
        return $this->render('index', ['medicines' => $medicines]);
    }

}
?>