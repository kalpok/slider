<?php
return [
    'title' => 'ماژول اسلایدر ها',
    'menu' => [
        'label' => 'اسلایدر ها',
        'icon' => 'image',
        'items' => [
            [
                'label' => 'لیست اسلایدر ها',
                'url' => ['/slider/manage/index'],
                'visible' =>  Yii::$app->user->can('slider.manage')
            ]
        ]
    ]
];
