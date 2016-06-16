<?php

use yii\db\Schema;
use yii\db\Migration;

/**
 * Handles the creation for table `lang_table`.
 */
class m160615_042000_create_lang_table extends Migration
{
    public function safeUp()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_general_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%lang}}', [
            'id' => Schema::TYPE_PK,
            'photo' => Schema::TYPE_STRING,
            'url' => Schema::TYPE_STRING . '(255) NOT NULL',
            'local' => Schema::TYPE_STRING . '(255) NOT NULL',
            'name' => Schema::TYPE_STRING . '(255) NOT NULL',
            'default' => Schema::TYPE_SMALLINT . ' NOT NULL DEFAULT 0',
            'date_update' => Schema::TYPE_INTEGER . ' NOT NULL',
            'date_create' => Schema::TYPE_INTEGER . ' NOT NULL',
        ], $tableOptions);

        $this->batchInsert('lang', ['photo', 'url', 'local', 'name', 'default', 'date_update', 'date_create'], [
            ['eng.png', 'en', 'en-EN', 'English', 0, time(), time()],
            ['rus.png', 'ru', 'ru-RU', 'Русский', 1, time(), time()],
            ['kaz.png', 'kz', 'kz-KZ', 'Қазақша', 0, time(), time()],
        ]);
    }

    public function safeDown()
    {
        $this->dropTable('{{%lang}}');
    }

}
