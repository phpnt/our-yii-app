<?php

use yii\db\Schema;
use yii\db\Migration;

class m150330_153138_create_user_table extends Migration
{
    public function up()
    {
        $this->createTable(
            'user',
            [
                'id'=>Schema::TYPE_PK,
                'password'=>Schema::TYPE_STRING.' NOT NULL',
                'email'=>Schema::TYPE_STRING.' NOT NULL'
            ]
        );
    }

    public function down()
    {
        $this->dropTable('user');
    }
}
