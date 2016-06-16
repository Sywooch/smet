<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\search\ResumeSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="resume-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'unit') ?>

    <?= $form->field($model, 'fio') ?>

    <?= $form->field($model, 'phone') ?>

    <?= $form->field($model, 'address') ?>

    <?php // echo $form->field($model, 'is_conviction') ?>

    <?php // echo $form->field($model, 'bad_habits') ?>

    <?php // echo $form->field($model, 'education') ?>

    <?php // echo $form->field($model, 'other_education') ?>

    <?php // echo $form->field($model, 'experience') ?>

    <?php // echo $form->field($model, 'last_job') ?>

    <?php // echo $form->field($model, 'degree') ?>

    <?php // echo $form->field($model, 'other_info') ?>

    <?php // echo $form->field($model, 'portfolio') ?>

    <?php // echo $form->field($model, 'photo') ?>

    <?php // echo $form->field($model, 'file') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
