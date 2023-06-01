<?php

namespace app\controllers;

use app\models\Barang;
use yii\data\ActiveDataProvider;

class BarangController extends \yii\web\Controller
{
    public function actionIndex()
    {
        $query = barang::find();
        $dataProvider = new ActiveDataProvider([
            'query' => $query
        ]);
        return $this->render('index' , [
            'dataProvider' => $dataProvider]);
    }

    public function actionTambah()
    {
        $barang = new barang;
        $barang->nama_barang = 'hp';
        $barang->kode_barang = '10';
        $barang->harga = '30000';
        $barang->stok = '11';
        if ($barang->save()) {
            return $this->redirect(['index']);
        }
        else {
            var_dump($barang->getErrors());
            die();
        }

    }

    public function actionUpdate($id)
    {
        $barang = barang::findOne($id);
        $barang->nama_barang = 'pensil';
        if ($barang->save()) {
            return $this->redirect(['index']);
        }
        else {
            var_dump($barang->getErrors());
            die();
        }

    }

    public function actionDelete($id)
    {
        $barang = barang::findOne($id);
        if ($barang->delete()) {
            return $this->redirect(['index']);
        }
        else {
            var_dump($barang->getErrors());
            die();
        }
    }

}