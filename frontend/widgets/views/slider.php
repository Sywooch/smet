<?php

use yii\helpers\Html;
use yii\helpers\Url;
use himiklab\thumbnail\EasyThumbnailImage;


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
        </div>
    <?php } ?>
</div>
