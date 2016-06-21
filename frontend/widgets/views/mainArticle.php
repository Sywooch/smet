<?php
use yii\helpers\Html;
use yii\helpers\Url;
?>
<div class="form_container text">
    <div class="form mr-no">
        <div class="form_content">
            <div class="form_title text_left"><?= $mainArticle->title ?></div>
            <?php $anounce = strip_tags($mainArticle->description, '<p><a>'); (strlen($anounce) > 120 ) ? $readmore = ' ...' : $readmore = ''?>
            <p><?php $anounce = strip_tags($mainArticle->description, '<p><a>'); echo mb_substr($anounce, 0, 520, 'UTF-8').$readmore; ?></p>
            <a href="<?= Url::toRoute(['/article/view?slug=o-nas'])?>" class="button fl_r">Читать полностью</a>
        </div>
    </div>
</div>