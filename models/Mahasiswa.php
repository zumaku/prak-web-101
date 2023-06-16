<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "mahasiswa".
 *
 * @property int $id_101
 * @property string|null $no_induk_mahasiswa_101
 * @property string|null $nama_mahasiswa_101
 * @property string|null $kelas_101
 * @property string|null $status_101
 */
class Mahasiswa extends \yii\db\ActiveRecord
{
    const KELAS = [
        'A' => 'A',
        'B' => 'B',
        'C' => 'C',
        'D' => 'D'
    ];

    public static function tableName(){
        return 'mahasiswa';
    }

    public function rules(){
        return [
            [['no_induk_mahasiswa_101', 'nama_mahasiswa_101', 'kelas_101', 'status_101'], 'string', 'max' => 255],
            [['kelas_101'], 'in', 'range' => self::KELAS],
        ];
    }

    public function attributeLabels(){
        return [
            'id_101' => 'ID 101',
            'no_induk_mahasiswa_101' => 'No. Induk Mahasiswa 101',
            'nama_mahasiswa_101' => 'Nama Mahasiswa 101',
            'kelas_101' => 'Kelas 101',
            'status_101' => 'Status 101',
        ];
    }
}
