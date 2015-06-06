<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "Users".
 *
 * @property integer $Users_id
 * @property integer $Employer_ID
 * @property integer $Access_ID
 * @property string $Users_login
 * @property string $Users_pass
 * @property integer $Users_access
 *
 * @property Comment[] $comments
 * @property Employer[] $employers
 * @property Request[] $requests
 * @property Access $access
 * @property Employer $employer
 */
class Users extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'Users';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Employer_ID', 'Access_ID', 'Users_access'], 'integer'],
            [['Users_login'], 'required'],
            [['Users_login', 'Users_pass'], 'string']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'Users_id' => 'Users ID',
            'Employer_ID' => 'Employer  ID',
            'Access_ID' => 'Access  ID',
            'Users_login' => 'Users Login',
            'Users_pass' => 'Users Pass',
            'Users_access' => 'Users Access',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getComments()
    {
        return $this->hasMany(Comment::className(), ['Users_id' => 'Users_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEmployers()
    {
        return $this->hasMany(Employer::className(), ['Users_id' => 'Users_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRequests()
    {
        return $this->hasMany(Request::className(), ['Users_id' => 'Users_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAccess()
    {
        return $this->hasOne(Access::className(), ['Access_ID' => 'Access_ID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEmployer()
    {
        return $this->hasOne(Employer::className(), ['Employer_ID' => 'Employer_ID']);
    }
}
