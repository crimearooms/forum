<?php

use yii\db\Migration;

/**
 * Class m180521_094054_board_forum_perms
 */
class m180521_094054_board_forum_perms extends Migration
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
        echo "m180521_094054_board_forum_perms cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m180521_094054_board_forum_perms cannot be reverted.\n";

        return false;
    }
    */
}
