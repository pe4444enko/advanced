<?php

use yii\db\Migration;

/**
 * Class m190125_094015_productTableDiscounts
 */
class m190125_094015_productTableDiscounts extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('Discounts', [
            'id' => $this->primaryKey(),
            'products' => $this->string()->notNull(),
            'imageUrl' => $this->string()->notNull(),
            'title' => $this->string()->notNull()
        ]); 
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m190125_094015_productTableDiscounts cannot be reverted.\n";
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
        echo "m190125_094015_productTableDiscounts cannot be reverted.\n";

        return false;
    }
    */
}
