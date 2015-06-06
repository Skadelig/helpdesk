<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "Executionstatus".
 *
 * @property integer $Executionstatus_ID
 * @property string $Executionstatus_nm
 * @property integer $Executionstatus_activ
 *
 * @property Request[] $requests
 */
class Executionstatus extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'Executionstatus';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Executionstatus_nm'], 'string'],
            [['Executionstatus_activ'], 'integer']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'Executionstatus_ID' => 'Executionstatus  ID',
            'Executionstatus_nm' => 'Executionstatus Nm',
            'Executionstatus_activ' => 'Executionstatus Activ',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRequests()
    {
        return $this->hasMany(Request::className(), ['Executionstatus_ID' => 'Executionstatus_ID']);
    }
}
