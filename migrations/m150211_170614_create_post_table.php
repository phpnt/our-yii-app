<?php

use yii\db\Schema;
use yii\db\Migration;

class m150211_170614_create_post_table extends Migration
{
    public function safeUp()
    {
        $this->createTable('post',['id'=>'pk','post'=>'text','user_id'=>'int']);
        $this->addForeignKey('post_user_id','post','user_id','user','id');
    }

    public function safeDown()
    {
        $this->dropTable('post');
    }
}
