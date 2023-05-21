<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "profile_101".
 *
 * @property int $id
 * @property int $id_mahasiswa
 * @property string $foto_profile
 *
 * @property Mahasiswa101 $mahasiswa
 */
class Profile101 extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'profile_101';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_mahasiswa', 'foto_profile'], 'required'],
            [['id_mahasiswa'], 'integer'],
            [['foto_profile'], 'string', 'max' => 255],
            [['id_mahasiswa'], 'exist', 'skipOnError' => true, 'targetClass' => Mahasiswa101::class, 'targetAttribute' => ['id_mahasiswa' => 'id']],
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
            'foto_profile' => 'Foto Profile',
        ];
    }

    /**
     * Gets query for [[Mahasiswa]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getMahasiswa101()
    {
        // return $this->hasOne(Mahasiswa101::class, ['id' => 'id_mahasiswa']);
        return $this->belongsTo(Mahasiswa101::class, ['id' => 'id_mahasiswa']);
    }
}
