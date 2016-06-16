<?php

namespace common\models;

use Yii;
use vova07\fileapi\behaviors\UploadBehavior;
use yii\db\ActiveRecord;
use yii\web\UploadedFile;

/**
 * This is the model class for table "{{%feedback}}".
 *
 * @property integer $id
 * @property string $name
 * @property string $email
 * @property string $phone
 * @property string $subject
 * @property string $body
 * @property string $manager_email
 * @property integer $status
 * @property integer $created
 * @property integer $updated
 * @property integer $updated_user_id
 */
class Feedback extends \yii\db\ActiveRecord
{
    public $file;

    public static function tableName()
    {
        return '{{%feedback}}';
    }

    public function rules()
    {
        return [
            [['name', 'email', 'massage'], 'required'],
            [['massage'], 'string'],
            [['file'], 'file'],
            [['created', 'updated'], 'safe'],
            [['name', 'email', 'feed_file'], 'string', 'max' => 255]
        ];
    }

    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'name' => Yii::t('app', 'Your name'),
            'email' => Yii::t('app', 'Email'),
            'massage' => Yii::t('app', 'Message text'),
            'file' => Yii::t('app', 'File'),
            'created' => Yii::t('app', 'Created'),
            'updated' => Yii::t('app', 'Updated'),
        ];
    }

    public function getFeedFileLink(){
        $feed_file =  ($this->feed_file) ? $this->feed_file : 'placeholder.jpg';
        return Yii::getAlias('@frontendWebroot/docs').'/'.$feed_file;
    }

    public function behaviors()
    {
        return [
            'timestamp' => [
                'class' => 'yii\behaviors\TimestampBehavior',
                'attributes' => [
                    ActiveRecord::EVENT_BEFORE_INSERT => ['created', 'updated'],
                    ActiveRecord::EVENT_BEFORE_UPDATE => ['updated'],
                ],
            ],
        ];
    }

    public function saveFile()
    {
        $this->file = UploadedFile::getInstance($this, 'file');
        var_dump($this->file);

        if ($this->file && $this->validate()) {
            $filename = uniqid() . '.' . $this->file->extension;

            $this->file->saveAs(Yii::getAlias('@frontend/web/docs/'. $filename));

            $this->feed_file = $filename;


            $this->save();
            //}
        }
    }

    public function sendEmail($email)
    {
        return \Yii::$app->mailer->compose('feedback', [
            'subject' => "Новая заявка на сайте",
            'body' => "Зайдите на сайт, проверьте раздел Обратная связь"
        ])
            ->setFrom(["info@astanacreative.kz" => "smet.kz"])
            ->setSubject('Новая заявка на сайте smet.kz')
            ->setTo($email)
            ->send();
    }
}
