<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Access;

/**
 * AccessSearch represents the model behind the search form about `app\models\Access`.
 */
class AccessSearch extends Access
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Access_ID', 'Access_ctrl', 'Access_redirect', 'Access_deprt', 'Access_prvt', 'Access_otherusr', 'Access_othrdeprt', 'Access_statis', 'Access_comnt'], 'integer'],
            [['Access_nm'], 'safe'],
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
        $query = Access::find();

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
            'Access_ID' => $this->Access_ID,
            'Access_ctrl' => $this->Access_ctrl,
            'Access_redirect' => $this->Access_redirect,
            'Access_deprt' => $this->Access_deprt,
            'Access_prvt' => $this->Access_prvt,
            'Access_otherusr' => $this->Access_otherusr,
            'Access_othrdeprt' => $this->Access_othrdeprt,
            'Access_statis' => $this->Access_statis,
            'Access_comnt' => $this->Access_comnt,
        ]);

        $query->andFilterWhere(['like', 'Access_nm', $this->Access_nm]);

        return $dataProvider;
    }
}
