<?php

use yii\db\Schema;
use yii\db\Migration;

class m150804_021125_add_secret_key_in_user_table extends Migration
{
    public function up()
    {
        $this->addColumn('user', 'secret_key', Schema::TYPE_STRING);
    }

    public function down()
    {
        $this->dropColumn('user', 'secret_key');
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
