<?php

use yii\db\Migration;

/**
 * Class m230525_085419_create_mahasiswa
 */
class m230525_085419_create_mahasiswa extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('barang', [
            'id' => $this->primaryKey(),
            'nim' => $this->string(),
            'nama' => $this->string(),
            'kelas' => $this->string(),
            'status' => $this->string(),
        ]);

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m230525_085419_create_mahasiswa cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m230525_085419_create_mahasiswa cannot be reverted.\n";

        return false;
    }
    */
}
