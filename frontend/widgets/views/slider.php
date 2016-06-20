<?php

use yii\helpers\Html;
use yii\helpers\Url;
use himiklab\thumbnail\EasyThumbnailImage;
use common\models\Lang;

/* @var $this yii\web\View
 * @var $news
 */
?>

<div class="slider" >
    <?php foreach($slides as $slide) {?>
        <div class="slider__item">
            <div class="slider_item_img">
                <?php
                echo \himiklab\thumbnail\EasyThumbnailImage::thumbnailImg(
                    $slide->imagePath, 600, 350, \himiklab\thumbnail\EasyThumbnailImage::THUMBNAIL_OUTBOUND,
                    [
                        'class' => ''
                    ]
                );
                ?>
            </div>
            <div><?= (Lang::getCurrent()->id == 1) ? $slide->title_en : ' '; ?></div>
            <div><?= (Lang::getCurrent()->id == 2) ? $slide->title_ru : ' '; ?></div>
            <div><?= (Lang::getCurrent()->id == 3) ? $slide->title_kz : ' '; ?></div>
        </div>
    <?php } ?>
</div>
