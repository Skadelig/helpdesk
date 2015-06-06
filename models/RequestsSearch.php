<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Requests;

/**
 * RequestsSearch represents the model behind the search form about `app\models\Requests`.
 */
class RequestsSearch extends Requests
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Request_date', 'Request_text', 'Request_FacticalDateEnding', 'Request_DataEnding'], 'safe'],
            [['Request_ID', 'Executionstatus_ID', 'Employer_ID', 'Priority_ID', 'Users_id', 'Defects_ID'], 'integer'],
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
        $query = Requests::find();

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
            'Request_date' => $this->Request_date,
            'Request_ID' => $this->Request_ID,
            'Executionstatus_ID' => $this->Executionstatus_ID,
            'Employer_ID' => $this->Employer_ID,
            'Priority_ID' => $this->Priority_ID,
            'Users_id' => $this->Users_id,
            'Defects_ID' => $this->Defects_ID,
            'Request_FacticalDateEnding' => $this->Request_FacticalDateEnding,
            'Request_DataEnding' => $this->Request_DataEnding,
        ]);

        $query->andFilterWhere(['like', 'Request_text', $this->Request_text]);

        return $dataProvider;
    }
}
