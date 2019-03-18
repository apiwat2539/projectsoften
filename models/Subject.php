<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "subject".
 *
 * @property int $cId
 * @property string $cNumber
 * @property string $cName
 * @property int $cYear
 * @property int $cTerm
 * @property int $cSection
 * @property string $cPassword
 * @property int $cStatus
 *
 * @property Section[] $sections
 * @property SubjectHasTa[] $subjectHasTas
 * @property Ta[] $taTas
 * @property SubjectHasTeacher[] $subjectHasTeachers
 * @property Teacher[] $teacherTs
 */
class Subject extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'subject';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['cYear', 'cTerm', 'cSection', 'cStatus'], 'integer'],
            [['cNumber', 'cName', 'cPassword'], 'string', 'max' => 45],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'cId' => 'C ID',
            'cNumber' => 'รหัสวิชา',
            'cName' => 'ชื่อวิชา',
            'cYear' => 'ปีการศึกษา',
            'cTerm' => 'เทอม',
            'cSection' => 'เซคชัน',
            'cPassword' => 'รหัสเข้าร่วม',
            'cStatus' => 'สถานะของวิชา',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSections()
    {
        return $this->hasMany(Section::className(), ['subject_cId' => 'cid']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSubjectHasTas()
    {
        return $this->hasMany(SubjectHasTa::className(), ['subject_cId' => 'cid']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTaTas()
    {
        return $this->hasMany(Ta::className(), ['taid' => 'ta_taId'])->viaTable('subject_has_ta', ['subject_cId' => 'cid']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSubjectHasTeachers()
    {
        return $this->hasMany(SubjectHasTeacher::className(), ['subject_cId' => 'cid']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTeacherTs()
    {
        return $this->hasMany(Teacher::className(), ['tid' => 'teacher_tId'])->viaTable('subject_has_teacher', ['subject_cId' => 'cid']);
    }
}
