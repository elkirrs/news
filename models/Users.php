<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "users".
 *
 * @property int $id
 * @property string $name
 * @property string $surname
 * @property string $middlename
 * @property string $email
 * @property string $nickname
 * @property string $password
 * @property int $isAdmin
 * @property string $photo
 *
 * @property Chatonline[] $chatonlines
 * @property Commentsnews[] $commentsnews
 * @property Userselection[] $userselections
 */
class Users extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'users';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'surname', 'middlename', 'email', 'nickname', 'password', 'isAdmin'], 'required'],
            [['isAdmin'], 'integer'],
            [['name', 'surname', 'middlename', 'nickname'], 'string', 'max' => 45],
            [['email'], 'string', 'max' => 100],
            [['password', 'photo'], 'string', 'max' => 50],
            [['email'], 'unique'],
            [['nickname'], 'unique'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'surname' => 'Surname',
            'middlename' => 'Middlename',
            'email' => 'Email',
            'nickname' => 'Nickname',
            'password' => 'Password',
            'isAdmin' => 'Is Admin',
            'photo' => 'Photo',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getChatonlines()
    {
        return $this->hasMany(Chatonline::className(), ['users_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCommentsnews()
    {
        return $this->hasMany(Commentsnews::className(), ['users_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUserselections()
    {
        return $this->hasMany(Userselection::className(), ['users_id' => 'id']);
    }
}
