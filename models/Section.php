<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "section".
 *
 * @property int $secId
 * @property int $secName
 * @property int $subject_cId
 *
 * @property Subject $subjectC
 * @property SectionHasStudent[] $sectionHasStudents
 * @property Student[] $studentStus
 */
class Section extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'section';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['secName', 'subject_cId'], 'integer'],
            [['subject_cId'], 'required'],
            [['subject_cId'], 'exist', 'skipOnError' => true, 'targetClass' => Subject::className(), 'targetAttribute' => ['subject_cId' => 'cid']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'secId' => 'Sec ID',
            'secName' => 'Sec Name',
            'subject_cId' => 'Subject C ID',
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
    public function getSectionHasStudents()
    {
        return $this->hasMany(SectionHasStudent::className(), ['section_secId' => 'secid', 'section_subject_cId' => 'subject_cid']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getStudentStus()
    {
        return $this->hasMany(Student::className(), ['stuid' => 'student_stuId'])->viaTable('section_has_student', ['section_secId' => 'secid', 'section_subject_cId' => 'subject_cid']);
    }
}
