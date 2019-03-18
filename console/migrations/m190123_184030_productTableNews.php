<?php

use yii\db\Migration;

/**
 * Class m190123_184030_productTableNews
 */
class m190123_184030_productTableNews extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
   {
        $this->createTable('News', [
            'id' => $this->primaryKey(),
            'title' => $this->string()->notNull(),
            'content' => $this->string()->notNull(),
        ]); 
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m190123_184030_productTableNews cannot be reverted.\n";
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
        echo "m190123_184030_productTableNews cannot be reverted.\n";

        return false;
    }
    */
}
