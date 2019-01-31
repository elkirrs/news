<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\commentstext;

/**
 * commentstextSearch represents the model behind the search form of `app\models\commentstext`.
 */
class commentstextSearch extends commentstext
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['idCommentsText', 'idCommentsNews'], 'integer'],
            [['commentsText'], 'safe'],
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
        $query = commentstext::find();

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
            'idCommentsText' => $this->idCommentsText,
            'idCommentsNews' => $this->idCommentsNews,
        ]);

        $query->andFilterWhere(['like', 'commentsText', $this->commentsText]);

        return $dataProvider;
    }
}
