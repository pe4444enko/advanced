<?php

use yii\db\Migration;

/**
 * Class m190123_181511_productTableProductCategory
 */
class m190123_181511_productTableProductCategory extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('ProductCategory', [
            'id' => $this->primaryKey(),
            'name' => $this->string()->notNull(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m190123_181511_productTableProductCategory cannot be reverted.\n";
        $this->dropTable('ProductCategory');
        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m190123_181511_productTableProductCategory cannot be reverted.\n";

        return false;
    }
    */
}
