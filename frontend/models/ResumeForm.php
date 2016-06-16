<?php

namespace frontend\models;

use Yii;
use yii\base\Model;
use yii\web\UploadedFile;

/**
 * ContactForm is the model behind the contact form.
 */
class ResumeForm extends Model
{
    public $fio;
    public $unit;
    public $phone;
    public $address;
    public $is_conviction;
    public $bad_habits;
    public $education;
    public $other_education;
    public $experience;
    public $last_job;
    public $degree;
    public $other_info;
    public $portfolio;
    public $photo;
    public $file;


    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['is_conviction', 'unit'], 'integer'],
            [['bad_habits', 'education', 'other_education', 'last_job', 'other_info', 'portfolio'], 'string'],
            [['fio', 'phone', 'address', 'experience', 'degree', 'photo', 'resume_file'], 'string', 'max' => 255],
            [['file'], 'file'],
            [['fio', 'phone', 'unit'], 'required'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'unit' => Yii::t('app', 'Unit'),
            'fio' => Yii::t('app', 'Fio'),
            'phone' => Yii::t('app', 'Resume Phone'),
            'address' => Yii::t('app', 'Address'),
            'is_conviction' => Yii::t('app', 'Is Conviction'),
            'bad_habits' => Yii::t('app', 'Bad Habits'),
            'education' => Yii::t('app', 'Education'),
            'other_education' => Yii::t('app', 'Other Education'),
            'experience' => Yii::t('app', 'Experience'),
            'last_job' => Yii::t('app', 'Last Job'),
            'degree' => Yii::t('app', 'Degree'),
            'other_info' => Yii::t('app', 'Other Info'),
            'portfolio' => Yii::t('app', 'Portfolio'),
            'photo' => Yii::t('app', 'Photo'),
            'file' => Yii::t('app', 'File'),
        ];
    }

    public function saveFile()
    {
        $this->file = UploadedFile::getInstance($this, 'file');

        if ($this->file && $this->validate()) {
            //foreach ($this->file as $file) {
            $filename = $this->file->name . '.' . $this->file->extension;

            $this->file->saveAs(Yii::getAlias('@frontend/web/docs/'. $filename));

            $this->resume_file = $filename;
            
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
            ->setFrom(['admin@greengo.kz' => $this->fio])
            ->setSubject($this->subject)
            ->setTextBody($this->phone.' '.$this->body)
            ->send();
    }
}
