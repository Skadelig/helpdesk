<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "Department".
 *
 * @property integer $Department_ID
 * @property string $Department_name
 * @property string $Department_number
 *
 * @property Employer[] $employers
 */
class Department extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'Department';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Department_name', 'Department_number'], 'string', 'max' => 256]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'Department_ID' => 'КОД департамента',
            'Department_name' => 'Название департамента',
            'Department_number' => 'Номер департамента',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEmployers()
    {
        return $this->hasMany(Employer::className(), ['Department_ID' => 'Department_ID']);
    }
}
