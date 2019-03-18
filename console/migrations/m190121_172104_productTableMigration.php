<?php

use yii\db\Migration;

/**
 * Class m190121_172104_productTableMigration
 */
class m190121_172104_productTableMigration extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m190121_172104_productTableMigration cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m190121_172104_productTableMigration cannot be reverted.\n";

        return false;
    }
    */
}
