<?php

namespace app\models\modelsearch;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\SectionHasStudent;

/**
 * SectionHasStudentSearch represents the model behind the search form of `app\models\SectionHasStudent`.
 */
class SectionHasStudentSearch extends SectionHasStudent
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['section_secId', 'section_subject_cId'], 'integer'],
            [['student_stuId'], 'safe'],
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
        $query = SectionHasStudent::find();

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
            'section_secId' => $this->section_secId,
            'section_subject_cId' => $this->section_subject_cId,
        ]);

        $query->andFilterWhere(['like', 'student_stuId', $this->student_stuId]);

        return $dataProvider;
    }
}
