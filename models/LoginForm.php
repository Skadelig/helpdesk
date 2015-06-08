<?php

namespace app\models;

use app\models\Users;
use Yii;
use yii\base\Model;

/**
 * LoginForm is the model behind the login form.
 */
class LoginForm extends Model
{
    public $Users_login;
    public $Users_pass;
    public $rememberMe = true;

    private $_user = false;


    /**
     * @return array the validation rules.
     */
    public function rules()
    {
        return [
            // Users_login and Users_pass are both required
            [['Users_login', 'Users_pass'], 'required'],
            // rememberMe must be a boolean value
            ['rememberMe', 'boolean'],
            // Users_pass is validated by validateUsers_pass()
            ['Users_pass', 'validateUsers_pass'],
        ];
    }

    /**
     * Validates the Users_pass.
     * This method serves as the inline validation for Users_pass.
     *
     * @param string $attribute the attribute currently being validated
     * @param array $params the additional name-value pairs given in the rule
     */
    public function validateUsers_pass($attribute, $params)
    {
        if (!$this->hasErrors()) {
            $user = $this->getUsers();

            if (!$user || !$user->validatePassword($this->Users_pass)) {
                $this->addError($attribute, 'Неправильный логин или пароль.');
            }
        }
    }

    /**
     * Logs in a user using the provided Users_login and Users_pass.
     * @return boolean whether the user is logged in successfully
     */
    public function login()
    {
        if ($this->validate()) {
            return Yii::$app->user->login($this->getUsers(), $this->rememberMe ? 3600*24*30 : 0);
        } else {
            return false;
        }
    }

    /**
     * Finds user by [[Users_login]]
     *
     * @return User|null
     */
    public function getUsers()
    {
        if ($this->_user === false) {
            $this->_user = Users::findByUsers_login($this->Users_login);
        }

        return $this->_user;
    }
}
