<?php

namespace frontend\models;

use Yii;
use yii\base\Model;
use yii\web\UploadedFile;

/**
 * ContactForm is the model behind the contact form.
 */
class FeedbackForm extends Model
{
    public $name;
    public $email;
    public $massage;
    public $file;
    public $verifyCode;

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'email', 'massage'], 'required'],
            [['massage'], 'string'],
            [['file'], 'file'],
            [['name', 'email', 'feed_file'], 'string', 'max' => 255],
            ['verifyCode', 'captcha']
        ];
    }

    /**
     * @inheritdoc
     */
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

    public function saveFile()
    {
        $this->file = UploadedFile::getInstance($this, 'file');

        if ($this->file && $this->validate()) {
            //foreach ($this->file as $file) {
            $filename = $this->file->name . '.' . $this->file->extension;

            $this->file->saveAs(Yii::getAlias('@frontend/web/docs/'. $filename));

            $this->feed_file = $filename;


            $this->save();
            //}
        }
    }

    /**
     * Sends an email to the specified email address using the information collected by this model.
     *
     * @param  string  $email the target email address
     * @return boolean whether the email was sent
     */
    public function sendEmail($email)
    {
        return Yii::$app->mailer->compose()
            ->setTo($email)
            ->setFrom(['admin@greengo.kz' => $this->name])
            ->setSubject($this->subject)
            ->setTextBody($this->phone.' '.$this->body)
            ->send();
    }
}
