<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use vova07\fileapi\Widget as FileAPI;
use vova07\imperavi\Widget;
use yii\helpers\Url;
use kartik\widgets\DatePicker;
/* @var $this yii\web\View */
/* @var $model common\models\Resume */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="resume-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'unit')->dropDownList(Yii::$app->params['unitDropdown']) ?>

    <?= $form->field($model, 'fio')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'phone')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'address')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'is_conviction')->dropDownList(Yii::$app->params['convictionStatus']) ?>

    <?= $form->field($model, 'bad_habits')->widget(Widget::className(), [
        'settings' => [
            'lang' => 'ru',
            'minHeight' => 150,
            'imageUpload' => Url::to(['/site/image-upload']),
            'imageManagerJson' => Url::to(['/site/images-get']),
            'plugins' => [
                'imagemanager'
            ]
        ]
    ]); ?>

    <?= $form->field($model, 'education')->widget(Widget::className(), [
        'settings' => [
            'lang' => 'ru',
            'minHeight' => 150,
            'imageUpload' => Url::to(['/site/image-upload']),
            'imageManagerJson' => Url::to(['/site/images-get']),
            'plugins' => [
                'imagemanager'
            ]
        ]
    ]); ?>

    <?= $form->field($model, 'other_education')->widget(Widget::className(), [
        'settings' => [
            'lang' => 'ru',
            'minHeight' => 150,
            'imageUpload' => Url::to(['/site/image-upload']),
            'imageManagerJson' => Url::to(['/site/images-get']),
            'plugins' => [
                'imagemanager'
            ]
        ]
    ]); ?>

    <?= $form->field($model, 'experience')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'last_job')->widget(Widget::className(), [
        'settings' => [
            'lang' => 'ru',
            'minHeight' => 150,
            'imageUpload' => Url::to(['/site/image-upload']),
            'imageManagerJson' => Url::to(['/site/images-get']),
            'plugins' => [
                'imagemanager'
            ]
        ]
    ]); ?>

    <?= $form->field($model, 'degree')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'other_info')->widget(Widget::className(), [
        'settings' => [
            'lang' => 'ru',
            'minHeight' => 150,
            'imageUpload' => Url::to(['/site/image-upload']),
            'imageManagerJson' => Url::to(['/site/images-get']),
            'plugins' => [
                'imagemanager'
            ]
        ]
    ]); ?>

    <?= $form->field($model, 'portfolio')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'photo')->widget(
        FileAPI::className(),
        [
            'settings' => [
                'url' => ['fileapi-upload'],
                'elements' => [
                    'preview' => [
                        'width' => 400,
                        'height' => 300
                    ]
                ],
            ],
        ]) ?>

    <a class="btn btn-success" style="margin-bottom: 20px" href="<?= $model->resumeFileLink ?>">Cкачать прикрепленный файл (<?= $model->resume_file ?>)</a>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
