<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "subject_has_ta".
 *
 * @property int $subject_cId
 * @property string $ta_taId
 *
 * @property Subject $subjectC
 * @property Ta $taTa
 * @property TeacherHasSubjectHasTa[] $teacherHasSubjectHasTas
 * @property Teacher[] $teacherTs
 */
class SubjectHasTa extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'subject_has_ta';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['subject_cId', 'ta_taId'], 'required'],
            [['subject_cId'], 'integer'],
            [['ta_taId'], 'string', 'max' => 13],
            [['subject_cId', 'ta_taId'], 'unique', 'targetAttribute' => ['subject_cId', 'ta_taId']],
            [['subject_cId'], 'exist', 'skipOnError' => true, 'targetClass' => Subject::className(), 'targetAttribute' => ['subject_cId' => 'cid']],
            [['ta_taId'], 'exist', 'skipOnError' => true, 'targetClass' => Ta::className(), 'targetAttribute' => ['ta_taId' => 'taid']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'subject_cId' => 'Subject C ID',
            'ta_taId' => 'รหัสผู้ช่วยอาจารย์',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSubjectC()
    {
        return $this->hasOne(Subject::className(), ['cid' => 'subject_cId']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTaTa()
    {
        return $this->hasOne(Ta::className(), ['taid' => 'ta_taId']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTeacherHasSubjectHasTas()
    {
        return $this->hasMany(TeacherHasSubjectHasTa::className(), ['subject_has_ta_subject_cId' => 'subject_cid', 'subject_has_ta_ta_taId' => 'ta_taid']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTeacherTs()
    {
        return $this->hasMany(Teacher::className(), ['tid' => 'teacher_tId'])->viaTable('teacher_has_subject_has_ta', ['subject_has_ta_subject_cId' => 'subject_cid', 'subject_has_ta_ta_taId' => 'ta_taid']);
    }
}
