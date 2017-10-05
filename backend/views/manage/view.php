<?php
use yii\helpers\Html;
use yii\widgets\DetailView;
use themes\admin360\widgets\Panel;
use themes\admin360\widgets\ActionButtons;

$this->title = $model->title;
$this->params['breadcrumbs'][] = ['label' => 'اسلایدر ها', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="page-view">
    <?= ActionButtons::widget([
        'modelID' => $model->id,
        'buttons' => [
            'update' => ['label' => 'ویرایش'],
            'gallery' => [
                'label'=> $model->hasGallery() ? 'گالری' : 'ساخت گالری',
            ],
            'delete' => ['label' => 'حذف'],
            'create' => ['label' => 'اسلایدر جدید'],
            'index' => ['label' => 'اسلایدر ها']
        ],
    ]); ?>
    <div class="row">
        <div class="col-md-5">
            <?php Panel::begin([
                'title' => 'سایر اطلاعات',
            ]) ?>
            <?= DetailView::widget([
                'model' => $model,
                'attributes' => [
                    'id:farsiNumber',
                    [
                        'attribute' => 'language',
                        'visible' => Yii::$app->i18n->isMultiLanguage(),
                        'format' => 'language'
                    ],
                    'title',
                    'description',
                    'createdAt:date',
                    'updatedAt:date',
                    'isActive:boolean',
                ],
            ]) ?>
            <?php Panel::end() ?>
        </div>
    </div>
</div>
