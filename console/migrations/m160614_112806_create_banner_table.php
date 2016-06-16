<?php

use yii\db\Schema;
use yii\db\Migration;

/**
 * Handles the creation for table `banner_table`.
 */
class m160614_112806_create_banner_table extends Migration
{
    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_general_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%banner}}', [
            'id' => $this->primaryKey(),
            'title' => $this->string(),
            'photo' => $this->string(),
            'link' => $this->string(),

            'is_published' => $this->integer()->defaultValue(0),
            'sort_index' => $this->integer(),
            'created' => $this->integer(),
            'updated' => $this->integer(),

        ], $tableOptions);

        $this->batchInsert('{{%banner}}',
            ['title', 'photo', 'link', 'is_published'],
            [
                ['Астана креатив', 'partner1.jpg', '', 1],
                ['название', 'partner2.jpg', '', 1],
                ['название', 'partner3.jpg', '', 1],
                ['название', 'partner4.jpg', '', 1],
                ['название', 'partner5.jpg', '', 1],
                ['название', 'partner6.jpg', '', 1],
            ]
        );
    }

    public function down()
    {
        $this->dropTable('{{%banner}}');
    }
}
