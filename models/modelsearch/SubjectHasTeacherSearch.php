<?php

namespace app\models\modelsearch;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\SubjectHasTeacher;

/**
 * SubjectHasTeacherSearch represents the model behind the search form of `app\models\SubjectHasTeacher`.
 */
class SubjectHasTeacherSearch extends SubjectHasTeacher
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['subject_cId', 'teacher_tId'], 'integer'],
        ];
    }

    /**
     * {@inheritdoc}
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
        $query = SubjectHasTeacher::find();

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
            'subject_cId' => $this->subject_cId,
            'teacher_tId' => $this->teacher_tId,
        ]);

        return $dataProvider;
    }
}
