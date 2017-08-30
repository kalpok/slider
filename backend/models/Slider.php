<?php
namespace modules\slider\backend\models;

use extensions\i18n\validators\FarsiCharactersValidator;

class Slider extends \modules\slider\common\models\Slider
{
    public function behaviors()
    {
        return array_merge(
            parent::behaviors(),
            [
                'core\behaviors\TimestampBehavior',
            ]
        );
    }

    public function rules()
    {
        return [
            ['title', 'required'],
            ['title', 'trim'],
            ['description', 'string'],
            ['isActive', 'integer'],
            ['language', 'default', 'value' => null],
            ['title', 'string', 'max' => 255],
            [['title'], FarsiCharactersValidator::className()]
        ];
    }

    public function attributeLabels()
    {
        return [
            'id' => 'شناسه',
            'title' => 'عنوان',
            'isActive' => 'نمایش در سایت',
            'language' => 'زبان',
            'description' => 'راهنمای سایز عکس ها',
            'createdAt' => 'تاریخ ساخت',
            'updatedAt' => 'آخرین بروزرسانی',
        ];
    }
}
