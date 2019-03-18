<?php

use yii\db\Migration;

/**
 * Class m190121_170640_productTableMigration
 */
class m190121_170640_productTableMigration extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('product', [
            'id' => $this->primaryKey(),
            'price' => $this->double()->notNull(),
            'imageUrl' => $this->string()->notNull(),
            'description' => $this->string()->notNull()
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m190121_170640_productTableMigration cannot be reverted.\n";
        $this->dropTable('product');
        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m190121_170640_productTableMigration cannot be reverted.\n";

        return false;
    }
    */
}
