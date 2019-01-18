<?php

namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\Phuongxa;

/**
 * PhuongxaSearch represents the model behind the search form of `frontend\models\Phuongxa`.
 */
class PhuongxaSearch extends Phuongxa
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['_id', 'TinhThanhPho', 'MaTP', 'QuanHuyen', 'MaQH', 'PhuongXa', 'MaPX', 'Cap', 'TenTiengAnh'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Phuongxa::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere(['like', '_id', $this->_id])
            ->andFilterWhere(['like', 'TinhThanhPho', $this->TinhThanhPho])
            ->andFilterWhere(['like', 'MaTP', $this->MaTP])
            ->andFilterWhere(['like', 'QuanHuyen', $this->QuanHuyen])
            ->andFilterWhere(['like', 'MaQH', $this->MaQH])
            ->andFilterWhere(['like', 'PhuongXa', $this->PhuongXa])
            ->andFilterWhere(['like', 'MaPX', $this->MaPX])
            ->andFilterWhere(['like', 'Cap', $this->Cap])
            ->andFilterWhere(['like', 'TenTiengAnh', $this->TenTiengAnh]);

        return $dataProvider;
    }
}
