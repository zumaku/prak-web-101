<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "produk".
 *
 * @property int $id_produk
 * @property int $id
 * @property string $nama_produk
 * @property string $deskripsi
 * @property int $stok
 * @property int $harga
 *
 * @property User $id0
 * @property Penjualan[] $penjualans
 */
class Produk extends \yii\db\ActiveRecord
{
    const KULINER = '1';
    const KUE = '2';
    const MAKANAN_BERAT = '3';
    const KATEGORI = [
        '1' => 'Kuliner',
        '2' => 'Kue',
        '3' => 'Makanan Berat',
    ];

    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'produk';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nama_produk', 'deskripsi', 'stok', 'harga'], 'required'],
            [['id', 'stok', 'harga'], 'integer'],
            [['deskripsi'], 'string'],
            [['kategori'], 'in', 'range' => [self::KUE, self::KULINER, self::MAKANAN_BERAT]],
            [['nama_produk'], 'string', 'max' => 255],
            [['id'], 'exist', 'skipOnError' => true, 'targetClass' => User::class, 'targetAttribute' => ['id' => 'id_produk']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_produk' => 'Id Produk',
            'id' => 'ID',
            'nama_produk' => 'Nama Produk',
            'deskripsi' => 'Deskripsi',
            'kategori' => 'Kategori',
            'stok' => 'Stok',
            'harga' => 'Harga',
        ];
    }

    /**
     * Gets query for [[Id0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getId0()
    {
        return $this->hasOne(User::class, ['id' => 'id']);
    }

    /**
     * Gets query for [[Penjualans]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPenjualan()
    {
        return $this->hasOne(Penjualan::class, ['id_produk' => 'id']);
    }
    
    public function getUser()
    {
        return $this->hasOne(User::class, ['id' => 'id_user']);
    }
}
