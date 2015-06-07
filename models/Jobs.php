<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "Job".
 *
 * @property integer $Job_ID
 * @property string $Job_name
 * @property string $Job_responsibility
 *
 * @property Employer[] $employers
 */
class Jobs extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'Job';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Job_name', 'Job_responsibility'], 'string', 'max' => 256]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'Job_ID' => 'КОД должности',
            'Job_name' => 'Название должности',
            'Job_responsibility' => 'Обязанности',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEmployers()
    {
        return $this->hasMany(Employer::className(), ['Job_ID' => 'Job_ID']);
    }
}
