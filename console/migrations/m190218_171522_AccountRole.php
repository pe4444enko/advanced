<?php

use yii\db\Migration;

/**
 * Class m190218_171522_AccountRole
 */
class m190218_171522_AccountRole extends Migration
{
    /**
     * {@inheritdoc}
     */
  
        public function safeUp()
        {
            $auth =Yii::$app->authManager;

            $merchendaiser = $auth->createRole('merchendaiser');
            $auth->add($merchendaiser);

            $contentManager = $auth->createRole('contentManager');
            $auth->add($contentManager);

            $adManager = $auth->createRole('adManager');
            $auth->add($adManager);
        }
    

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m190218_171522_AccountRole cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m190218_171522_AccountRole cannot be reverted.\n";

        return false;
    }
    */
}
