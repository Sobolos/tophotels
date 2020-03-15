<?php


namespace app\models;

use yii\db\ActiveRecord;

class Tour extends ActiveRecord
{
    public $tripParams;
    public $name;
    public $phone;
    public $email;

    /*public function rules()
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
        Yii::$app->mailer->compose('newlead', ['model' => $data])
            ->setTo('germansobol@yandex.ru')
            ->setFrom([ 'test.th.welcome@gmail.com'])
            ->setSubject('Добавлена новая заявка')
            ->send();
    }

    public function insertDataDB()
    {
        Yii::$app->db->createCommand()->insert('leads', [
            'leadAddDate' => date("d-m-Y H:i:s"),
            'leadRoute' => '',
            'leadCustomerName' => $this->name,
            'leadCustomerPhone' => $this->phone,
            'leadCustomerEmail' => $this->email,
            'leadWishes' => $this->tripParams
        ])->execute();
    }*/
}