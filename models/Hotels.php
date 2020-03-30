<?php


namespace app\models;


use Yii;
use yii\db\ActiveRecord;

class Hotels extends ActiveRecord
{

    public static function getDb() {
        return Yii::$app->commonDB;
    }

    public static function getHotelAllocation()
    {
        return Yii::$app->commonDB->createCommand
        ('
select dict_alloc_place_value.name alloc_name, 
       dict_alloc_place_value.description alloc_desc, 
       dict_alloc_place_value.place, 
       dict_alloc_place_type.name,
       dict_alloc_place_type.name_eng
from dict_alloc_place_value
left join dict_alloc_place_type
on dict_alloc_place_value.place = dict_alloc_place_type.id
order by place asc;')
            ->queryAll();
    }

    public static function getHotelsType()
    {
        return Yii::$app->commonDB->createCommand('
select id, name, nick, name_eng, description, weight 
from dict_alloccat 
where trash <> true  and name <> \'No Category\' 
order by weight desc;')->queryAll();
    }

    public static function getHotels($name)
    {
        return Yii::$app->commonDB->createCommand("
select dict_allocation.name hotel_name, 
       dict_allocation.name_eng hotel_name_eng,
       dict_allocation.resort hotel_resort_id, 
       dict_allocation.cat,
       dict_resort.id resort_id, 
       dict_resort.name resort_name, 
       dict_resort.country resort_country_id, 
       dict_country.name country_name,
       dict_country.id country_id,
       dict_alloccat.id cat_id,
       dict_alloccat.name cat_name
from dict_allocation
left join dict_resort on dict_allocation.resort = dict_resort.id
left join dict_country on dict_country.id = dict_resort.country
left join dict_alloccat on dict_alloccat.id = dict_allocation.cat
where dict_allocation.name like '%$name%'
order by hotel_name desc limit 10;
        ")->queryAll();
    }
}