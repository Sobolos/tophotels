<?php


namespace app\controllers;

use Yii;
use yii\web\Controller;
use app\models\CustomTour;
use yii\widgets\ActiveForm;

class TophotelsController extends Controller
{
    public function actionHelpselection()
    {
        $customTourForm = new CustomTour();

        if($customTourForm->load(Yii::$app->request->post()))
        {
            $customTourForm->insertDataDB();
            $customTourForm->sendMail($customTourForm);
        }
        return $this->render('index', compact('customTourForm'));
    }
}