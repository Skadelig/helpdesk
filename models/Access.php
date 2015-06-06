<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "Access".
 *
 * @property integer $Access_ID
 * @property string $Access_nm
 * @property integer $Access_ctrl
 * @property integer $Access_redirect
 * @property integer $Access_deprt
 * @property integer $Access_prvt
 * @property integer $Access_otherusr
 * @property integer $Access_othrdeprt
 * @property integer $Access_statis
 * @property integer $Access_comnt
 *
 * @property Users[] $users
 */
class Access extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'Access';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Access_ID'], 'required'],
            [['Access_ID', 'Access_ctrl', 'Access_redirect', 'Access_deprt', 'Access_prvt', 'Access_otherusr', 'Access_othrdeprt', 'Access_statis', 'Access_comnt'], 'integer'],
            [['Access_nm'], 'string']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'Access_ID' => 'Access  ID',
            'Access_nm' => 'Access Nm',
            'Access_ctrl' => 'Access Ctrl',
            'Access_redirect' => 'Access Redirect',
            'Access_deprt' => 'Access Deprt',
            'Access_prvt' => 'Access Prvt',
            'Access_otherusr' => 'Access Otherusr',
            'Access_othrdeprt' => 'Access Othrdeprt',
            'Access_statis' => 'Access Statis',
            'Access_comnt' => 'Access Comnt',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUsers()
    {
        return $this->hasMany(Users::className(), ['Access_ID' => 'Access_ID']);
    }
}
