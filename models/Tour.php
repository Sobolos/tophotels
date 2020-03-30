<?php


namespace app\models;

use Codeception\PHPUnit\Constraint\Page;
use Yii;
use yii\db\ActiveRecord;
use app\modules\admin\models\Consultants;

class Tour extends ActiveRecord
{
    //общие поля
    public $name;
    public $phone;
    public $email;
    public $mycity;

    public $departDates;
    public $nightsAmount;
    public $adultsAmount;
    public $childrenAmount;
    public $child1Age;
    public $child2Age;
    public $child3Age;
    public $optPrice;
    public $maxPrice;
    public $currency;

    //турпакет: первый ряд
    public $directionCountry1, $directionCity1, $directionFlyCity1;

    public $directionHotelFlyCity1;
    public $directionHotelAllocation1;
    public $directionHotelEating1;
    public $directionHotelStars1;
    public $directionHotelRating1;
    public $directionHotelChildren1;
    public $directionHotelOther1;

    //турпакет: второй ряд
    public $directionCountry2, $directionCity2, $directionFlyCity2;

    public $directionHotelFlyCity2;
    public $directionHotelAllocation2;
    public $directionHotelEating2;
    public $directionHotelStars2;
    public $directionHotelRating2;
    public $directionHotelChildren2;
    public $directionHotelOther2;

    //турпакет: третий ряд
    public $directionCountry3;
    public $directionCity3;
    public $directionFlyCity3;

    public $directionHotelFlyCity3;
    public $directionHotelAllocation3;
    public $directionHotelEating3;
    public $directionHotelStars3;
    public $directionHotelRating3;
    public $directionHotelChildren3;
    public $directionHotelOther3;

    //отель: общие параметры
    public $hotelFlyCity;
    public $hotelEating;

    //отель: спиок отелей
    public $hotel1, $hotel2, $hotel3;

    public $hotel1Country, $hotel1City, $hotel1Rating;
    public $hotel2Country, $hotel2City, $hotel2Rating;
    public $hotel3Country, $hotel3City, $hotel3Rating;

    public $tripParams;
    public $tType;
    public $leadId;

    public static function tableName()
    {
        return 'leads';
    }

    public function rules()
    {
        return [
            [['departDates', 'nightsAmount', 'adultsAmount', 'childrenAmount'], 'required'],
            //общие поля
            ['email', 'email'],
            ['name', 'string'],
            ['phone', 'string'],
            ['mycity', 'string'],

            ['departDates', 'string'],
            ['nightsAmount', 'string'],
            ['adultsAmount', 'string'],
            ['childrenAmount', 'string'],
            ['child1Age', 'string'],
            ['child2Age', 'string'],
            ['child3Age', 'string'],
            ['optPrice', 'string'],
            ['maxPrice', 'string'],
            ['currency', 'string'],

            //турпакет: первый ряд
            ['directionCountry1', 'string'],
            ['directionCity1', 'string'],
            ['directionFlyCity1', 'string'],

            ['directionHotelFlyCity1', 'string'],
            ['directionHotelAllocation1', 'string'],
            ['directionHotelEating1', 'string'],
            ['directionHotelStars1', 'string'],
            ['directionHotelRating1', 'string'],
            ['directionHotelChildren1', 'string'],
            ['directionHotelOther1', 'string'],

            //турпакет: второй ряд
            ['directionCountry2', 'string'],
            ['directionCity2', 'string'],
            ['directionFlyCity2', 'string'],

            ['directionHotelFlyCity2', 'string'],
            ['directionHotelAllocation', 'string'],
            ['directionHotelEating2', 'string'],
            ['directionHotelStars2', 'string'],
            ['directionHotelRating2', 'string'],
            ['directionHotelChildren2', 'string'],
            ['directionHotelOther2', 'string'],

            //турпакет: третий ряд
            ['directionCountry3', 'string'],
            ['directionCity3', 'string'],
            ['directionFlyCity3', 'string'],

            ['directionHotelFlyCity3', 'string'],
            ['directionHotelAllocation3', 'string'],
            ['directionHotelEating3', 'string'],
            ['directionHotelStars3', 'string'],
            ['directionHotelRating3', 'string'],
            ['directionHotelChildren3', 'string'],
            ['directionHotelOther3', 'string'],

            //отель: общие параметры
            ['hotelFlyCity', 'string'],
            ['hotelEating', 'string'],

            //отель: спиок отелей
            ['hotel1', 'string'],
            ['hotel2', 'string'],
            ['hotel3', 'string'],

            ['hotel1Country', 'string'],
            ['hotel1Rating', 'string'],
            ['hotel1City', 'string'],
            ['hotel2Country', 'string'],
            ['hotel21Rating', 'string'],
            ['hotel2City', 'string'],
            ['hotel3Country', 'string'],
            ['hotel3Rating', 'string'],
            ['hotel3City', 'string'],

            ['tripParams', 'string'],
            ['tType', 'string'],
            ['leadId', 'string']
        ];
    }

    public function sendMail()
    {
        $consultant_id = Yii::$app->session->get('consultant');
        $consultant = Consultants::getConsultant($consultant_id);

        if ($consultant_id != 0){
            $data = [
                'name' => $this->name,
                'email' => $this->email,
                'phone' => $this->phone,
                'consultant_name' => $consultant['name']
            ];

            Yii::$app->mailer->htmlLayout = "layouts/html";
            Yii::$app->mailer->compose('newlead', ['model' => $data])
                ->setTo($consultant['email'])
                ->setFrom([ 'test.th.welcome@gmail.com'])
                ->setSubject('Добавлена новая заявка')
                ->send();
            return true;
        }else return false;
    }

    public function insertDataTourDB()
    {
        $this->getConsultant($this->directionCountry1);

        Yii::$app->db->createCommand()->insert('leads', [
            'AddDate' => date("d-m-Y H:i:s"),
            'Route' => $this->getRouteText(),
            'DepartiationDate' => $this->departDates,
            'AmountNights' => $this->nightsAmount,
            'PriceMax' => $this->maxPrice,
            'PriceComfort' => $this->optPrice,
            'PriceCurrency' => $this->currency,
            'Adults' => $this->adultsAmount,
            'Children' => $this->childrenAmount,
            'Child1Age' => $this->child1Age,
            'Child2Age' => $this->child2Age,
            'Child3Age' => $this->child3Age,
            'Wishes' => $this->getWishes(),
            'consultant_id' => Yii::$app->session->get('consultant')
        ])->execute();

        echo Yii::$app->db->getLastInsertID();
    }

    public function getConsultant($checkCountry)
    {
        $ann = false;
        $olga = false;
        $alexandr = false;
        $max = false;

        if (($this->directionCountry1 === "Турция" || $this->hotel1Country === "Турция") && ($this->directionCountry1 === "Тунис" || $this->hotel1Country === "Тунис") && ($this->directionCountry1 === "Египет" || $this->hotel1Country === "Египет"))
        {
            Yii::$app->session->set('consultant', 4);
            return true;
        } else if($checkCountry === ""){
            Yii::$app->session->set('consultant', 0);
            return true;
        }

        if(($this->directionCountry1 === "Турция" || $this->hotel1Country === "Турция") && ($this->directionHotelStars1 === "5*" || $this->hotel1Rating === "5*"))
            $olga = true;
        else if(($this->directionCountry1 === "Египет" || $this->hotel1Country === "Египет") && ($this->hotel1City === "Шарм-Эль-Шейх" || $this->directionCity1 === "Шарм-Эль-Шейх"))
            $alexandr = true;
        else if(($this->directionCountry1 === "Тунис" || $this->hotel1Country === "Тунис") && (strpos($this->hotel1Rating, "2*") === 0 || strpos($this->hotel1Rating, "3*") === 0 || strpos($this->hotel1Rating, "4*") === 0))
            $max = true;
        else if(($this->directionCountry1 === "Тунис" || $this->hotel1Country === "Тунис") && (strpos($this->directionHotelRating1, "2*") === 0 || strpos($this->directionHotelRating1, "3*") === 0 || strpos($this->directionHotelRating1, "4*") === 0))
            $max = true;

        if($olga && $ann && $max){
            Yii::$app->session->set('consultant', 4);
            return true;
        }

        else if($olga){
            Yii::$app->session->set('consultant', 1);
            return true;
        }

        else if($alexandr){
            Yii::$app->session->set('consultant', 2);
            return true;
        }

        else if($max){
            Yii::$app->session->set('consultant', 3);
            return true;
        }

        Yii::$app->session->set('consultant', 4);
        return true;
    }

    public function insertDataHotelDB()
    {
        $this->getConsultant($this->hotel1Country);
        Yii::$app->db->createCommand()->insert('leads', [
            'AddDate' => date("d-m-Y H:i:s"),
            'DepartiationDate' => $this->departDates,
            'AmountNights' => $this->nightsAmount,
            'PriceMax' => $this->maxPrice,
            'PriceComfort' => $this->optPrice,
            'PriceCurrency' => $this->currency,
            'Adults' => $this->adultsAmount,
            'Children' => $this->childrenAmount,
            'Child1Age' => $this->child1Age,
            'Child2Age' => $this->child2Age,
            'Child3Age' => $this->child3Age,
            'Route' => $this->getRouteTextHotel(),
            'Wishes' => $this->getWishesHotel(),
            'consultant_id' => Yii::$app->session->get('consultant')
        ])->execute();
        echo Yii::$app->db->getLastInsertID();
    }

    public function updateDataTour()
    {

        Yii::$app->db->createCommand('
        UPDATE leads SET CustomerName=:name, CustomerPhone=:phone, CustomerEmail=:email, CustomerCity=:city WHERE id=:id'
        )->bindValues(
            [
                ':name' => $this->name,
                ':phone' => $this->phone,
                ':email' => $this->email,
                ':city' => $this->mycity,
                ':id' => $this->leadId
            ]
        )->execute();
        echo "Updated";
    }

    public function getCountries()
    {
        return Yii::$app->commonDB->createCommand('
            select id, name, name_eng, nick, "label", region, name_genitive 
            from dict_country 
            where active = :active and (select count(*) from dict_city where country = dict_country.id) <> 0
            order by "name" asc')
            ->bindValue(':active', true)
            ->queryAll();
    }

    private function getRouteText()
    {
        $text = "Направление 1: ";
        $text = $text.$this->directionCountry1.'/'.$this->directionCity1;
        $text = $text."<br>Направление 2: ".$this->directionCountry2.'/'.$this->directionCity2;
        $text = $text."<br>Направление 3: ".$this->directionCountry3.'/'.$this->directionCity3;

        return $text;
    }

    public function getRouteTextHotel()
    {
        $route = "";
        $route = $route."<br>Направление 1: <br>";
        $route = $route.$this->hotel1City.'/'.$this->hotel1Country.'/'.$this->hotel1;
        $route = $route."<br>Направление 2: ".$this->hotel2City.'/'.$this->hotel2Country.'/'.$this->hotel2;
        $route = $route."<br>Направление 3: ".$this->hotel3City.'/'.$this->hotel3Country.'/'.$this->hotel3;

        return $route;
    }

    public function getWishesHotel()
    {
        return $this->tripParams."<br>Питание: <br>".$this->hotelEating;
    }

    private function getWishes()
    {
        $text = $this->tripParams."<br>Пакет 1:";
        $text = $text.$this->formText($this->directionFlyCity1, 'Город вылета');
        $text = $text.$this->formText($this->directionHotelRating1, 'Рейтинг отеля');
        $text = $text.$this->formText($this->directionHotelEating1, 'Питание');
        $text = $text.$this->formAllocation($this->directionHotelAllocation1);
        $text = $text.$this->formText($this->directionHotelChildren1, 'Для детей');
        $text = $text.$this->formText($this->directionHotelOther1, 'Другие параметры');

        $text = $text."<br>Пакет 2:";
        $text = $text.$this->formText($this->directionFlyCity2, 'Город вылета');
        $text = $text.$this->formText($this->directionHotelRating2, 'Рейтинг отеля');
        $text = $text.$this->formText($this->directionHotelEating2, 'Питание');
        $text = $text.$this->formAllocation($this->directionHotelAllocation2);
        $text = $text.$this->formText($this->directionHotelChildren2, 'Для детей');
        $text = $text.$this->formText($this->directionHotelOther2, 'Другие параметры');

        $text = $text."<br>Пакет 3:";
        $text = $text.$this->formText($this->directionFlyCity3, 'Город вылета');
        $text = $text.$this->formText($this->directionHotelRating3, 'Рейтинг отеля');
        $text = $text.$this->formText($this->directionHotelEating3, 'Питание');
        $text = $text.$this->formAllocation($this->directionHotelAllocation3);
        $text = $text.$this->formText($this->directionHotelChildren3, 'Для детей');
        $text = $text.$this->formText($this->directionHotelOther3, 'Другие параметры');
        return $text;
    }

    public function formText($param, $text){
        if($param !== "" && $param !== null)
            return "<br>$text: $param";
        else return "<br>$text: Не важно";
    }

    public function formAllocation($location)
    {
        $text = "";
        if($location === '0' || $location === '' || $location === null){
            $text = $text."<br>Расположение: Не важно";
            return $text;
        }else{
            $locations = explode(';', $location);
            $trash = array_pop($locations);
            $allocationType = explode('-', $locations[0]);
            if($allocationType[0] === "1")
            {
                $text = $text."<br>Расположение: Пляжный: ";
                foreach ($locations as $allocation)
                {
                    $hotelLocation = explode('-', $allocation);
                    if($hotelLocation[1] === '1')
                        $text = $text.'<br>Через дорогу';
                    if($hotelLocation[1] === '2')
                        $text = $text.'<br>Вторая линия';
                    if($hotelLocation[1] === '3')
                        $text = $text.'<br>Третья линия';
                    if($hotelLocation[1] === '4')
                        $text = $text.'<br>Первая линия';
                }
            }
            if($allocationType[0] === "2")
            {
                $text = $text."<br>Расположение: Городской: ";
                foreach ($locations as $allocation)
                {
                    $hotelLocation = explode('-', $allocation);
                    if($hotelLocation[1] === '1')
                        $text = $text.'<br>Центр';
                    if($hotelLocation[1] === '2')
                        $text = $text.'<br>Близко к центру';
                    if($hotelLocation[1] === '3')
                        $text = $text.'<br>Окраина';
                }
            }
            if($allocationType[0] === "3")
            {
                $text = $text."<br>Расположение: Горнолыжный";
                foreach ($locations as $allocation)
                {
                    $hotelLocation = explode('-', $allocation);
                    if($hotelLocation[1] === '1')
                        $text = $text.'<br>Рядом';
                    if($hotelLocation[1] === '2')
                        $text = $text.'<br>Близко';
                    if($hotelLocation[1] === '3')
                        $text = $text.'<br>Далеко';
                }

            }
            if($allocationType[0] === "4")
            {
                $text = $text."<br>Расположение: Загородный";
                foreach ($locations as $allocation)
                {
                    $hotelLocation = explode('-', $allocation);
                    if($hotelLocation[1] === '1')
                        $text = $text.'<br>Рядом';
                    if($hotelLocation[1] === '2')
                        $text = $text.'<br>Близко';
                    if($hotelLocation[1] === '3')
                        $text = $text.'<br>Далеко';
                }

            }
            return $text;
        }
    }
}