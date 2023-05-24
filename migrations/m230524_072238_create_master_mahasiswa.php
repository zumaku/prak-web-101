<?php

use yii\db\Migration;

/**
 * Class m230524_072238_create_master_mahasiswa
 */
class m230524_072238_create_master_mahasiswa extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('master_mahasiswa', array(
            'id' => 'pk',
            'tahun' => 'year',
            'tanggal_mulai' => 'datetime',
            'tanggal_selesai' => 'datetime',
        ));

        // $tableName = 'master_mahasiswa';
        // $this->addColumn($tableName, 'id', $this->primaryKey());
        // $this->addColumn($tableName, 'tahun', $this->string(50));
        // $this->addColumn($tableName, 'tanggal_mulai', $this->date());
        // $this->addColumn($tableName, 'tanggal_selesai', $this->date());
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m230524_072238_create_master_mahasiswa cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m230524_072238_create_master_mahasiswa cannot be reverted.\n";

        return false;
    }
    */
}
