<?php

use yii\db\Migration;

/**
 * Class m180521_094242_board_topic_subscriptions
 */
class m180521_094242_board_topic_subscriptions extends Migration
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
        echo "m180521_094242_board_topic_subscriptions cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m180521_094242_board_topic_subscriptions cannot be reverted.\n";

        return false;
    }
    */
}
