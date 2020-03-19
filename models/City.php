<?php


namespace app\models;


use Yii;
use yii\db\ActiveRecord;

class City extends ActiveRecord
{

    public static function getDb() {
        return Yii::$app->commonDB;
    }

    public static function tableName()
    {
        return '{{%city}}';
    }

    public static function getCities($id)
    {
       return self::find()
           ->where(['active' => true, 'id' => $id])
           ->orderBy('name ASC')
           ->all();
    }
}