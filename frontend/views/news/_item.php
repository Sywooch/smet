<?php
use himiklab\thumbnail\EasyThumbnailImage;
use yii\helpers\Url;
?>

<li><div class="news_item">
        <div class="product_item_img">
            <?php
            echo \himiklab\thumbnail\EasyThumbnailImage::thumbnailImg(
                $model->imagePath, 210, 155, \himiklab\thumbnail\EasyThumbnailImage::THUMBNAIL_OUTBOUND,
                [
                    'class' => ''
                ]
            );
            ?>
        </div>
        <a href="<?= Url::toRoute(['/news/view', 'slug' => $model->slug]) ?>" class="news_item__name"><?= $model->title ?></a>
    </div>
</li>

