<?php

namespace app\controllers;

use app\models\Mahasiswa;
use yii\base\Model;
use yii\data\ActiveDataProvider;

class MahasiswaController extends \yii\web\Controller
{
    public function actionIndex()
    {
        $query = Mahasiswa::find();
        $dataProvider = new ActiveDataProvider([
            'query' => $query
        ]);
        return $this->render('index' , [
            'dataProvider' => $dataProvider]);
    }

    public function actionTambah()
    {
        $mahasiswa = new mahasiswa;
        $mahasiswa->nim = '60200121031-'. rand(100, 999);
        $mahasiswa->nama = 'Restu';
        $mahasiswa->kelas = 'A';
        $mahasiswa->status = 'Baru';
        if ($mahasiswa->save()) {
            return $this->redirect(['index']);
        }
        else {
            var_dump($mahasiswa->getErrors());
            die();
        }

    }

    public function actionUpdate($id)
    {
        $mahasiswa = mahasiswa::findOne($id);
        $mahasiswa->kelas = 'C';
        $mahasiswa->status = 'Updated';
        if ($mahasiswa->save()) {
            return $this->redirect(['index']);
        }
        else {
            var_dump($mahasiswa->getErrors());
            die();
        }

    }

    public function actionDelete($id)
    {
        $mahasiswa = mahasiswa::findOne($id);
        if ($mahasiswa->delete()) {
            return $this->redirect(['index']);
        }
        else {
            var_dump($mahasiswa->getErrors());
            die();
        }
    }

    public function actionView($id)
    {
        $mahasiswa =  Mahasiswa::findOne($id);
        if ($mahasiswa !== null) {
         return $this->render('view', ['mahasiswa' => $mahasiswa]);
        } else {
            throw new \yii\web\NotAcceptableHttpException('Data tidak ada');
        }
    }


}
