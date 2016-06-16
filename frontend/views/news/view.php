<?php

use frontend\widgets\ShareLinks;

/* @var $this yii\web\View */
$this->title = $model->title;

$this->params['breadcrumbs'][] = ['label' => 'Новости и Акции', 'url' => ['/news']];
$this->params['breadcrumbs'][] = $model->title;

$this->registerMetaTag(['name'=> 'keywords', 'content' =>  $model->meta_keywords]);
$this->registerMetaTag(['name'=> 'description', 'content' => $model->meta_description]);

?>

<div class="cr">
    <div class="content">
        <ul class="breadcrumbs">
            <?= \yii\widgets\Breadcrumbs::widget([
                'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
            ]) ?>
        </ul>
        <div class="title color"><?= $model->title?></div>
        <div class="img_news">
            <img src="<?= $model->image ?>" alt="">
        </div>
        <?= $model->description?>
    </div>
</div>