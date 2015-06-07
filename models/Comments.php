<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "Comment".
 *
 * @property integer $Comment_ID
 * @property integer $Request_ID
 * @property integer $Users_id
 * @property string $Comment_date
 * @property string $Comment_txt
 *
 * @property Request $request
 * @property Users $users
 */
class Comments extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'Comment';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Request_ID', 'Users_id'], 'integer'],
            [['Comment_date'], 'safe'],
            [['Comment_txt'], 'string']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'Comment_ID' => 'КОД комментария',
            'Request_ID' => 'КОД заявки',
            'Users_id' => 'Код пользователя',
            'Comment_date' => 'Дата',
            'Comment_txt' => 'Текст комментария',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRequest()
    {
        return $this->hasOne(Requests::className(), ['Request_ID' => 'Request_ID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUsers()
    {
        return $this->hasOne(Users::className(), ['Users_id' => 'Users_id']);
    }
}
