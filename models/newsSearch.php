<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\news;

/**
 * newsSearch represents the model behind the search form of `app\models\news`.
 */
class newsSearch extends news
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'category_id'], 'integer'],
            [['nameNews', 'annotatio', 'contentNews', 'files', 'dateNews'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
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
        $query = news::find();

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
        $query->andFilterWhere([
            'id' => $this->id,
            'dateNews' => $this->dateNews,
            'category_id' => $this->category_id,
        ]);

        $query->andFilterWhere(['like', 'nameNews', $this->nameNews])
            ->andFilterWhere(['like', 'annotatio', $this->annotatio])
            ->andFilterWhere(['like', 'contentNews', $this->contentNews])
            ->andFilterWhere(['like', 'files', $this->files]);

        return $dataProvider;
    }
}
