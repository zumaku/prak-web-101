<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "penjualan".
 *
 * @property int $id_penjualan
 * @property int $id_produk
 * @property int $jumlah_terjual
 * @property int $keuntungan
 *
 * @property Produk $produk
 */
class Penjualan extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'penjualan';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_produk', 'jumlah_terjual', 'keuntungan'], 'required'],
            [['id_produk', 'jumlah_terjual', 'keuntungan'], 'integer'],
            [['id_produk'], 'exist', 'skipOnError' => true, 'targetClass' => Produk::class, 'targetAttribute' => ['id_produk' => 'id_produk']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_penjualan' => 'Id Penjualan',
            'id_produk' => 'Id Produk',
            'jumlah_terjual' => 'Jumlah Terjual',
            'keuntungan' => 'Keuntungan',
        ];
    }

    /**
     * Gets query for [[Produk]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getProduk()
    {
        return $this->hasOne(Produk::class, ['id_produk' => 'id_produk']);
    }
}
