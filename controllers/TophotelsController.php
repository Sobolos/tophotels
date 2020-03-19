<?php
namespace app\controllers;

use Yii;
use yii\web\Controller;
use app\models\CustomTour;
use app\models\Tour;
//use app\models\City;

class TophotelsController extends Controller
{
    public function actionHelpselection()
    {
        $customTourForm = new CustomTour();
        $tourForm = new Tour();

        if($customTourForm->load(Yii::$app->request->post()))
        {
            $customTourForm->insertDataDB();
            $customTourForm->sendMail($customTourForm);
        }

        if($tourForm->load(Yii::$app->request->post()))
        {
            $tourForm->insertDataDB();
        }

        return $this->render('index', compact('customTourForm', 'tourForm'));
    }

    public function actionGetcities()
    {
        if(Yii::$app->request->isPost && Yii::$app->request->isAjax)
        {
            print_r(Yii::$app->request->post());
        }
        return "false";
    }
}