<?php


namespace app\modules\admin\models;

use yii\db\ActiveRecord;
use yii\log\EmailTarget;

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
}