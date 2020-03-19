<?php


namespace app\models;

use Yii;
use yii\db\ActiveRecord;

class Tour extends ActiveRecord
{
    public $departDates;
    public $nightsAmount;
    public $adultsAmount;
    public $childrenAmount;
    public $optPrice;
    public $maxPrice;
    public $currency;
    public $child1Age;
    public $child2Age;
    public $child3Age;

    public static function tableName()
    {
        return 'leads';
    }

    public function rules()
    {
        return [
            [['departDates', 'nightsAmount', 'adultsAmount', 'childrenAmount'], 'required'],
            ['departDates', 'string'],
            ['nightsAmount', 'string'],
            ['adultsAmount', 'string'],
            ['childrenAmount', 'string'],
            ['child1Age', 'string'],
            ['child2Age', 'string'],
            ['child3Age', 'string'],
            ['optPrice', 'string'],
            ['maxPrice', 'string'],
            ['currency', 'string']
        ];
    }

    /*public function sendMail($data)
    {
        Yii::$app->mailer->htmlLayout = "layouts/html";
        Yii::$app->mailer->compose('newlead', ['model' => $data])
            ->setTo('germansobol@yandex.ru')
            ->setFrom([ 'test.th.welcome@gmail.com'])
            ->setSubject('Добавлена новая заявка')
            ->send();
    }*/

    public function insertDataDB()
    {
        /*Yii::$app->db->createCommand()->insert('leads', [
            'leadAddDate' => date("d-m-Y H:i:s"),
            'leadRoute' => '',
            'leadCustomerName' => $this->name,
            'leadCustomerPhone' => $this->phone,
            'leadCustomerEmail' => $this->email,
            'leadWishes' => $this->tripParams
        ])->execute();*/
    }
}