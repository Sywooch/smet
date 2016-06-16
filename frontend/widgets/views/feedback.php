<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\bootstrap\ActiveForm;

/* @var $this yii\web\View
 * @var $news
 * @var $width
 * @var $height
 * @var $color
 */
?>
<div class="form_container">
    <div class="form">
        <div class="form_content">
            <div class="form_title"><?= Yii::t('app', 'Leave application for transfer') ?></div>

            <?php $form = ActiveForm::begin(['id' => 'feedback-form', 'action' => Url::toRoute('/site/feedback'),  'options' => ['enctype' => 'multipart/form-data']]); ?>

            <?= $form->field($model, 'name', ['inputOptions' => ['autofocus' => 'autofocus', 'class' => 'input_form']])->textInput()->input('name', ['placeholder' => Yii::t('app', 'Your name')])->label(false); ?>

            <?= $form->field($model, 'email', ['inputOptions' => ['autofocus' => 'autofocus', 'class' => 'input_form']])->textInput()->input('name', ['placeholder' => 'Email'])->label(false); ?>

            <?= $form->field($model, 'massage', ['inputOptions' => ['autofocus' => 'autofocus', 'class' => 'input_form textarea']])->textArea(['rows' => 3, 'cols' => 80, 'placeholder' => Yii::t('app', 'Message text')])->label(false);?>

            <?= $form->field($model, 'file')->fileInput(['multiple' => false])->label(Yii::t('app', 'Attach file')) ?>

            <div class="form-group send-request">
                <?= Html::submitButton(Yii::t('app', 'Send request'), ['class' => 'button', 'name' => 'contact-button']) ?>
            </div>
            <?php ActiveForm::end(); ?>
        </div>
    </div>
</div>