<?php

use yii\db\Migration;

/**
 * Handles the creation for table `resume_table`.
 */
class m160615_123122_create_resume_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            // http://stackoverflow.com/questions/766809/whats-the-difference-between-utf8-general-ci-and-utf8-unicode-ci
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%resume}}', [
            'id' => $this->primaryKey(),
            'unit' => $this->smallInteger(),
            'fio' => $this->string(),
            'phone' => $this->string(),
            'address' => $this->string(),
            'is_conviction' => $this->smallInteger(),
            'bad_habits' => $this->text(),
            'education' => $this->text(),
            'other_education' => $this->text(),
            'experience' => $this->string(),
            'last_job' => $this->text(),
            'degree' => $this->string(),
            'other_info' => $this->text(),
            'portfolio' => $this->string(),
            'photo' => $this->string(),
            'resume_file' => $this->string(),

            'created' => $this->integer(),
            'updated' => $this->integer(),
        ]);
    }
}
