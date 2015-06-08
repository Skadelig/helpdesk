<?php
namespace app\models;

use app\models\Users;
use yii\base\Model;
use Yii;

/**
 * Signup form
 */
class SignupForm extends Model
{
    public $Users_login;
  
    public $Users_pass;

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            ['Users_login', 'filter', 'filter' => 'trim'],
            ['Users_login', 'required'],
            ['Users_login', 'unique', 'targetClass' => '\app\models\Users', 'message' => 'This Users_login has already been taken.'],
            ['Users_login', 'string', 'min' => 2, 'max' => 255],

           

            ['Users_pass', 'required'],
            ['Users_pass', 'string', 'min' => 6],
        ];
    }
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
     * Signs user up.
     *
     * @return User|null the saved model or null if saving fails
     */
    public function signup()
    {
        if ($this->validate()) {
            $user = new Users();
            $user->Users_login = $this->Users_login;
            
            $user->setUsers_pass($this->Users_pass);
            $user->generateAuthKey();
            if ($user->save()) {
                return $user;
            }
        }

        return null;
    }
}
