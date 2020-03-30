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
    public function actionIndex()
    {
        $customTourForm = new CustomTour();
        $tourForm = new Tour();
        $parameters = [];

        $parameters['countries']  = $tourForm->getCountries(); //получаем список стран
        $parameters['flyCities'] = City::getFlyCities(); //получаем список городов вылета
        $parameters['hotelAlloc'] = $this->formHotelsAlloc(Hotels::getHotelAllocation()); //получаем список расположений отелей
        $parameters['hotelTypes'] = Hotels::getHotelsType(); //получаем список типов отелей

        return $this->render('index', compact('customTourForm', 'tourForm', 'parameters'));
    }

    /*
     * Вносим данные по нестандартному туру
     */
    public function actionInsertCustomTour()
    {
        $customTourForm = new CustomTour();

        if($customTourForm->load(Yii::$app->request->post()))
        {
            $customTourForm->sendMail($customTourForm);
            $customTourForm->insertDataDB();
        }
    }

    /*
     * Вносим данные по подбору тура
     * tType = 1 - турпакет
     * tType = 0 - подбор отеля
     * tType = 2 - дополнение данных из второго шага
     */
    public function actionInsertTour()
    {
        $tourForm = new Tour();
        if($tourForm->load(Yii::$app->request->post()))
        {
            if ($tourForm->tType === "1")
            {
                $tourForm->insertDataTourDB();
            }
            if ($tourForm->tType === "0")
            {
                $tourForm->insertDataHotelDB();
            }
            if ($tourForm->tType === "2")
            {
                $tourForm->updateDataTour();
                $tourForm->sendMail();
            }
        }
    }

    /*
     * получение списка городов
     */
    public function actionGetCities()
    {
        if(Yii::$app->request->isPost && Yii::$app->request->isAjax)
        {
            $res = City::getCities(Yii::$app->request->post()['id']);
            return json_encode($res);
        }
        return true;
    }

    /*
     * получение списка отелей
     */
    public function actionGetHotels()
    {
        if(Yii::$app->request->isPost && Yii::$app->request->isAjax)
        {
            $res = Hotels::getHotels(Yii::$app->request->post()['name']);
            return json_encode($res);
        }
        return true;
    }

    /*
     * получение списка располодения отелей
     */
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