<?php
namespace modules\slider\backend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;

class SliderSearch extends Slider
{
    public function rules()
    {
        return [
            [['id', 'isActive'], 'integer'],
            [['title', 'language'], 'safe'],
        ];
    }

    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    public function search($params)
    {
        $query = Slider::find();
        $dataProvider = new ActiveDataProvider([
            'query' => $query
        ]);
        $this->load($params);
        if (!$this->validate()) {
            $query->where('0=1');
            return $dataProvider;
        }
        $query->andFilterWhere([
            'id' => $this->id,
            'isActive' => $this->isActive
        ]);
        $query->andFilterWhere(['like', 'title', $this->title]);
        $query->andFilterWhere(['like', 'language', $this->language]);
        return $dataProvider;
    }
}
