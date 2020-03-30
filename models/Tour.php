<?php


namespace app\models;

use Yii;
use yii\db\ActiveRecord;
use app\modules\admin\models\Consultants;
use yii\helpers\Console;

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

    /*
     * Отправка почты
     */
    public function sendMail()
    {
        $consultant_id = Yii::$app->session->get('consultant');
        $consultant = Consultants::getConsultant($consultant_id);

        var_dump($consultant);

        //если не распределена то не отправляем
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
        $this->getConsultantTour($this->directionCountry1, $this->directionHotelStars1, $this->directionCity1);

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

    /*
     * определяем id консультанта и пишем его в сессию для доступа в функции обновления
     * @param string country - поле для проверки страны (турпакет, отель)
     * @param string rating - поле для проверки рейтинга (турпакет, отель)
     */
    public function getConsultantTour($pCountry, $pType, $pResort = null)
    {
        $consultant_id = "";

        $rules = Consultants::getRules();
        $checking_array = [];

        $country1 = false;
        $country2 = false;
        $country3 = false;

        foreach ($rules as $rule)
        {
            $checking_array[$rule['id']]['rules']['country'][] = $rule['country'];
            $checking_array[$rule['id']]['rules']['resort'][] = $rule['resort'];
            $checking_array[$rule['id']]['rules']['type'][] = $rule['hotel_type'];
            $checking_array[$rule['id']]['data']['email'] = $rule['email'];
            $checking_array[$rule['id']]['data']['name'] = $rule['name'];
        }

        foreach ($checking_array as $cons_id=>$rule)
        {
            $countries = '(';
            $types = '(';
            $resorts = '(';

            foreach($rule['rules']['country'] as $country)
                $countries .= $country."|";
            foreach($rule['rules']['type'] as $type)
                $types .= $type."|";
            foreach($rule['rules']['resort'] as $resort)
                $resorts .= $resort."|";

            $countries = mb_substr($countries, 0, -1);
            $countries .= ')';

            $types = mb_substr($types, 0, -1);
            $types .= ')';

            $resorts = mb_substr($resorts, 0, -1);
            $resorts .= ')';

            if (in_array($this->directionCountry1, $rule['rules']['country']))
                $country1 = true;
            else
                $country1 = false;

            if (in_array($this->directionCountry2, $rule['rules']['country']))
                $country2 = true;
            else
                $country2 = false;
            if (in_array($this->directionCountry3, $rule['rules']['country']))
                $country3 = true;
            else
                $country3 = false;

            if($pCountry === '')
            {
                Yii::$app->session->set('consultant', 0);
                return true;
            }

            if(preg_match($countries, $pCountry) === 1 && preg_match($types, $pType) === 1 && preg_match($resorts, $pResort) === 1 )
            {
                $consultant_id = $cons_id;
                break;
            }else
                $consultant_id = 4;
        }

        $two_coincidences = ($country1 && $country2);
        $three_coincidences = ($country1 && $country2 && $country3);

        if($two_coincidences || $three_coincidences){
            Yii::$app->session->set('consultant', 4);
            return true;
        }else{
            Yii::$app->session->set('consultant', $consultant_id);
            return true;
        }

    }

    /*
     * определяем id консультанта и пишем его в сессию для доступа в функции обновления
     * @param string country - поле для проверки страны (турпакет, отель)
     * @param string rating - поле для проверки рейтинга (турпакет, отель)
     */
    public function getConsultantHotel($pCountry, $pType, $pResort = null)
    {
        $consultant_id = "";

        $rules = Consultants::getRules();
        $checking_array = [];

        $country1 = false;
        $country2 = false;
        $country3 = false;

        foreach ($rules as $rule)
        {
            $checking_array[$rule['id']]['rules']['country'][] = $rule['country'];
            $checking_array[$rule['id']]['rules']['resort'][] = $rule['resort'];
            $checking_array[$rule['id']]['rules']['type'][] = $rule['hotel_type'];
            $checking_array[$rule['id']]['data']['email'] = $rule['email'];
            $checking_array[$rule['id']]['data']['name'] = $rule['name'];
        }

        foreach ($checking_array as $cons_id=>$rule)
        {
            $countries = '(';
            $types = '(';
            $resorts = '(';

            foreach($rule['rules']['country'] as $country)
                $countries .= $country."|";
            foreach($rule['rules']['type'] as $type)
                $types .= $type."|";
            foreach($rule['rules']['resort'] as $resort)
                $resorts .= $resort."|";

            $countries = mb_substr($countries, 0, -1);
            $countries .= ')';

            $types = mb_substr($types, 0, -1);
            $types .= ')';

            $resorts = mb_substr($resorts, 0, -1);
            $resorts .= ')';

            if (in_array($this->hotel1Country, $rule['rules']['country']))
                $country1 = true;
            else
                $country1 = false;

            if (in_array($this->hotel2Country, $rule['rules']['country']))
                $country2 = true;
            else
                $country2 = false;
            if (in_array($this->hotel3Country, $rule['rules']['country']))
                $country3 = true;
            else
                $country3 = false;

            if($pCountry === '')
            {
                Yii::$app->session->set('consultant', 0);
                return true;
            }

            var_dump(preg_match($countries, $pCountry) === 1 && preg_match($types, $pType) === 1 && preg_match($resorts, $pResort) === 1 );
            if(preg_match($countries, $pCountry) === 1 && preg_match($types, $pType) === 1 && preg_match($resorts, $pResort) === 1 )
            {
                $consultant_id = $cons_id;
                break;
            }else
                $consultant_id = 4;
        }

        $two_coincidences = ($country1 && $country2);
        $three_coincidences = ($country1 && $country2 && $country3);

        if($two_coincidences || $three_coincidences){
            Yii::$app->session->set('consultant', 4);
            return true;
        }else{
            Yii::$app->session->set('consultant', $consultant_id);
            return true;
        }
    }

    /*
     * вносит данные по отелю в БД
     */
    public function insertDataHotelDB()
    {
        $this->getConsultantHotel($this->hotel1Country, $this->hotel1Rating, $this->hotel1City);
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

    /*
     * Обновляет данные в БД по айди заявки
     */
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

    /*
     * возвращает список стран
     */
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

    /*
     * возвращает текст направления (по турпакету)
     */
    private function getRouteText()
    {
        $text = "Направление 1: ";
        $text = $text.$this->directionCountry1.'/'.$this->directionCity1;
        $text = $text."<br>Направление 2: ".$this->directionCountry2.'/'.$this->directionCity2;
        $text = $text."<br>Направление 3: ".$this->directionCountry3.'/'.$this->directionCity3;

        return $text;
    }

    /*
     * возвращает текст направления (по отелю)
     */
    public function getRouteTextHotel()
    {
        $route = "";
        $route = $route."<br>Направление 1: <br>";
        $route = $route.$this->hotel1City.'/'.$this->hotel1Country.'/'.$this->hotel1;
        $route = $route."<br>Направление 2: ".$this->hotel2City.'/'.$this->hotel2Country.'/'.$this->hotel2;
        $route = $route."<br>Направление 3: ".$this->hotel3City.'/'.$this->hotel3Country.'/'.$this->hotel3;

        return $route;
    }

    /*
     * возвращает текст пожеланий (по отелю)
     */
    public function getWishesHotel()
    {
        return $this->tripParams."<br>Питание: <br>".$this->hotelEating;
    }

    /*
     * возвращает текст пожеланий (по турпакету)
     */
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

    /*
     * ставит текст ключ: текст
     * @param string param - ключ
     * @param string text -  текст
     */
    public function formText($param, $text){
        if($param !== "" && $param !== null)
            return "<br>$text: $param";
        else return "<br>$text: Не важно";
    }

    /*
     * возвращает текст расположения (по турпакету)
     */
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