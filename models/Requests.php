<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "Request".
 *
 * @property integer $Request_ID
 * @property string $Request_date
 * @property string $Request_text
 * @property boolean $Executionstatus
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
            [['Executionstatus'], 'boolean'],
            [['Employer_ID', 'Priority_ID', 'Users_id', 'Defects_ID'], 'integer']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'Request_ID' => 'КОД заявки',
            'Request_date' => 'Дата заявки',
            'Request_text' => 'Текст заявки',
            'Executionstatus' => 'Заявка исполнятся',
            'Employer_ID' => 'КОД работника создателя',
            'Priority_ID' => 'КОД приоритета',
            'Users_id' => 'КОД исполнителя',
            'Defects_ID' => 'КОД дефекта',
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
}
