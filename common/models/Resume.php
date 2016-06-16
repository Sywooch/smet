<?php

namespace common\models;

use Yii;
use vova07\fileapi\behaviors\UploadBehavior;
use yii\db\ActiveRecord;
use yii\web\UploadedFile;

/**
 * This is the model class for table "{{%resume}}".
 *
 * @property integer $id
 * @property string $unit
 * @property string $fio
 * @property string $phone
 * @property string $address
 * @property integer $is_conviction
 * @property string $bad_habits
 * @property string $education
 * @property string $other_education
 * @property string $experience
 * @property string $last_job
 * @property string $degree
 * @property string $other_info
 * @property string $portfolio
 * @property string $photo
 * @property string $file
 */
class Resume extends \yii\db\ActiveRecord
{
    public $file;

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%resume}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['is_conviction', 'unit'], 'integer'],
            [['bad_habits', 'education', 'other_education', 'last_job', 'other_info'], 'string'],
            [['fio', 'phone', 'address', 'experience', 'degree', 'photo', 'resume_file', 'portfolio'], 'string', 'max' => 255],
            [['file'], 'file'],
            [['created', 'updated'], 'safe'],
            [['fio', 'phone', 'unit', 'address', 'is_conviction', 'education', 'photo', 'experience'], 'required'],
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
            'phone' => Yii::t('app', 'Phone'),
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
            'created' => Yii::t('app', 'Created'),
            'updated' => Yii::t('app', 'Updated'),
        ];
    }

    public function getResumeFileLink(){
        $resume_file =  ($this->resume_file) ? $this->resume_file : 'placeholder.jpg';
        return Yii::getAlias('@frontendWebroot/docs').'/'.$resume_file;
    }

    public function getImage()
    {
        $image =  ($this->photo) ? $this->photo : 'placeholder.jpg';
        return Yii::getAlias('@frontendWebroot/images').'/'.$image;
    }

    public function getImagePath()
    {
        $image =  ($this->photo) ? $this->photo : 'placeholder.jpg';
        return '@frontend/web/images/'.$image;
    }

    public function getBanners()
    {
        return Image::find()->where(['model' => 'article_banner', 'item_id' => $this->id])->all();
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
            'uploadBehavior' => [
                'class' => UploadBehavior::className(),
                'attributes' => [
                    'photo' => [
                        'path' => '@frontend/web/images',
                        'tempPath' => '@frontend/web/images',
                        'url' => Yii::getAlias('@frontendWebroot/images')
                    ],
                ]
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

            $this->resume_file = $filename;


            $this->save();
            //}
        }
    }

    public function sendEmail($email)
    {
        return \Yii::$app->mailer->compose('resume', [
            'subject' => "Новое резюме на сайте",
            'body' => "Зайдите на сайт, проверьте раздел резюме"
        ])
            ->setFrom(["ok@greengo.kz" => "Kasiet.kz"])
            ->setSubject('Новое резюме на сайте kasiet.kz')
            ->setTo($email)
            ->send();
    }
}
