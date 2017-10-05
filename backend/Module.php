<?php
namespace modules\slider\backend;

use modules\slider\backend\models\Page;

class Module extends \yii\base\Module
{
    public $title;
    public $menu;
    public $defaultRoute = 'manage/index';

    public function init()
    {
        parent::init();
        \Yii::configure($this, require(__DIR__ . '/config.php'));
    }
}
