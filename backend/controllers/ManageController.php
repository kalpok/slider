<?php
namespace modules\slider\backend\controllers;

use Yii;
use yii\filters\AccessControl;
use modules\slider\backend\models\Slider;
use modules\slider\backend\models\SliderSearch;

class ManageController extends \core\controllers\AdminController
{
    public function behaviors()
    {
        return array_merge(
            parent::behaviors(),
            [
                'access' => [
                    'class' => AccessControl::className(),
                    'rules' => [
                        [
                            'allow' => true,
                            'roles' => ['slider.manage'],
                        ],
                    ],
                ],
            ]
        );
    }

    public function actions()
    {
        return [
            'gallery' => [
                'class' => 'extensions\gallery\actions\GalleryAction',
                'ownerModelClassName' => Slider::className()
            ]
        ];
    }

    public function init()
    {
        $this->modelClass = Slider::className();
        $this->searchClass = SliderSearch::className();
        parent::init();
    }

    public function actionView($id)
    {
        if (isset($_GET['kalpok'])) {
            return parent::actionView($id);
        }
        $this->redirect('index');
    }
}
