<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Employer;
use app\models\Department; 
/**
 * EmployerSearch represents the model behind the search form about `app\models\Employer`.
 */
class EmployerSearch extends Employer
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Employer_ID', 'Job_ID', 'Users_id'], 'integer'],
            [['Employer_surname', 'Employer_name', 'Employer_birthday', 'Department_ID'], 'safe'],
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
        $query = Employer::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }
        $query->joinWith('department');
       
        $query->andFilterWhere([
            'Employer_ID' => $this->Employer_ID,
            'Job_ID' => $this->Job_ID,
            'Users_id' => $this->Users_id,
            /*'Department_ID' => $this->Department_ID,*/
            'Employer_birthday' => $this->Employer_birthday,
        ]);

        $query->andFilterWhere(['like', 'Employer_surname', $this->Employer_surname])
            ->andFilterWhere(['like', 'Employer_name', $this->Employer_name])
            ->andFilterWhere(['like', 'department.Department_name', $this->Department_ID]);

        return $dataProvider;
    }
}
