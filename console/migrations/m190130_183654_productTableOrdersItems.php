<?php

use yii\db\Migration;

/**
 * Class m190130_183654_productTableOrdersItems
 */
class m190130_183654_productTableOrdersItems extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('ordersitems', [
            'id' => $this->primaryKey(),
            'productID' => $this->integer()->notNull(),
            'ordersID' => $this->integer()->notNull(),
            'count' => $this->integer()->notNull(),
            'price' => $this->integer()->notNull()
        ]);
        
        $this->createIndex(
            'idx-ordersitems-productID',
            'ordersitems',
            'productID'
        );

        $this->addForeignKey(
            'fk-ordersitems-productID',
            'ordersitems',
            'productID',
            'product',
            'id',
            'CASCADE'
        );

        $this->createIndex(
            'idx-ordersitems-ordersID',
            'ordersitems',
            'ordersID'
        );

        $this->addForeignKey(
            'fk-ordersitems-ordersID',
            'ordersitems',
            'ordersID',
            'orders',
            'id',
            'CASCADE'
        );

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m190130_183654_productTableOrdersItems cannot be reverted.\n";
        $this->dropForeignKey(
            'fk-ordersitems-productID',
            'ordersitems'
        );
        $this->dropForeignKey(
            'fk-ordersitems-ordersID',
            'ordersitems'
        );
        $this->dropIndex(
            'idx-ordersitems-productID',
            'ordersitems'
        );
        $this->dropIndex(
            'idx-ordersitems-ordersID',
            'ordersitems'
        );
        $this->dropTable('ordersitems');

        return false;


    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m190130_183654_productTableOrdersItems cannot be reverted.\n";

        return false;
    }
    */
}
