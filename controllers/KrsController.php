<?php

namespace app\controllers;

class KrsController extends \yii\web\Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionCetak()
    {
        return $this->render('krs');
    }

}
