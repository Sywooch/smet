<?php
use yii\helpers\Html;
use yii\helpers\Url;
use \yii\widgets\Breadcrumbs;
use yii\widgets\LinkPager;
use yii\widgets\ListView;

/* @var $this yii\web\View */
$this->title = Yii::t('app', 'News and events');

$this->params['breadcrumbs'][] = Yii::t('app', 'News and events');

$this->registerMetaTag(['name'=> 'title', 'content' =>  '']);
$this->registerMetaTag(['name'=> 'keywords', 'content' =>  '']);
$this->registerMetaTag(['name'=> 'description', 'content' => '']);

?>

<div class="cr">
    <div class="content">
        <ul class="breadcrumbs">
            <?= \yii\widgets\Breadcrumbs::widget([
                'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
            ]) ?>
        </ul>
        <div class="title color"><?= Yii::t('app', 'Our clients and partners') ?></div>
        <ul class="news_list">
            <?= ListView::widget([
                'dataProvider' => $dataProvider,
                'itemView' => '_item',
                'layout' => "{items}\n<div class='clearfix'></div>{pager}",
            ]) ?>
        </ul>
    </div>
</div>