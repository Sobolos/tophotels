<?php


namespace app\models;
use Yii;
use yii\db\ActiveRecord;


class CustomTour extends ActiveRecord
{
    public $tripParams;
    public $name;
    public $phone;
    public $email;

    public function rules()
    {
        return [
            [['name', 'phone'], 'required'],
            ['email', 'email'],
            ['tripParams', 'string']
        ];
    }

    public function sendMail($data)
    {
        Yii::$app->mailer->htmlLayout = "layouts/html";
        Yii::$app->mailer->compose('newlead', ['data' => [$this->name, $this->phone]])
            ->setTo('germansobol@yandex.ru')
            ->setFrom([ 'test.th.welcome@gmail.com'])
            ->setSubject('Добавлена новая заявка')
            ->send();
    }

    public function insertDataDB()
    {
        Yii::$app->db->createCommand()->insert('leads', [
            'AddDate' => date("d-m-Y H:i:s"),
            'Route' => '',
            'CustomerName' => $this->name,
            'CustomerPhone' => $this->phone,
            'CustomerEmail' => $this->email,
            'Wishes' => $this->tripParams
        ])->execute();
    }
}