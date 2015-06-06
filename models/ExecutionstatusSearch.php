<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Executionstatus;

/**
 * ExecutionstatusSearch represents the model behind the search form about `app\models\Executionstatus`.
 */
class ExecutionstatusSearch extends Executionstatus
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Executionstatus_ID', 'Executionstatus_activ'], 'integer'],
            [['Executionstatus_nm'], 'safe'],
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
        $query = Executionstatus::find();

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
            'Executionstatus_ID' => $this->Executionstatus_ID,
            'Executionstatus_activ' => $this->Executionstatus_activ,
        ]);

        $query->andFilterWhere(['like', 'Executionstatus_nm', $this->Executionstatus_nm]);

        return $dataProvider;
    }
}
