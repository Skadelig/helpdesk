<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "Priority".
 *
 * @property integer $Priority_ID
 * @property string $Priority_nm
 * @property string $Priority_about
 *
 * @property Request[] $requests
 */
class Priority extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'Priority';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Priority_about'], 'string'],
            [['Priority_nm'], 'string', 'max' => 256]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'Priority_ID' => 'КОД приоритета',
            'Priority_nm' => 'Название приоритета',
            'Priority_about' => 'Краткое описание',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRequests()
    {
        return $this->hasMany(Request::className(), ['Priority_ID' => 'Priority_ID']);
    }
}
