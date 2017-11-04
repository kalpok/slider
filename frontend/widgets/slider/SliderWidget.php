<?php
namespace modules\slider\frontend\widgets\slider;

use modules\slider\frontend\models\Slider;

class SliderWidget extends \yii\base\Widget
{
    public $sliderId;
    public $showTitle;
    public $numberOfImages;
    public $view = 'default';
    public $imagesPreset = 'slider';

    public function init()
    {
        parent::init();
        if (!isset($this->sliderId)) {
            throw new \yii\base\InvalidConfigException(
                '`$sliderId` property must be set.'
            );
        }
    }

    public function run()
    {
        $slider = Slider::findOne($this->sliderId);
        if (null == $slider || !$slider->hasGallery()) {
            return;
        }
        return $this->render(
            $this->view,
            [
                'slider' => $slider,
                'images' => $slider->getGalleryImages()
            ]
        );
    }
}
