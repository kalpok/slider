<?php
namespace modules\slider\common\models;

class Slider extends \yii\db\ActiveRecord
{
    public static function tableName()
    {
        return 'slider';
    }

    public function behaviors()
    {
        return [
            'gallery' => '\extensions\gallery\behaviors\GalleryBehavior'
        ];
    }
}
