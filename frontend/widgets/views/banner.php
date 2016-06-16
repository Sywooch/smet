<?php

use yii\helpers\Html;
use yii\helpers\Url;
use himiklab\thumbnail\EasyThumbnailImage;


/* @var $this yii\web\View
 * @var $news
 */
?>
<?php if($banners){ ?>
<div class="cr">
    <div class="title color"><?= Yii::t('app', 'Our clients and partners') ?></div>
    <div class="partners">
        <?php foreach ($banners as $banner) {?>
        <div class="partners_list-item">
            <div class="partners_list_item_img">
                <?php
                echo \himiklab\thumbnail\EasyThumbnailImage::thumbnailImg(
                    $banner->imagePath, 181, 48, \himiklab\thumbnail\EasyThumbnailImage::THUMBNAIL_OUTBOUND,
                    [
                        'class' => ''
                    ]
                );
                ?>
            </div>
        </div>
        <?php } ?>
    </div>
</div>
<?php } ?>
