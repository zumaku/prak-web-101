<?php

use yii\db\Migration;

/**
 * Class m230603_234307_create_mahasiswa
 */
class m230603_234307_create_mahasiswa extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('mahasiswa', array(
            'id_101' => 'pk',
            'no_induk_mahasiswa_101' => 'string',
            'nama_mahasiswa_101' => 'string',
            'kelas_101' => 'string',
            'status_101' => 'string'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->delete('mahasiswa');
        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m230603_234307_create_mahasiswa cannot be reverted.\n";

        return false;
    }
    */
}
