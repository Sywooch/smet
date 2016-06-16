<?php

use yii\db\Schema;
use yii\db\Migration;

class m160109_174513_create_article_table extends Migration
{
    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            // http://stackoverflow.com/questions/766809/whats-the-difference-between-utf8-general-ci-and-utf8-unicode-ci
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%article}}', [
            'id' => $this->primaryKey(),
            'category_id' => $this->integer()->defaultValue(0),
            'title' => $this->string(),
            'anounce' => $this->text(),
            'description' => $this->text(),
            'photo' => $this->string(),

            'views' => $this->integer()->defaultValue(0),
            'lang_id' => $this->integer()->defaultValue(0),
            'is_published' => $this->integer()->defaultValue(0),
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

        $this->batchInsert('{{%article}}',
            ['title', 'category_id', 'description', 'photo','created', 'updated', 'slug','is_published', 'lang_id'],
            [
                ['О нас', 1, 'Описание контента' , '', time(), time(), 'o-nas', 1, 2],
                ['Цены и оплата', 1,  'Описание контента' , '', time(), time(), 'ceny-i-oplata', 1, 2],
                ['Карьера', 1,  'Описание контента' , '', time(), time(), 'kariera', 1, 2],
                ['Контакты', 1, 'Описание контента' , '', time(), time(), 'contact', 1, 2],
                ['текстовый перевод', 2,  'Описание контента' , 'service1.png', time(), time(), 'textoviy-perevod', 1, 2],
                ['устный перевод', 2,  'Описание контента' , 'service2.png', time(), time(), 'ustniy-perevod', 1, 2],
                ['телефизионный перевод', 2,  'Описание контента' , 'service3.png', time(), time(), 'television-perevod', 1, 2],
                ['локализация', 2,  'Описание контента' , 'service4.png', time(), time(), 'locality', 1, 2],
                ['сурдоперевод и тифлокомментирование', 2,  'Описание контента' , 'service5.png', time(), time(), 'surdoperevod', 1, 2],
                ['перевод рекламы', 2,  'Описание контента' , 'service6.png', time(), time(), 'perevod-reklamy', 1, 2],

                ['About us', 1,  'Description of content' , '', time(), time(), 'o-nas', 1, 1],
                ['Price and payment', 1,  'Description of content' , '', time(), time(), 'ceny-i-oplata', 1, 1],
                ['Career', 1,  'Description of content' , '', time(), time(), 'kariera', 1, 1],
                ['Contacts', 1,  'Description of content' , '', time(), time(), 'contact', 1, 1],
                ['text translation', 2,  'Description of content' , 'service1.png', time(), time(), 'textoviy-perevod', 1, 1],
                ['oral translation', 2,  'Описание контента' , 'service2.png', time(), time(), 'ustniy-perevod', 1, 1],
                ['TV transfer', 2,  'Описание контента' , 'service3.png', time(), time(), 'television-perevod', 1, 1],
                ['localization', 2,  'Описание контента' , 'service4.png', time(), time(), 'locality', 1, 1],
                ['sign language and tiflokommentirovanie', 2,  'Описание контента' , 'service5.png', time(), time(), 'surdoperevod', 1, 1],
                ['advertising translation', 2,  'Описание контента' , 'service6.png', time(), time(), 'perevod-reklamy', 1, 1],

                ['Біз туралы', 1,  'мазмұнына сипаттамасы' , '', time(), time(), 'o-nas', 1, 3],
                ['Бағасы және төлем', 1,  'мазмұнына сипаттамасы' , '', time(), time(), 'ceny-i-oplata', 1, 3],
                ['Карьера', 1,  'мазмұнына сипаттамасы' , '', time(), time(), 'kariera', 1, 3],
                ['Байланыстар', 1,  'мазмұнына сипаттамасы' , '', time(), time(), 'contact', 1, 3],
                ['мәтінді аударма', 2,  'мазмұнына сипаттамасы' , 'service1.png', time(), time(), 'textoviy-perevod', 1, 3],
                ['ауызша аударма', 2,  'Описание контента' , 'service2.png', time(), time(), 'ustniy-perevod', 1, 3],
                ['ТВ аудару', 2,  'Описание контента' , 'service3.png', time(), time(), 'television-perevod', 1, 3],
                ['жергіліктендіру', 2,  'Описание контента' , 'service4.png', time(), time(), 'locality', 1, 3],
                ['ым тілі және тифлокомментирование', 2,  'Описание контента' , 'service5.png', time(), time(), 'surdoperevod', 1, 3],
                ['жарнама аударма', 2,  'Описание контента' , 'service6.png', time(), time(), 'perevod-reklamy', 1, 3],
            ]
        );


    }

    public function down()
    {
        $this->dropTable('{{%article}}');
    }

}
