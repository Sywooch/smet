<?php

namespace common\models\search;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Resume;

/**
 * ResumeSearch represents the model behind the search form about `common\models\Resume`.
 */
class ResumeSearch extends Resume
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'is_conviction', 'unit'], 'integer'],
            [['fio', 'phone', 'address', 'bad_habits', 'education', 'other_education', 'experience', 'last_job', 'degree', 'other_info', 'portfolio', 'photo', 'resume_file'], 'safe'],
//            [['file'], 'file'],
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
        $query = Resume::find();

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
            'is_conviction' => $this->is_conviction,
        ]);

        $query->andFilterWhere(['like', 'unit', $this->unit])
            ->andFilterWhere(['like', 'fio', $this->fio])
            ->andFilterWhere(['like', 'phone', $this->phone])
            ->andFilterWhere(['like', 'address', $this->address])
            ->andFilterWhere(['like', 'bad_habits', $this->bad_habits])
            ->andFilterWhere(['like', 'education', $this->education])
            ->andFilterWhere(['like', 'other_education', $this->other_education])
            ->andFilterWhere(['like', 'experience', $this->experience])
            ->andFilterWhere(['like', 'last_job', $this->last_job])
            ->andFilterWhere(['like', 'degree', $this->degree])
            ->andFilterWhere(['like', 'other_info', $this->other_info])
            ->andFilterWhere(['like', 'portfolio', $this->portfolio])
            ->andFilterWhere(['like', 'photo', $this->photo]);

        return $dataProvider;
    }
}
