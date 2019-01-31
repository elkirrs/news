<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "users".
 *
 * @property int $idUsers
 * @property string $name
 * @property string $surname
 * @property string $middlename
 * @property string $email
 * @property string $nickname
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
            [['name', 'surname', 'middlename', 'email', 'nickname'], 'required'],
            [['name', 'surname', 'middlename', 'nickname'], 'string', 'max' => 45],
            [['email'], 'string', 'max' => 100],
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
            'idUsers' => 'Id Users',
            'name' => 'Name',
            'surname' => 'Surname',
            'middlename' => 'Middlename',
            'email' => 'Email',
            'nickname' => 'Nickname',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getChatonlines()
    {
        return $this->hasMany(Chatonline::className(), ['idUsers' => 'idusers']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCommentsnews()
    {
        return $this->hasMany(Commentsnews::className(), ['idUsers' => 'idusers']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUserselections()
    {
        return $this->hasMany(Userselection::className(), ['idUsers' => 'idusers']);
    }
}
