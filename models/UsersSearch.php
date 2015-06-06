<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Users;

/**
 * UsersSearch represents the model behind the search form about `app\models\Users`.
 */
class UsersSearch extends Users
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Users_id', 'Employer_ID', 'Access_ID', 'Users_access'], 'integer'],
            [['Users_login', 'Users_pass'], 'safe'],
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
        $query = Users::find();

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
            'Users_id' => $this->Users_id,
            'Employer_ID' => $this->Employer_ID,
            'Access_ID' => $this->Access_ID,
            'Users_access' => $this->Users_access,
        ]);

        $query->andFilterWhere(['like', 'Users_login', $this->Users_login])
            ->andFilterWhere(['like', 'Users_pass', $this->Users_pass]);

        return $dataProvider;
    }
}
