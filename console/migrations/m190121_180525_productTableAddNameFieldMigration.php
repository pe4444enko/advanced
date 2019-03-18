<?php

use yii\db\Migration;

/**
 * Class m190121_180525_productTableAddNameFieldMigration
 */
class m190121_180525_productTableAddNameFieldMigration extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn("product", "name", $this->string()->notNull());
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m190121_180525_productTableAddNameFieldMigration cannot be reverted.\n";
        $this->dropColumn("product","name");
        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m190121_180525_productTableAddNameFieldMigration cannot be reverted.\n";

        return false;
    }
    */
}
