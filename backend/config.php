<?php
return [
    'title' => 'ماژول اسلایدر ها',
    'menu' => [
        'label' => 'مدیریت اسلایدر ها',
        'icon' => 'image',
        'url' => ['/slider/manage/index'],
        'visible' =>  Yii::$app->user->can('slider.manage')
    ]    
];
