<?php

namespace app\models;

use Yii;
use yii\web\IdentityInterface;

/**
 * This is the model class for table "user".
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
class User extends \yii\db\ActiveRecord implements IdentityInterface
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'user';
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


    /**
     * Finds an identity by the given ID.
     * @param string|int $id the ID to be looked for
     * @return IdentityInterface the identity object that matches the given ID.
     * Null should be returned if such an identity cannot be found
     * or the identity is not in an active state (disabled, deleted, etc.)
     */
    public static function findIdentity($id)
    {
        return User::findOne($id);
    }

    /**
     * Finds an identity by the given token.
     * @param mixed $token the token to be looked for
     * @param mixed $type the type of the token. The value of this parameter depends on the implementation.
     * For example, [[\yii\filters\auth\HttpBearerAuth]] will set this parameter to be `yii\filters\auth\HttpBearerAuth`.
     * @return IdentityInterface the identity object that matches the given token.
     * Null should be returned if such an identity cannot be found
     * or the identity is not in an active state (disabled, deleted, etc.)
     */
    public static function findIdentityByAccessToken($token, $type = null)
    {

    }

    /**
     * Returns an ID that can uniquely identify a user identity.
     * @return string|int an ID that uniquely identifies a user identity.
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Returns a key that can be used to check the validity of a given identity ID.
     *
     * The key should be unique for each individual user, and should be persistent
     * so that it can be used to check the validity of the user identity.
     *
     * The space of such keys should be big enough to defeat potential identity attacks.
     *
     * This is required if [[User::enableAutoLogin]] is enabled.
     * @return string a key that is used to check the validity of a given identity ID.
     * @see validateAuthKey()
     */
    public function getAuthKey()
    {

    }

    /**
     * Validates the given auth key.
     *
     * This is required if [[User::enableAutoLogin]] is enabled.
     * @param string $authKey the given auth key
     * @return bool whether the given auth key is valid.
     * @see getAuthKey()
     */
    public function validateAuthKey($authKey)
    {

    }

    public static function findByEmail($email)
    {
        return User::find()->where(['email' => $email])->one();
    }

    public function setPassword($password)
    {
        $this->password = Yii::$app->security->generatePasswordHash($password, 11);
    }


    public function validatePassword($password)
    {
        return Yii::$app->security->validatePassword($password, $this->password) ? true : false;
                //return ($this->password === $password) ? true : false;
    }

    public function create()
    {
       return $this->save(false);
    }


    public function getImage()
    {
        return $this->photo;
    }

}
