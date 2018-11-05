<?php
use yii\widgets\Pjax;
use yii\helpers\Html;
use yii\grid\GridView;
use theme\widgets\Panel;
use theme\widgets\ActionButtons;

$this->title = 'لیست اسلایدر ها';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="sliders-index">
<?= ActionButtons::widget([
    'buttons' => [
        'create' => ['label' => 'اسلایدر جدید'],
    ],
]); ?>
<?php Panel::begin([
    'title' => 'لیست اسلایدر ها'
]) ?>
<?php Pjax::begin([
    'id' => 'slider-gridviewpjax',
    'enablePushState' => false,
]); ?>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'core\grid\IDColumn'],
            ['class' => 'core\grid\LanguageColumn'],
            'title',
            'createdAt:date',
            ['class' => 'core\grid\ActiveColumn'],
            [
                'label' => 'تعداد عکس ها',
                'value' => function ($model) {
                    return count($model->getGalleryImages());
                },
                'format' => 'farsiNumber'
            ],
            [
                'class' => 'yii\grid\ActionColumn',
                'template' => '{gallery} {update}',
                'buttons' => [
                    'gallery' => function ($url, $model, $key) {
                        return Html::a(
                            '<span class="fa fa-camera-retro"></span>',
                            $url,
                            ['title' => 'مدیریت گالری', 'data-pjax' => 0]
                        );
                    },
                ],
            ],
        ],
    ]); ?>
<?php Pjax::end(); ?>
<?php Panel::end() ?>
</div>
