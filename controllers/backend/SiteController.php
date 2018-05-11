<?php

namespace app\controllers\backend;

use Yii;
use yii\web\Controller;

class SiteController extends Controller
{
    public function actionIndex()
    {
        return $this->renderPartial('index');
    }
}