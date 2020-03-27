<?php
namespace app\controllers;

use Yii;
use app\models\City;
use yii\web\Controller;
use app\models\CustomTour;
use app\models\Tour;
use app\models\Hotels;

class TophotelsController extends Controller
{
    public function actionHelpselection()
    {
        $customTourForm = new CustomTour();
        $tourForm = new Tour();
        $parameters = [];

        $parameters['countries']  = $tourForm->getCountries();
        $parameters['flyCities'] = City::getFlyCities();
        $parameters['hotelAlloc'] = $this->formHotelsAlloc(Hotels::getHotelAllocation());
        $parameters['hotelTypes'] = Hotels::getHotelsType();

        return $this->render('index', compact('customTourForm', 'tourForm', 'parameters'));
    }

    public function actionInsertcustomtour()
    {
        $customTourForm = new CustomTour();

        if($customTourForm->load(Yii::$app->request->post()))
        {
            $customTourForm->sendMail($customTourForm);
            $customTourForm->insertDataDB();
        }
    }

    public function actionInserttour(){

        $tourForm = new Tour();
        if($tourForm->load(Yii::$app->request->post())) {
            if ($tourForm->tType === "1"){
                $tourForm->insertDataTourDB();
            }
            if ($tourForm->tType === "0"){
                $tourForm->insertDataHotelDB();
            }
            if ($tourForm->tType === "2")
                $tourForm->updateDataTour();
                $this->sendMail();
        }
    }

    public function actionGetcities()
    {
        if(Yii::$app->request->isPost && Yii::$app->request->isAjax)
        {
            $res = City::getCities(Yii::$app->request->post()['id']);
            return json_encode($res);
        }
        return true;
    }

    public function actionGethotels()
    {
        if(Yii::$app->request->isPost && Yii::$app->request->isAjax)
        {
            $res = Hotels::getHotels(Yii::$app->request->post()['name']);
            return json_encode($res);
        }
        return true;
    }

    private function formHotelsAlloc($allocations)
    {
        $formedArr = [];

        foreach ($allocations as $allocation)
        {
            $formedArr[$allocation['name']]['eng'] = str_replace(" ", "-", $allocation['name_eng']);
            $formedArr[$allocation['name']]['data'][] = $allocation['alloc_name'];
        }

        return $formedArr;
    }
}