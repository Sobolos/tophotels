<?php


namespace app\modules\admin\models;

use yii\db\ActiveRecord;

class Consultants extends ActiveRecord
{
    public function getConsultants()
    {
        return self::find()->orderBy('Id')->all();
    }

    public static function getConsultantName($id)
    {
        return self::find()->select('name')->where(['id' => $id])->one();
    }
}