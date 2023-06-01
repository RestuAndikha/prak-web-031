<?php

namespace app\controllers;
use app\models\Profil60200121031;
use yii\data\ActiveDataProvider;

class ProfilController extends \yii\web\Controller
{
    public function actionIndeks()
    {
        $query = Profil60200121031::find();
        $dataProvider = new ActiveDataProvider([
            'query' => $query
        ]);
        return $this->render('indeks' , [
            'dataProvider' => $dataProvider]);
    }

}
