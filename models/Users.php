<?php

namespace app\models;

use Yii;
use yii\base\NotSupportedException;
use yii\behaviors\TimestampBehavior;
use yii\db\ActiveRecord;
use yii\web\IdentityInterface;


/**
 * This is the model class for table "Users".
 *
 * @property integer $Users_id
 * @property integer $Access_ID
 * @property string $Users_login
 * @property string $Users_pass
 * @property integer $Users_access
 * @property string $Users_auth_key 
 * @property string $Users_email_confirm_token 
 *
 * @property Comment[] $comments
 * @property Employer[] $employers
 * @property Request[] $requests
 * @property Access $access
 */
class Users extends \yii\db\ActiveRecord implements IdentityInterface
{
    const STATUS_BLOCKED = 0;
    const STATUS_ACTIVE = 1;
    const STATUS_WAIT = 2;

    public function getStatusName()
    {
        $statuses = self::getStatusesArray();
        return isset($statuses[$this->Users_status]) ? $statuses[$this->Users_status] : '';
    }

    public static function getStatusesArray()
    {
        return [
            self::STATUS_BLOCKED => 'Заблокирован',
            self::STATUS_ACTIVE => 'Активен',
            self::STATUS_WAIT => 'Ожидает подтверждения',
        ];
    }
  
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'Users';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Access_ID', 'Users_access', 'Users_status'], 'integer'],
            [['Users_login', 'Users_pass'], 'required'],
            ['Users_login', 'match', 'pattern' => '#^[\w_-]+$#i'],
            // ['Users_login', 'unique', 'targetClass' => self::className(), 'message' => 'Имя уже используется.'],
            [['Users_login', 'Users_pass'], 'string', 'min' => 2, 'max' => 256],
            [['Users_auth_key', 'Users_email_confirm_token'], 'string', 'max' => 32],

            ['Users_status', 'default', 'value' => self::STATUS_ACTIVE],
            ['Users_status', 'in', 'range' => array_keys(self::getStatusesArray())]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'Users_id' => 'КОД пользователя',
            'Access_ID' => 'Уровень доступа',
            'Users_login' => 'Логин',
            'Users_pass' => 'Пароль',
//          'Users_access' => 'Роль пользователя',
            'Users_auth_key' => 'ключ авторизации',
            'Users_email_confirm_token' => 'Users Email Confirm Token',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getComments()
    {
        return $this->hasMany(Comment::className(), ['Users_id' => 'Users_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEmployers()
    {
        return $this->hasMany(Employer::className(), ['Users_id' => 'Users_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRequests()
    {
        return $this->hasMany(Request::className(), ['Users_id' => 'Users_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAccess()
    {
        return $this->hasOne(Access::className(), ['Access_ID' => 'Access_ID']);
    }
    /**
    * @inheritdoc
    */
    public static function findIdentity($id)
    {
        return static::findOne(['Users_id' => $id]);
    }
    /**
     * @inheritdoc
     */
    public static function findIdentityByAccessToken($token, $type = null)
    {
        throw new NotSupportedException('findIdentityByAccessToken is not implemented.');
    }
 
    /**
     * @inheritdoc
     */
    public function getId()
    {
        return $this->getPrimaryKey();
    }
 
    /**
     * @inheritdoc
     */
    public function getAuthKey()
    {
        return $this->Users_auth_key;
    }
 
    /**
     * @inheritdoc
     */
    public function validateAuthKey($authKey)
    {
        return $this->getAuthKey() === $authKey;
    }
    /**
     * Finds user by username
     *
     * @param string $username
     * @return static|null
     */
    public static function findByUsername($username)
    {
        return static::findOne(['Users_login' => $username]);
    }
   /**
     * Finds user by username
     *
     * @param string $username
     * @return static|null
     */
    public static function findByUsers_login($username)
    {
        return static::findOne(['Users_login' => $username]);
    }
    /**
     * Validates password
     *
     * @param string $password password to validate
     * @return boolean if password provided is valid for current user
     */
    public function validatePassword($password)
    {
        return Yii::$app->security->validatePassword($password, $this->Users_pass);
    }
    /**
     * Validates password
     *
     * @param string $password password to validate
     * @return boolean if password provided is valid for current user
     */
    public function validateUsers_pass($password)
    {
        return Yii::$app->security->validateUsers_pass($password, $this->Users_pass);
    }
    /**
     * Generates password hash from password and sets it to the model
     *
     * @param string $password
     */
    public function setUsers_pass($password)
    {
        $this->Users_pass = Yii::$app->security->generatePasswordHash($password);
    }
 
    /**
     * Generates "remember me" authentication key
     */
    public function generateAuthKey()
    {
        $this->Users_auth_key = Yii::$app->security->generateRandomString();
    }
 
    /**
     * @inheritdoc
     */
    public function beforeSave($insert)
    {
        if (parent::beforeSave($insert)) {
            if ($insert) {
                $this->generateAuthKey();
            }
            return true;
        }
        return false;
    }
}
