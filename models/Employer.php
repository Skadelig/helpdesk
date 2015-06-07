<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "Employer".
 *
 * @property integer $Employer_ID
 * @property integer $Job_ID
 * @property integer $Users_id
 * @property integer $Department_ID
 * @property string $Employer_surname
 * @property string $Employer_name
 * @property string $Employer_birthday
 *
 * @property Department $department
 * @property Users $users
 * @property Job $job
 * @property Request[] $requests
 * @property Users[] $users0
 */
class Employer extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'Employer';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Job_ID', 'Users_id', 'Department_ID'], 'integer'],
            [['Employer_birthday'], 'safe'],
            [['Employer_surname', 'Employer_name'], 'string', 'max' => 256]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'Employer_ID' => 'КОД работника',
            'Job_ID' => 'Должность',
            'Users_id' => ' КОД пользователя',
            'Department_ID' => 'Отдел',
            'Employer_surname' => 'Фамилия',
            'Employer_name' => 'Имя',
            'Employer_birthday' => 'День рождения',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDepartment()
    {
        return $this->hasOne(Department::className(), ['Department_ID' => 'Department_ID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUsers()
    {
        return $this->hasOne(Users::className(), ['Users_id' => 'Users_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getJob()
    {
        return $this->hasOne(Job::className(), ['Job_ID' => 'Job_ID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRequests()
    {
        return $this->hasMany(Request::className(), ['Employer_ID' => 'Employer_ID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUsers0()
    {
        return $this->hasMany(Users::className(), ['Employer_ID' => 'Employer_ID']);
    }
}
