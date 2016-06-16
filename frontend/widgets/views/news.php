<?php

use yii\helpers\Html;
use yii\helpers\Url;
use himiklab\thumbnail\EasyThumbnailImage;

/* @var $this yii\web\View
 * @var $news
 */
?>
<div class="news_slide">
    <div class="cr">
        <div class="title"><?= Yii::t('app', 'News and events') ?></div>
        <div class="news-list">
            <?php foreach ($news as $newsItem) {?>
            <div class="product_list-item">
                <div class="news_item">
                    <div class="product_item_img">
                        <?php
                        echo \himiklab\thumbnail\EasyThumbnailImage::thumbnailImg(
                            $newsItem->imagePath, 210, 155, \himiklab\thumbnail\EasyThumbnailImage::THUMBNAIL_OUTBOUND,
                            [
                                'class' => ''
                            ]
                        );
                        ?>
                    </div>
                    <a href="<?= Url::toRoute(['/news/view', 'slug' => $newsItem->slug]) ?>" class="news_item__name"><?= $newsItem->title ?></a>
                </div>
            </div>
            <?php } ?>
        </div>
    </div>
</div>

