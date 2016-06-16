<?php

namespace frontend\widgets;

use common\models\Article;
use common\models\Lang;
use common\models\Slider;
use yii\base\Widget;

class ArticleWidget extends Widget
{

    public function init()
    {
        parent::init();

        $articles = Article::find()->where(['is_published' => 1, 'category_id' => 2, 'lang_id' => Lang::getCurrent()->id])->all();

        echo $this->render('article', [
            'articles' => $articles,
        ]);

    }

}
