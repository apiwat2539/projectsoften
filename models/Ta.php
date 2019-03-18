<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "ta".
 *
 * @property string $taId
 * @property string $taName
 *
 * @property SubjectHasTa[] $subjectHasTas
 * @property Subject[] $subjectCs
 */
class Ta extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'ta';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['taId'], 'required'],
            [['taId'], 'string', 'max' => 13],
            [['taName'], 'string', 'max' => 45],
            [['taId'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'taId' => 'Ta ID',
            'taName' => 'Ta Name',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSubjectHasTas()
    {
        return $this->hasMany(SubjectHasTa::className(), ['ta_taId' => 'taid']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSubjectCs()
    {
        return $this->hasMany(Subject::className(), ['cid' => 'subject_cId'])->viaTable('subject_has_ta', ['ta_taId' => 'taid']);
    }
}
