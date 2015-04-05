<?php

use yii\db\Schema;
use yii\db\Migration;

class m150330_153014_drop_user_table extends Migration
{
    public function up()
    {
        $this->dropTable('user');
    }

    public function down()
    {
        echo "m150330_153014_drop_user_table cannot be reverted.\n";

        return false;
    }
}
