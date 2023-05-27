<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "pendidikan".
 *
 * @property int $id
 * @property string|null $nama_sekolah
 * @property string|null $tahun_selesai
 * @property string|null $jenis_pendidikan
 */
class Pendidikan extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'pendidikan';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['tahun_selesai'], 'safe'],
            [['nama_sekolah', 'jenis_pendidikan'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nama_sekolah' => 'Nama Sekolah',
            'tahun_selesai' => 'Tahun Selesai',
            'jenis_pendidikan' => 'Jenis Pendidikan',
        ];
    }
}
