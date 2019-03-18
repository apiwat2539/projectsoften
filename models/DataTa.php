<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "data_ta".
 *
 * @property int $dataTa_Id
 * @property string $ta_taId
 * @property int $subjectId
 * @property int $year
 * @property int $term
 *
 * @property Ta $taTa
 */
class DataTa extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'data_ta';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['ta_taId'], 'required'],
            [['subjectId', 'year', 'term'], 'integer'],
            [['ta_taId'], 'string', 'max' => 13],
            [['ta_taId'], 'exist', 'skipOnError' => true, 'targetClass' => Ta::className(), 'targetAttribute' => ['ta_taId' => 'taid']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'dataTa_Id' => 'Data Ta  ID',
            'ta_taId' => 'รหัสผู้ช่วยอาจารย์',
            'subjectId' => 'Subject ID',
            'year' => 'Year',
            'term' => 'Term',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTaTa()
    {
        return $this->hasOne(Ta::className(), ['taid' => 'ta_taId']);
    }
}
