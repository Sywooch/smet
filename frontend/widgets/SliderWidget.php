<?php

namespace frontend\widgets;

use common\models\Slider;
use yii\base\Widget;

class SliderWidget extends Widget
{

    public function init()
    {
        parent::init();
        
        $slides = Slider::find()->where(['is_published' => '1'])->orderBy('sort_index')->all();
        
        echo $this->render('slider', [
            'slides' => $slides,
        ]);

    }

}
