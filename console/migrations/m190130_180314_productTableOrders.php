<?php

use yii\db\Migration;

/**
 * Class m190130_180314_productTableOrders
 */
class m190130_180314_productTableOrders extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('orders', [
            'id' => $this->primaryKey(),
            'userID' => $this->integer()->notNull(),
            'date' => $this->integer()->notNull(),
            'status' => $this->integer()->notNull()
        ]);
        
        $this->addForeignKey(
            'fk-orders-userID',
            'orders',
            'userID',
            'user',
            'id',
            'CASCADE'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m190130_180314_productTableOrders cannot be reverted.\n";
        $this->dropTable('orders');
        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m190130_180314_productTableOrders cannot be reverted.\n";

        return false;
    }
    */
}
