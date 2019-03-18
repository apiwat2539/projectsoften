<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "teacher".
 *
 * @property int $tId
 * @property string $position
 * @property string $tName
 *
 * @property SubjectHasTeacher[] $subjectHasTeachers
 * @property Subject[] $subjectCs
 * @property TeacherHasSubjectHasTa[] $teacherHasSubjectHasTas
 * @property SubjectHasTa[] $subjectHasTaSubjectCs
 */
class Teacher extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'teacher';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['position'], 'string', 'max' => 10],
            [['tName'], 'string', 'max' => 100],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'tId' => 'T ID',
            'position' => 'Position',
            'tName' => 'T Name',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSubjectHasTeachers()
    {
        return $this->hasMany(SubjectHasTeacher::className(), ['teacher_tId' => 'tid']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSubjectCs()
    {
        return $this->hasMany(Subject::className(), ['cid' => 'subject_cId'])->viaTable('subject_has_teacher', ['teacher_tId' => 'tid']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTeacherHasSubjectHasTas()
    {
        return $this->hasMany(TeacherHasSubjectHasTa::className(), ['teacher_tId' => 'tid']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSubjectHasTaSubjectCs()
    {
        return $this->hasMany(SubjectHasTa::className(), ['subject_cid' => 'subject_has_ta_subject_cId', 'ta_taid' => 'subject_has_ta_ta_taId'])->viaTable('teacher_has_subject_has_ta', ['teacher_tId' => 'tid']);
    }
}
