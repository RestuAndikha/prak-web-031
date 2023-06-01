<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "mahasiswa_60200121031".
 *
 * @property int $id
 * @property string $nim
 * @property string $nama
 * @property string $kelas
 * @property string $jurusan
 */
class Mahasiswa60200121031 extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'mahasiswa_60200121031';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nim', 'nama', 'kelas', 'jurusan'], 'required'],
            [['nim', 'nama', 'jurusan'], 'string', 'max' => 20],
            [['kelas'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nim' => 'No. Induk Mahasiswa',
            'nama' => 'Nama Mahasiswa',
            'kelas' => 'Kelas',
            'jurusan' => 'Jurusan',
        ];
    }
    public static function getDataProvider()
    {
        return new ActiveDataProvider([
            'query' => Mahasiswa60200121031::find(),
        ]);
    }

    public function getProfil()
    {
        return $this->hasOne(Profil60200121031::class,['id' =>'id']);
}
}

