<?php

use yii\db\Schema;
use yii\db\Migration;

class m160112_182121_create_slider_table extends Migration
{
    public function up()
    {

        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            // http://stackoverflow.com/questions/766809/whats-the-difference-between-utf8-general-ci-and-utf8-unicode-ci
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%slider}}', [
            'id' => $this->primaryKey(),
            'title_ru' => $this->string(),
            'title_en' => $this->string(),
            'title_kz' => $this->string(),
            'photo' => $this->string(),
            'link' => $this->string(),

            'is_published' => $this->smallInteger()->defaultValue(0),
            'sort_index' => $this->integer(),

            'created' => $this->integer(),
            'updated' => $this->integer(),
            'created_user_id' => $this->integer(),
            'updated_user_id' => $this->integer(),

            'slug' => $this->string(),
            'meta_title' => $this->string(),
            'meta_keywords' => $this->string(),
            'meta_description' => $this->string(),

        ], $tableOptions);

        $this->batchInsert('{{%slider}}',
            ['title_ru', 'title_en', 'title_kz', 'photo','created', 'updated', 'is_published'],
            [
                ['Слайд 1', 'Slide 1', 'Слайд 1', 'slider.jpg', time(), time(), 1],
                ['Слайд 2', 'Slide 2', 'Слайд 2', 'slider.jpg', time(), time(), 1],
                ['Слайд 3', 'Slide 3', 'Слайд 3', 'slider.jpg', time(), time(), 1],
            ]
        );
    }

    public function down()
    {
        $this->dropTable('{{%slider}}');
    }


}
