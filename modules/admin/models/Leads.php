<?php


namespace app\modules\admin\models;

use yii\db\ActiveRecord;


class Leads extends ActiveRecord
{
    public function getAllLeads($pagination, $id = 0)
    {
        if($id !== 0){
            return self::find()
                ->select('*')
                ->where(['consultant_id' => $id])
                ->leftJoin('consultants', 'consultants.id = leads.consultant_id')
                ->offset($pagination->offset)
                ->limit($pagination->limit)
                ->orderBy('Id DESC')
                ->asArray()
                ->all();
        }else{
            return self::find()
                ->select('*')
                ->leftJoin('consultants', 'leads.consultant_id = consultants.id')
                ->offset($pagination->offset)
                ->limit($pagination->limit)
                ->orderBy('Id DESC')
                ->asArray()
                ->all();
        }
    }
}