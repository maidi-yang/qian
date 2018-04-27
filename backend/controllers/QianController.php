<?php

namespace backend\controllers;

use Yii;
use yii\web\Controller;
use yii\data\Pagination;
use backend\models\AdminQian;

/**
 * TestController implements the CRUD actions for Test model.
 */
class QianController extends Controller
{
    public function actionChou()
    {
        $query = AdminQian::find();
        $querys = Yii::$app->request->post('id');
        if(count($querys) > 0){
            $qian = $query->select(['nuber','stick','solution'])->where(['nuber' => $querys])->asArray()->one();
            return $qian;
        }else{
            return '没有填写数字';
        }
    }
}
