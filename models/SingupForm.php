<?php
/**
 * Created by PhpStorm.
 * User: elkirrs
 * Date: 11.02.2019
 * Time: 15:21
 */

namespace app\models;


use yii\base\Model;
use yii\bootstrap\Modal;

class SingupForm extends Model
{
    public $name;
    public $surname;
    public $middlename;
    public $nickname;
    public $email;
    public $password;


    public function rules()
    {
        return [
            [['name', 'surname', 'middlename', 'nickname', 'email', 'password'], 'required'],
            [['name', 'surname', 'middlename', 'nickname'], 'string'],
            [['email'], 'email'],
            [['email'], 'unique',
                'targetClass' => 'app/model/User',
                'targetAttribute' => 'email',],
            [['nickname'], 'unique',
                'targetClass' => 'app/model/User',
                'targetAttribute' => 'nickname'],
        ];
    }

    public function singup()
    {
        if ($this->validators){
            $user = new User;
            $user->attributes = $this->attributes;
            return $user->create();
        }
    }
}