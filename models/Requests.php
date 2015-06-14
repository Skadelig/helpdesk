<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "Request".
 *
 * @property integer $Request_ID
 * @property string $Request_text
 * @property boolean $Executionstatus
 * @property integer $Employer_ID
 * @property integer $Priority_ID
 * @property integer $Users_id
 * @property integer $Defects_ID
 * @property string $Request_date
 * @property string $Request_FacticalDateEnding
 * @property string $Request_DataEnding
 *
 * @property Comment[] $comments
 * @property Defects $defects
 * @property Employer $employer
 * @property Priority $priority
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
            [['Request_text'], 'string'],
            [['Executionstatus'], 'boolean'],
            [['Employer_ID', 'Priority_ID', 'Users_id', 'Defects_ID'], 'integer'],
            [['Request_date', 'Request_FacticalDateEnding', 'Request_DataEnding'], 'safe']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'Request_ID' => 'КОД заявки',
            'Request_text' => 'Текст заявки',
            'Executionstatus' => 'Заявка исполнятся',
            'Employer_ID' => 'Фамилия заявителя',
            'Priority_ID' => 'Приоритет',
            'Users_id' => 'Исполнитель',
            'Defects_ID' => 'Класс дефекта',
            'Request_date' => 'Дата заявки',
            'Request_FacticalDateEnding' => 'Фактическая дата завершения',
            'Request_DataEnding' => 'Предполагаемая дата завершения',
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
    public function getUsers()
    {
        return $this->hasOne(Users::className(), ['Users_id' => 'Users_id']);
    }

    public function beforeSave($insert)
    {
           if($date = \Datetime::createFromFormat('d-m-Y H:i:s', $this->Request_date)) 
           $this->Request_date = $date->format('Y-m-d H:i:s');

             if($date = \Datetime::createFromFormat('d-m-Y H:i:s', $this->Request_FacticalDateEnding))
            $this->Request_FacticalDateEnding = $date->format('Y-m-d H:i:s');

             if($date = \Datetime::createFromFormat('d-m-Y H:i:s', $this->Request_DataEnding))
            $this->Request_DataEnding = $date->format('Y-m-d H:i:s');
        
            return true;
    }
    public function getExecutionstatusLabel()
    {
        return $this->Executionstatus ? '<i class="fa fa-check" style="color:green"></i>' : '<i class="fa fa-times" style="color:red"></i>';
    }
}
