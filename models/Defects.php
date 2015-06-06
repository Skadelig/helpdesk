<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "Defects".
 *
 * @property integer $Defects_ID
 * @property string $Defects_nm
 *
 * @property Request[] $requests
 */
class Defects extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'Defects';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Defects_nm'], 'string']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'Defects_ID' => 'КОД дефекта',
            'Defects_nm' => 'Название дефекта',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRequests()
    {
        return $this->hasMany(Request::className(), ['Defects_ID' => 'Defects_ID']);
    }
}
