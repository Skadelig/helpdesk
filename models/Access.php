<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "Access".
 *
 * @property integer $Access_ID
 * @property string $Access_nm
 * @property boolean $Access_ctrl
 * @property boolean $Access_redirect
 * @property boolean $Access_deprt
 * @property boolean $Access_prvt
 * @property boolean $Access_otherusr
 * @property boolean $Access_othrdeprt
 * @property boolean $Access_statis
 * @property boolean $Access_comnt
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
            [['Access_ctrl', 'Access_redirect', 'Access_deprt', 'Access_prvt', 'Access_otherusr', 'Access_othrdeprt', 'Access_statis', 'Access_comnt'], 'boolean'],
            [['Access_nm'], 'string', 'max' => 256]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'Access_ID' => 'КОД1 пользователя',
            'Access_nm' => 'Название доступа',
            'Access_ctrl' => 'Управление завками',
            'Access_redirect' => 'Перенаправление',
            'Access_deprt' => 'Доступ к департаменту',
            'Access_prvt' => 'Просмотр личных заявок',
            'Access_otherusr' => 'Просмотр заявок отдела',
            'Access_othrdeprt' => 'Перенаправление заявок в другой отдел',
            'Access_statis' => 'Доступ к с татитстике',
            'Access_comnt' => 'Доступ к комментариям',
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
