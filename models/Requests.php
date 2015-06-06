<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "Request".
 *
 * @property string $Request_date
 * @property string $Request_text
 * @property integer $Request_ID
 * @property integer $Executionstatus_ID
 * @property integer $Employer_ID
 * @property integer $Priority_ID
 * @property integer $Users_id
 * @property integer $Defects_ID
 * @property string $Request_FacticalDateEnding
 * @property string $Request_DataEnding
 *
 * @property Comment[] $comments
 * @property Defects $defects
 * @property Employer $employer
 * @property Priority $priority
 * @property Executionstatus $executionstatus
 * @property Users $users
 */
class Requests extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'Request';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Request_date', 'Request_FacticalDateEnding', 'Request_DataEnding'], 'safe'],
            [['Request_text'], 'string'],
            [['Executionstatus_ID', 'Employer_ID', 'Priority_ID', 'Users_id', 'Defects_ID'], 'integer']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'Request_date' => 'Request Date',
            'Request_text' => 'Request Text',
            'Request_ID' => 'Request  ID',
            'Executionstatus_ID' => 'Executionstatus  ID',
            'Employer_ID' => 'Employer  ID',
            'Priority_ID' => 'Priority  ID',
            'Users_id' => 'Users ID',
            'Defects_ID' => 'Defects  ID',
            'Request_FacticalDateEnding' => 'Request  Factical Date Ending',
            'Request_DataEnding' => 'Request  Data Ending',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getComments()
    {
        return $this->hasMany(Comment::className(), ['Request_ID' => 'Request_ID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDefects()
    {
        return $this->hasOne(Defects::className(), ['Defects_ID' => 'Defects_ID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEmployer()
    {
        return $this->hasOne(Employer::className(), ['Employer_ID' => 'Employer_ID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPriority()
    {
        return $this->hasOne(Priority::className(), ['Priority_ID' => 'Priority_ID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getExecutionstatus()
    {
        return $this->hasOne(Executionstatus::className(), ['Executionstatus_ID' => 'Executionstatus_ID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUsers()
    {
        return $this->hasOne(Users::className(), ['Users_id' => 'Users_id']);
    }
}
