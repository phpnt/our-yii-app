<?php

use yii\db\Schema;
use yii\db\Migration;

class m150211_193807_drop_post_table extends Migration
{
    public function up()
    {
        $this->dropTable('post');
    }

    public function down()
    {
        echo "m150211_193807_drop_post_table cannot be reverted.\n";

        return false;
    }
}
