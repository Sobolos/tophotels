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
        $data = [
            'name' => $this->name,
            'email' => $this->email,
            'phone' => $this->phone,
            'consultant_name' => 'Анна'
        ];

        Yii::$app->mailer->htmlLayout = "layouts/html";
        Yii::$app->mailer->compose('newlead', ['model' => $data])
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
            'Wishes' => $this->tripParams,
            'consultant_id' => "4"
        ])->execute();
    }
}