<?php

namespace app\modules\admin\controllers;

use app\modules\admin\models\Leads;
use app\modules\admin\models\Consultants;
use yii\web\Controller;
use yii\data\Pagination;
/**
 * Default controller for the `admin` module
 */
class DefaultController extends Controller
{
    /**
     * Renders the index view for the module
     * @return string
     */
    public function init()
    {
        parent::init();
        $this->layout = 'admin';
    }

    public function actionIndex()
    {
        $leads = new Leads();
        $consultants = new Consultants();
        $pagination = new Pagination([
            'defaultPageSize' => 10,
            'totalCount' => $leads->find()->count(),
        ]);

        $id = \Yii::$app->request->get('id');

        if($id !== null)
            $leads = $leads->getAllLeads($pagination, $id);
        else $leads = $leads->getAllLeads($pagination);
        $consultants = $consultants->getConsultants();

        return $this->render('index', [
            'leads' => $leads,
            'pagination' => $pagination,
            'consultants' => $consultants
        ]);
    }
}
