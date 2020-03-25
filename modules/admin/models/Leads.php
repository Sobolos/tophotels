<?php


namespace app\modules\admin\models;

use yii\db\ActiveRecord;


class Leads extends ActiveRecord
{
    public function getAllLeads($pagination)
    {
        return self::find()->orderBy('Id')
            ->offset($pagination->offset)
            ->limit($pagination->limit)
            ->orderBy('Id DESC')
            ->all();
    }
}