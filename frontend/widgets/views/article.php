<?php
use yii\helpers\Url;
?>

<ul class="service_list">
    <?php foreach($articles as $article) {?>
    <li>
    <a href="<?= Url::toRoute(['/article/view', 'slug' => $article->slug]) ?>">
        <div class="service_item">
            <div class="service_img">
                <?php
                echo \himiklab\thumbnail\EasyThumbnailImage::thumbnailImg(
                    $article->imagePath, 62, 62, \himiklab\thumbnail\EasyThumbnailImage::THUMBNAIL_OUTBOUND,
                    [
                        'class' => ''
                    ]
                );
                ?>
            </div>
            <div class="sevice_name">
                <?= $article->title?>
            </div>
        </div>
        </a>
    </li>
   <?php } ?>
</ul>