<?php

$this->title = $model->title;

$this->params['breadcrumbs'][] = $model->title;

$this->registerMetaTag(['name'=> 'title', 'content' =>  $model->meta_title]);
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
        <?= $model->description?>
    </div>
</div>