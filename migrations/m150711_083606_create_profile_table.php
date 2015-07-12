<?php

use yii\db\Schema;
use yii\db\Migration;

class m150711_083606_create_profile_table extends Migration
{
    public function safeUp()
    {
        $this->createTable(
            'profile',
            [
                'user_id' => Schema::TYPE_PK,
                'avatar' => Schema::TYPE_STRING,
                'first_name' => Schema::TYPE_STRING.'(32)',
                'second_name' => Schema::TYPE_STRING.'(32)',
                'middle_name' => Schema::TYPE_STRING.'(32)',
                'birthday' => Schema::TYPE_INTEGER,
                'gender' => Schema::TYPE_SMALLINT
            ]
        );
        $this->addForeignKey('profile_user', 'profile', 'user_id', 'user', 'id', 'cascade', 'cascade');
    }

    public function safeDown()
    {
        $this->dropForeignKey('profile_user', 'profile');
        $this->dropTable('profile');
    }
    
    /*
    // Use safeUp/safeDown to run migration code within a transaction
    public function safeUp()
    {
    }
    
    public function safeDown()
    {
    }
    */
}
