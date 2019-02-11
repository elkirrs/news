<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "chatonline".
 *
 * @property int $id
 * @property string $textMessage
 * @property string $dateMessage
 * @property int $users_id
 *
 * @property User $users
 */
class Chatonline extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'chatonline';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['textMessage', 'dateMessage', 'users_id'], 'required'],
            [['dateMessage'], 'safe'],
            [['users_id'], 'integer'],
            [['textMessage'], 'string', 'max' => 1000],
            [['users_id'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['users_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'textMessage' => 'Text Message',
            'dateMessage' => 'Date Message',
            'users_id' => 'Users ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUsers()
    {
        return $this->hasOne(User::className(), ['id' => 'users_id']);
    }
}
