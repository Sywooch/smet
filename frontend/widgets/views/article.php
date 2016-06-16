<?php

?>

<ul class="service_list">
    <?php foreach($articles as $article) {?>
    <li>
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
    </li>
   <?php } ?>
</ul>