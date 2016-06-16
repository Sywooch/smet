<?php

namespace frontend\widgets;

use common\models\Article;
use common\models\Lang;
use common\models\Slider;
use yii\base\Widget;

class MainArticleWidget extends Widget
{

    public function init()
    {
        parent::init();

        $mainArticle = Article::find()->where(['is_published' => '1', 'lang_id' => Lang::getCurrent()->id])->one();

        echo $this->render('mainArticle', [
            'mainArticle' => $mainArticle,
        ]);

    }

}
