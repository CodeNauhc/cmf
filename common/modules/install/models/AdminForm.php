<?php
namespace install\models;

use yii\base\Model;
use Yii;


class AdminForm extends Model
{
    
    public $email;

    public $username;

    public $password;

    public $passwordConfirm;

    const CACHE_KEY = "install-admin-form";

    public function rules()
    {
        return [
            [
                [
                    'username',
                    'password'
                ],
                'required'
            ],
            
            [
                [
                    'password',
                    'username'
                ],
                'string',
                'max' => 128
            ],
            [
                'email',
                'email'
            ],
            
            // password_confirm
            [
                [
                    'passwordConfirm'
                ],
                'required'
            ],
            [
                [
                    'passwordConfirm'
                ],
                'compare',
                'compareAttribute' => 'password'
            ]
        ];
    }

    public function attributeLabels()
    {
        return [
            'username' => 'username',
            'password' => 'Password',
            'passwordConfirm' => 'Password Confirm',
            'email' => 'Email'
        ];
    }

    public function loadDefaultValues()
    {
        $data = \Yii::$app->getCache()->get(AdminForm::CACHE_KEY);
        if ($data) {
            $this->setAttributes($data);
        }
    }

    public function save()
    {
        \Yii::$app->getCache()->set(AdminForm::CACHE_KEY, $this->toArray());
        return true;
    }
}