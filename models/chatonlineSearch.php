<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\chatonline;

/**
 * chatonlineSearch represents the model behind the search form of `app\models\chatonline`.
 */
class chatonlineSearch extends chatonline
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['idChatOnline', 'idUsers'], 'integer'],
            [['dateMessage'], 'safe'],
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
        $query = chatonline::find();

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
            'idChatOnline' => $this->idChatOnline,
            'dateMessage' => $this->dateMessage,
            'idUsers' => $this->idUsers,
        ]);

        return $dataProvider;
    }
}
