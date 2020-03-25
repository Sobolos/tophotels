<?php

namespace app\modules\admin\controllers;

use app\modules\admin\models\Leads;
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
        $model = new Leads();
        $pagination = new Pagination([
            'defaultPageSize' => 10,
            'totalCount' => $model->find()->count(),
        ]);

        $leads = $model->getAllLeads($pagination);

        return $this->render('index', [
            'leads' => $leads,
            'pagination' => $pagination,
        ]);
    }
}
