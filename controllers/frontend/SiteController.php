<?php

namespace app\controllers\frontend;

use Yii;
use yii\web\Controller;

class SiteController extends Controller
{
    public function actionIndex()
    {
        return $this->renderPartial('index');
    }
}