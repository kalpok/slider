<?php
use yii\bootstrap\Alert;

$this->params['breadcrumbs'][] = ['label' => 'اسلایدر ها', 'url' => ['index']];
$this->params['breadcrumbs'][] = [
    'label' => $model->title,
    'url' => ['view', 'id' => $model->id]
];
$this->params['breadcrumbs'][] = 'گالری';
$this->title = 'مدیریت گالری اسلایدر';
?>
<?php Alert::begin(
    ['options' => ['class' => 'alert-info'], 'closeButton' => false]
); ?>
    <p><?= $model->description ?></p>
<?php Alert::end() ?>
<?php
echo $this->render(
    '@extensions/gallery/views/index.php',
    [
        'gallery' => $gallery,
        'ownerId' => $model->id
    ]
);
