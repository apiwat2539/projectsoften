<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "student".
 *
 * @property string $stuId
 * @property string $stuName
 *
 * @property SectionHasStudent[] $sectionHasStudents
 * @property Section[] $sectionSecs
 */
class Student extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'student';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['stuId'], 'required'],
            [['stuId'], 'string', 'max' => 13],
            [['stuName'], 'string', 'max' => 100],
            [['stuId'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'stuId' => 'รหัสนักศึกษา',
            'stuName' => 'ชื่อนักศึกษา',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSectionHasStudents()
    {
        return $this->hasMany(SectionHasStudent::className(), ['student_stuId' => 'stuid']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSectionSecs()
    {
        return $this->hasMany(Section::className(), ['secid' => 'section_secId', 'subject_cid' => 'section_subject_cId'])->viaTable('section_has_student', ['student_stuId' => 'stuid']);
    }
}
