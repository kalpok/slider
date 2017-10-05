<?php
use yii\helpers\Html;
use themes\admin360\widgets\ActionButtons;

$this->title = 'ویرایش اسلایدر';
$this->params['breadcrumbs'][] = ['label' => 'اسلایدر ها', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->title, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'ویرایش';
?>
<div class="page-update">
    <?= ActionButtons::widget([
        'modelID' => $model->id,
        'buttons' => [
            'gallery' => [
                'label'=> $model->hasGallery() ? 'گالری' : 'ساخت گالری',
            ],
            'create' => ['label' => 'اسلایدر جدید'],
            'index' => ['label' => 'اسلایدر ها'],
        ],
    ]); ?>
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>
</div>
