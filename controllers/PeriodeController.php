<?php

namespace app\controllers;

use yii\web\Controller;
use yii\data\Pagination;
use app\models\Periode;

class PeriodeController extends Controller
{
    public function actionIndex()
    {
        $query = Periode::find();

        $pagination = new Pagination([
            'defaultPageSize' => 5,
            'totalCount' => $query->count(),
        ]);

        $coperation = $query->orderBy('id_periode')
            ->offset($pagination->offset)
            ->limit($pagination->limit)
            ->all();

        return $this->render('index', [
            'coperation' => $coperation,
            'pagination' => $pagination,
        ]);
    }
}