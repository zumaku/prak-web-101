<?php

use yii\db\Migration;

/**
 * Class m230526_001538_create_pendidikan
 */
class m230526_001538_create_pendidikan extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('pendidikan', array(
            'id' => 'pk',
            'nama_sekolah' => 'string',
            'tahun_selesai' => 'number',
            'jenis_pendidikan' => 'string'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        // echo "m230526_001538_create_pendidikan cannot be reverted.\n";
        $this->delete('pendidikan');
        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m230526_001538_create_pendidikan cannot be reverted.\n";

        return false;
    }
    */
}
