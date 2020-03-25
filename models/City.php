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

    public static function getFlyCities()
    {
        return Yii::$app->db->createCommand('
            select * from fly_cities 
             order by case when id = 19 or id = 29 then 0 else 1 end, name;')
            ->queryAll();
    }

    public static function getCities($id)
    {
       return self::find()
           ->select(['id', 'name', 'name_eng', 'district', 'country'])
           ->where(['active' => true, 'country' => $id])
           ->orderBy('name ASC')
           ->asArray()
           ->all();
    }
}