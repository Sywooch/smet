<?php

use yii\db\Schema;
use yii\db\Migration;

class m160119_165716_create_feedback_table extends Migration
{
    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            // http://stackoverflow.com/questions/766809/whats-the-difference-between-utf8-general-ci-and-utf8-unicode-ci
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%feedback}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string(),
            'email' => $this->string(),
            'massage' => $this->string(),
            'feed_file' => $this->string(),

            'created' => $this->integer(),
            'updated' => $this->integer(),
        ]);

    }

    public function down()
    {
        $this->dropTable('{{%feedback}}');
    }
}
