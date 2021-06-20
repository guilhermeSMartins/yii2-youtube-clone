<?php

namespace backend\controllers;

use yii\web\Controller;

class HelloController extends Controller //hello
{
    public function actionIndex() //index
    {
        // return 'SALV';
        return $this->render('index');
    }
}