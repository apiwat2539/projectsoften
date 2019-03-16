<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "section_has_student".
 *
 * @property int $section_secId
 * @property int $section_subject_cId
 * @property string $student_stuId
 *
 * @property Section $sectionSec
 * @property Student $studentStu
 */
class SectionHasStudent extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'section_has_student';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['section_secId', 'section_subject_cId', 'student_stuId'], 'required'],
            [['section_secId', 'section_subject_cId'], 'integer'],
            [['student_stuId'], 'string', 'max' => 13],
            [['section_secId', 'section_subject_cId', 'student_stuId'], 'unique', 'targetAttribute' => ['section_secId', 'section_subject_cId', 'student_stuId']],
            [['section_secId', 'section_subject_cId'], 'exist', 'skipOnError' => true, 'targetClass' => Section::className(), 'targetAttribute' => ['section_secId' => 'secid', 'section_subject_cId' => 'subject_cid']],
            [['student_stuId'], 'exist', 'skipOnError' => true, 'targetClass' => Student::className(), 'targetAttribute' => ['student_stuId' => 'stuid']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'section_secId' => 'Section Sec ID',
            'section_subject_cId' => 'Section Subject C ID',
            'student_stuId' => 'Student Stu ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSectionSec()
    {
        return $this->hasOne(Section::className(), ['secid' => 'section_secId', 'subject_cid' => 'section_subject_cId']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getStudentStu()
    {
        return $this->hasOne(Student::className(), ['stuid' => 'student_stuId']);
    }
}
