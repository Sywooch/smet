<?php

namespace frontend\widgets;

use common\models\News;
use common\models\Lang;
use yii\base\Widget;

class NewsWidget extends Widget
{

    public function init()
    {
        parent::init();

        $news = News::find()->where(['is_published' => 1, 'lang_id' => Lang::getCurrent()->id])->orderBy('created DESC')->all();

        echo $this->render('news', [
            'news' => $news,
        ]);

    }

}
