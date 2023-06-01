<?php

use yii\db\Migration;

/**
 * Class m230525_085419_create_barang
 */
class m230525_085419_create_barang extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('barang', [
            'id' => $this->primaryKey(),
            'nama_barang' => $this->string(),
            'kode_barang' => $this->integer(),
            'harga' => $this->integer(),
            'stok' => $this->integer(),
        ]);

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m230525_085419_create_barang cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m230525_085419_create_barang cannot be reverted.\n";

        return false;
    }
    */
}
