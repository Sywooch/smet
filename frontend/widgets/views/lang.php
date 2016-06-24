<?php
use yii\helpers\Url;
?>


<ul class="lang">
<?= Yii::t('app', 'languages') ?>
<li><a href=""><img src="/img/<?= $current->photo ?>" alt=""></a></li>
<?php foreach ($langs as $lang):?>
    <li><a href="<?='/'.$lang->url.Yii::$app->getRequest()->getLangUrl()?>"><img src="/img/<?= $lang->photo ?>" alt=""></a></li>
<?php endforeach;?>
</ul>