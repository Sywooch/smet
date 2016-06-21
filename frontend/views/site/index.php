<?php
/* @var $this yii\web\View */
$this->title = 'Smet';
use yii\helpers\Html;
use yii\helpers\Url;
use frontend\widgets\NewsWidget;
use frontend\widgets\ArticleWidget;
use frontend\widgets\MainArticleWidget;
use frontend\widgets\BannerWidget;
use frontend\widgets\SliderWidget;
use common\models\Text;
use yii\bootstrap\ActiveForm;
use vova07\fileapi\Widget as FileAPI;
use yii\captcha\Captcha;

?>

<div class="slider_form">
    <div class="cr">
        <?= SliderWidget::widget() ?>
        <div class="form_container">
            <div class="form">
                <div class="form_content">
                    <div class="form_title"><?= Yii::t('app', 'Leave application for transfer') ?></div>

                    <?php $form = ActiveForm::begin(['id' => 'feedback-form', 'layout' => 'horizontal',
                        'options' => ['enctype' => 'multipart/form-data'],
                        // 'fieldConfig' => [
                        //     'template' => "{label}\n{beginWrapper}\n{input}\n{hint}\n{error}\n{endWrapper}",
                        //     'horizontalCssClasses' => [
                        //         'label' => 'col-sm-8',
                        //         'offset' => 'col-sm-offset-4',
                        //         'wrapper' => 'col-sm-16',
                        //         'error' => '',
                        //         'hint' => '',
                        //     ],
                        // ]
                        ]); ?>

                    <?= $form->field($model, 'name', ['inputOptions' => ['class' => 'input_form']])->textInput()->input('name', ['placeholder' => Yii::t('app', 'Your name')])->label(false); ?>

                    <?= $form->field($model, 'email', ['inputOptions' => ['class' => 'input_form']])->textInput()->input('name', ['placeholder' => 'Email'])->label(false); ?>

                    <?= $form->field($model, 'massage', ['inputOptions' => ['class' => 'input_form textarea']])->textArea(['rows' => 3, 'cols' => 80, 'placeholder' => Yii::t('app', 'Message text')])->label(false);?>


                    <?= $form->field($model, 'file',['inputOptions' => ['class' => 'inputfile ']])->fileInput(['multiple' => true])->label('<span>'.Yii::t('app', 'Attach file')).'</span>' ?>

                    <?= $form->field($model, 'verifyCode')->widget(Captcha::className())->label(false); ?>

              

                    <div class="form-group send-request">
                        <?= Html::submitButton(Yii::t('app', 'Send request'), ['class' => 'button', 'name' => 'contact-button']) ?>
                    </div>
                    <?php ActiveForm::end(); ?>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="service_container">
    <div class="cr">
        <?= ArticleWidget::widget() ?>
    </div>
</div>
<div class="cr">
    <div class="video_text">
        <div class="video">
            <?= Text::getValue('video')?>
        </div>
        <?= MainArticleWidget::widget() ?>
    </div>
</div>
<?= NewsWidget::widget() ?>
<?= BannerWidget::widget() ?>
