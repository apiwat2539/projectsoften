<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "subject_has_teacher".
 *
 * @property int $subject_cId
 * @property int $teacher_tId
 *
 * @property Subject $subjectC
 * @property Teacher $teacherT
 */
class SubjectHasTeacher extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'subject_has_teacher';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['subject_cId', 'teacher_tId'], 'required'],
            [['subject_cId', 'teacher_tId'], 'integer'],
            [['subject_cId', 'teacher_tId'], 'unique', 'targetAttribute' => ['subject_cId', 'teacher_tId']],
            [['subject_cId'], 'exist', 'skipOnError' => true, 'targetClass' => Subject::className(), 'targetAttribute' => ['subject_cId' => 'cid']],
            [['teacher_tId'], 'exist', 'skipOnError' => true, 'targetClass' => Teacher::className(), 'targetAttribute' => ['teacher_tId' => 'tid']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'subject_cId' => 'Subject C ID',
            'teacher_tId' => 'Teacher T ID',
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
    public function getTeacherT()
    {
        return $this->hasOne(Teacher::className(), ['tid' => 'teacher_tId']);
    }
}
