<?php

use yii\bootstrap\NavBar;
use yii\bootstrap\Nav;
use yii\helpers\Url;
use common\models\Lang;
use common\models\Text;
?>

<header id="header">
    <div class="top_line">
        <div class="cr">
            <a href="/" class="logo_slogn">
                <img src="/img/slogan.png" alt="">
            </a>
            <div class="head_item">
                <div class="show_phone">+7 <span class="show_mob" data-number="707 862 53 48"><?= Yii::t('app', 'show phone') ?></span>
                    <a href="tel:77078625348" class="show"> <?= Text::getValue('phone')?></a></div>
                <div class="mail">
                    <?= Text::getValue('e-mail')?>
                </div>
                <ul class="soc_seti">
                    <li><a href=""><img src="/img/vk.png" alt=""></a></li>
                    <li><a href=""><img src="/img/youtube.png" alt=""></a></li>
                    <li><a href=""><img src="/img/insta.png" alt=""></a></li>
                    <li><a href=""><img src="/img/twit.png" alt=""></a></li>
                    <li><a href=""><img src="/img/google.png" alt=""></a></li>
                    <li><a href=""><img src="/img/face.png" alt=""></a></li>
                </ul>
                <?php
                $current = Lang::getCurrent();
                $langs = Lang::find()->where('id != :current_id', [':current_id' => Lang::getCurrent()->id])->all()
                ?>
                <ul class="lang">
                    <?= Yii::t('app', 'languages') ?>
                    <li><a href=""><img src="/img/<?= $current->photo ?>" alt=""></a></li>
                    <?php foreach ($langs as $lang):?>
                        <li><a href="<?='/'.$lang->url.Yii::$app->getRequest()->getLangUrl()?>"><img src="/img/<?= $lang->photo ?>" alt=""></a></li>
                    <?php endforeach;?>
                </ul>
            </div>

        </div>
    </div>
    <div class="cr">
        <a href="/" class="logo">
            <img src="/img/logo.jpg" alt="">
        </a>
        <nav>
            <ul class="menu">
                <li><a href="/"><?= Yii::t('app', 'Home') ?></a></li>
                <li><a href="<?= Url::toRoute(['/article/view?slug=o-nas'])?>"><?= Yii::t('app', 'About us') ?></a></li>
                <li><a href=""><?= Yii::t('app', 'Services') ?></a></li>
                <li><a href="<?= Url::toRoute(['/article/view?slug=ceny-i-oplata'])?>"><?= Yii::t('app', 'Price and payment') ?></a></li>
                <li><a href="<?= Url::toRoute(['/news'])?>"><?= Yii::t('app', 'News and events') ?></a></li>
                <li><a href="<?= Url::toRoute(['/article/view?slug=kariera'])?>"><?= Yii::t('app', 'Career') ?></a></li>
                <li><a href="<?= Url::toRoute(['/article/view?slug=contact'])?>"><?= Yii::t('app', 'Contacts') ?></a></li>
            </ul>
        </nav>
    </div>
</header>