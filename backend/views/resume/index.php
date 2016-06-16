<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\search\ResumeSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Resumes');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="resume-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a(Yii::t('app', 'Create Resume'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            [
                'attribute' => 'unit',
                'class' => 'yii\grid\DataColumn',
                'label' => 'Подразделение',
                'value' => function ($data) {
                    return Yii::$app->params['unitDropdown'][$data->unit];
                },
                'filter' => Yii::$app->params['unitDropdown']
            ],
            'fio',
            [
                'attribute' => 'Фото',
                'format' => 'html',
                'value' => function($data) {
                    return Html::img($data->image,['width'=>100]);
                },
            ],
            'phone',
            'address',
            [
                'attribute' => 'is_conviction',
                'class' => 'yii\grid\DataColumn',
                'label' => 'Судимость',
                'value' => function ($data) {
                    return Yii::$app->params['convictionStatus'][$data->is_conviction];
                },
                'filter' => Yii::$app->params['convictionStatus']
            ],
            'created:date',
            // 'is_conviction',
            // 'bad_habits:ntext',
            // 'education:ntext',
            // 'other_education:ntext',
            // 'experience',
            // 'last_job:ntext',
            // 'degree',
            // 'other_info:ntext',
            // 'portfolio:ntext',
            // 'photo',
            // 'file',

            [
                'header' => 'Действия',
                'class' => 'yii\grid\ActionColumn'
            ],
        ],
    ]); ?>
</div>
