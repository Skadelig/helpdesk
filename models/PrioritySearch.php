<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Priority;

/**
 * PrioritySearch represents the model behind the search form about `app\models\Priority`.
 */
class PrioritySearch extends Priority
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Priority_ID'], 'integer'],
            [['Priority_nm', 'Priority_about'], 'safe'],
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
        $query = Priority::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        $query->andFilterWhere([
            'Priority_ID' => $this->Priority_ID,
        ]);

        $query->andFilterWhere(['like', 'Priority_nm', $this->Priority_nm])
            ->andFilterWhere(['like', 'Priority_about', $this->Priority_about]);

        return $dataProvider;
    }
}
