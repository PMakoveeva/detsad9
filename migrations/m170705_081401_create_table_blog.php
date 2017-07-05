<?php

use yii\db\Migration;

class m170705_081401_create_table_blog extends Migration
{
    public function safeUp()
    {
        $this->createTable('{{%blog}}',
            [
                'id' => $this->primaryKey(),
                'title' => $this->string(255),
                'date' => $this->integer(),
                'author' => $this->string(255),
                'description' => $this->string(255),
                'text' => $this->string(255),
                'tag' => $this->string(255),
                'category' => $this->string(50),
                'image' => $this->string(255)
            ]
        );

        $this->insert('{{%blog}}', [
            'title'=>'Первая запись',
            'date'=>time(),
            'author'=>'admin',
            'description'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.',
            'text'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.',
            'tag'=>'музыка',
            'category'=>"Музыка",
            'image'=>'images/blog/thumb1.jpg'
        ]);


    }

    public function safeDown()
    {
       $this->dropTable('{{%blog}}');

        return true;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m170705_081401_create_table_blog cannot be reverted.\n";

        return false;
    }
    */
}
