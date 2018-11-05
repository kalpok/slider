<?php

use yii\helpers\Html;
use theme\widgets\ActionButtons;

$this->title = 'اسلایدر جدید';
$this->params['breadcrumbs'][] = ['label' => 'اسلایدر ها', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="page-create">
    <?= ActionButtons::widget([
        'buttons' => [
            'index' => ['label' => 'اسلایدر ها'],
        ],
    ]); ?>
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>
</div>
