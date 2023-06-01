<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "barang".
 *
 * @property int $id
 * @property string|null $nama_barang
 * @property int|null $kode_barang
 * @property int|null $harga
 * @property int|null $stok
 */
class Barang extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'barang';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['kode_barang', 'harga', 'stok'], 'integer'],
            [['nama_barang'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nama_barang' => 'Nama Barang',
            'kode_barang' => 'Kode Barang',
            'harga' => 'Harga',
            'stok' => 'Stok',
        ];
    }
}
