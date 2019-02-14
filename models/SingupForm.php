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
    public $nickname;
    public $email;
    public $password;


    public function rules()
    {
        return [
            [['name', 'surname', 'nickname', 'email', 'password'], 'required'],
            [['name', 'surname', 'middlename', 'nickname'], 'string'],
            [['email'], 'email'],
            [['email'], 'unique',
                'targetClass' => 'app/model/User'],
            [['nickname'], 'unique',
                'targetClass' => 'app/model/User',
                'targetAttribute' => 'nickname'],
            [['password'], 'string', 'min' => 2, 'max' =>16]
        ];
    }

    public function singup()
    {
//        if ($this->validators){
//            $user = new User;
//            $user->setPassword($this->password);
//            $user->attributes = $this->attributes;
//            return $user->create();
//       }
        $user = new User();
        $user->name = $this->name;
        $user->surname = $this->surname;
        $user->nickname = $this->nickname;
        $user->email = $this->email;
        //$user->password = $this->password;
        $user->setPassword($this->password);
        return $user->create() ? $user : null;

    }
}