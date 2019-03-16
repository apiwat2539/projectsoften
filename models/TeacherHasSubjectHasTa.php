<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "teacher_has_subject_has_ta".
 *
 * @property int $teacher_tId
 * @property int $subject_has_ta_subject_cId
 * @property string $subject_has_ta_ta_taId
 *
 * @property SubjectHasTa $subjectHasTaSubjectC
 * @property Teacher $teacherT
 */
class TeacherHasSubjectHasTa extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'teacher_has_subject_has_ta';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['teacher_tId', 'subject_has_ta_subject_cId', 'subject_has_ta_ta_taId'], 'required'],
            [['teacher_tId', 'subject_has_ta_subject_cId'], 'integer'],
            [['subject_has_ta_ta_taId'], 'string', 'max' => 13],
            [['teacher_tId', 'subject_has_ta_subject_cId', 'subject_has_ta_ta_taId'], 'unique', 'targetAttribute' => ['teacher_tId', 'subject_has_ta_subject_cId', 'subject_has_ta_ta_taId']],
            [['subject_has_ta_subject_cId', 'subject_has_ta_ta_taId'], 'exist', 'skipOnError' => true, 'targetClass' => SubjectHasTa::className(), 'targetAttribute' => ['subject_has_ta_subject_cId' => 'subject_cid', 'subject_has_ta_ta_taId' => 'ta_taid']],
            [['teacher_tId'], 'exist', 'skipOnError' => true, 'targetClass' => Teacher::className(), 'targetAttribute' => ['teacher_tId' => 'tid']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'teacher_tId' => 'Teacher T ID',
            'subject_has_ta_subject_cId' => 'Subject Has Ta Subject C ID',
            'subject_has_ta_ta_taId' => 'Subject Has Ta Ta Ta ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSubjectHasTaSubjectC()
    {
        return $this->hasOne(SubjectHasTa::className(), ['subject_cid' => 'subject_has_ta_subject_cId', 'ta_taid' => 'subject_has_ta_ta_taId']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTeacherT()
    {
        return $this->hasOne(Teacher::className(), ['tid' => 'teacher_tId']);
    }
}
