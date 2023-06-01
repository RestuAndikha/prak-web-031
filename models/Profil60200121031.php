<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "profil_60200121031".
 *
 * @property int $id
 * @property string $id_mahasiswa
 * @property string $foto_profil
 */
class Profil60200121031 extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'profil_60200121031';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_mahasiswa', 'foto_profil'], 'required'],
            [['id_mahasiswa', 'foto_profil'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'id_mahasiswa' => 'Id Mahasiswa',
            'foto_profil' => 'Foto Profil',
        ];
    }
    public static function getDataProvider()
{
    return new ActiveDataProvider([
        'query' => Profil60200121031::find(),
    ]);
}

public function getMahasiswa()
{
    return $this->belongsTo(Mahasiswa60200121031::class, ['id' => 'id_mahasiswa']);
}
}
