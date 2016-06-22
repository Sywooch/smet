<?php

use yii\bootstrap\NavBar;
use yii\bootstrap\Nav;
use yii\helpers\Url;
use common\models\Lang;
use common\models\Text;
?>
<?php
$articles = \common\models\Article::find()->where(['category_id' => '2', 'is_published' => '1', 'lang_id' => Lang::getCurrent()->id])->orderBy('created DESC')->all();
$downArticles = \common\models\Article::find()->where(['category_id' => '7', 'is_published' => '1', 'lang_id' => Lang::getCurrent()->id])->orderBy('created ASC')->all();
?>
<header id="header">
    <div class="top_line">
        <div class="cr">
        	<!--Мобильная часть -->
			<div class="top_header">
					<div class="m_menu"></div>
					<div class="mob_part">
						<ul class="mob_ul">
                            <li class="active"><a href="/"><?= Yii::t('app', 'Home') ?></a></li>
                            <li class="active"><a href="<?= Url::toRoute(['/article/view?slug=o-nas'])?>"><?= Yii::t('app', 'About us') ?></a></li>
							<li><p class="sub"><?= Yii::t('app', 'Services') ?></p>
								<ul class="m_sub_menu ">
                                    <?php foreach($articles as $article) {?>
                                    <li><a href="<?= Url::toRoute(['/article/view', 'slug' => $article->slug]) ?>"><?= $article->title ?></a></li>
                                    <?php } ?>
                                </ul>
							</li>
							<li><p class="sub">Цены и оплата</p>
									<ul class="m_sub_menu ">
                                        <?php foreach($downArticles as $downArticle) {?>
                                            <li><a href="<?= Url::toRoute(['/article/view', 'slug' => $downArticle->slug]) ?>"><?= $downArticle->title ?></a></li>
                                        <?php } ?>
                                    </ul>
							</li>
                            <li><a href="<?= Url::toRoute(['/news'])?>"><?= Yii::t('app', 'News and events') ?></a></li>
                            <li><a href="<?= Url::toRoute(['/article/view?slug=kariera'])?>"><?= Yii::t('app', 'Career') ?></a></li>
                            <li><a href="<?= Url::toRoute(['/article/view?slug=contact'])?>"><?= Yii::t('app', 'Contacts') ?></a></li>
						</ul>
						<div class="mob_close"></div>
					</div>
			</div>
			<!--Мобильная часть конец-->
            <a href="/" class="logo_slogn">
                <img src="/img/slogan.png" alt="">
            </a>
            <div class="head_item">
                <div class="show_phone">+7 <span class="show_mob" data-number="707 862 53 48"><?= Yii::t('app', 'show phone') ?></span>
                    <a href="tel:77078625348" class="show"> <?= Text::getValue('phone')?></a></div>
                <div class="mail">info
                <span class="show_mail" data-mail="707 862 53 48">показать</span>
                         <a href="mail:info@smet.kz" class="shows"> <?= Text::getValue('email')?></a>
                 </div>
                <ul class="soc_seti">
                    <li><a target="_blank" href="<?= Text::getValue('vk')?>"><img src="/img/vk.png" alt=""></a></li>
                    <li><a target="_blank" href="<?= Text::getValue('youtube')?>"><img src="/img/youtube.png" alt=""></a></li>
                    <li><a target="_blank" href="<?= Text::getValue('insta')?>"><img src="/img/insta.png" alt=""></a></li>
                    <li><a target="_blank" href="<?= Text::getValue('google')?>"><img src="/img/google.png" alt=""></a></li>
                    <li><a target="_blank" href="<?= Text::getValue('face')?>"><img src="/img/face.png" alt=""></a></li>
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
            <ul class="menu <?= (Lang::getCurrent()->id == 3) ? 'menu-kaz' : ' '; ?>">
                <li><a href="/"><?= Yii::t('app', 'Home') ?></a></li>
                <li><a href="<?= Url::toRoute(['/article/view?slug=o-nas'])?>"><?= Yii::t('app', 'About us') ?></a></li>
                <li><a href=""><?= Yii::t('app', 'Services') ?></a>
                <div class="sub_conainer">
					<ul class="sub_menu">
                        <?php foreach($articles as $article) {?>
                            <li><a href="<?= Url::toRoute(['/article/view', 'slug' => $article->slug]) ?>"><?= $article->title ?></a></li>
                        <?php } ?>
					</ul>
				</div>
                </li>
                <li><a href="<?= Url::toRoute(['/article/view?slug=ceny-i-oplata'])?>"><?= Yii::t('app', 'Price and payment') ?></a>
					<div class="sub_conainer">
						<ul class="sub_menu">
                            <?php foreach($downArticles as $downArticle) {?>
                                <li><a href="<?= Url::toRoute(['/article/view', 'slug' => $downArticle->slug]) ?>"><?= $downArticle->title ?></a></li>
                            <?php } ?>
						</ul>
					</div>
                </li>
                <li><a href="<?= Url::toRoute(['/news'])?>"><?= Yii::t('app', 'News and events') ?></a></li>
                <li><a href="<?= Url::toRoute(['/article/view?slug=kariera'])?>"><?= Yii::t('app', 'Career') ?></a></li>
                <li><a href="<?= Url::toRoute(['/article/view?slug=contact'])?>"><?= Yii::t('app', 'Contacts') ?></a></li>
            </ul>

        </nav>
        .
    </div>
</header>
<div class="head_top_padding"></div>