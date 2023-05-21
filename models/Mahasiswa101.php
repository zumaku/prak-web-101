<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "mahasiswa_101".
 *
 * @property int $id
 * @property string $nim
 * @property string $nama
 * @property string $kelas
 * @property string $jurusan
 *
 * @property Profile101[] $profile101s
 */
class Mahasiswa101 extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'mahasiswa_101';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nim', 'nama', 'kelas', 'jurusan'], 'required'],
            [['nim', 'nama', 'kelas', 'jurusan'], 'string', 'max' => 255],
            [['nim'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nim' => 'Nim',
            'nama' => 'Nama',
            'kelas' => 'Kelas',
            'jurusan' => 'Jurusan',
        ];
    }

    /**
     * Gets query for [[Profile101s]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getProfile101()
    {
        // return $this->hasMany(Profile101::class, ['id_mahasiswa' => 'id']);
        return $this->hasOne(Profile101::class, ['id_mahasiswa' => 'id']);
    }
}
