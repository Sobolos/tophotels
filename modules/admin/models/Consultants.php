<?php


namespace app\modules\admin\models;

use Yii;
use yii\db\ActiveRecord;

class Consultants extends ActiveRecord
{
    public function getConsultants()
    {
        return self::find()->orderBy('Id')->all();
    }

    public static function getConsultant($id)
    {
        return self::find()->select(['name', 'email'])->where(['id' => $id])->one();
    }

    public static function getRules()
    {
        return Yii::$app->db->createCommand('
select rules_country.name country, rules_resort.name resort, rules_type.name hotel_type, consultants.* from rules_consultants 
left join rules_country on rules_country.id = rules_consultants.rule_country_id
left join rules_resort on rules_resort.id = rules_consultants.rule_resort_id
left join rules_type on rules_type.id = rules_consultants.rule_type_id
left join consultants on rules_consultants.consultant_id = consultants.id')
            ->queryAll();
    }
}