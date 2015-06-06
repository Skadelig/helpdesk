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
            'Comment_ID' => 'Comment  ID',
            'Request_ID' => 'Request  ID',
            'Users_id' => 'Users ID',
            'Comment_date' => 'Comment Date',
            'Comment_txt' => 'Comment Txt',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRequest()
    {
        return $this->hasOne(Request::className(), ['Request_ID' => 'Request_ID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUsers()
    {
        return $this->hasOne(Users::className(), ['Users_id' => 'Users_id']);
    }
}
