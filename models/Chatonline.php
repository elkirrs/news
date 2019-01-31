<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "chatonline".
 *
 * @property int $idChatOnline
 * @property string $dateMessage
 * @property int $idUsers
 *
 * @property Chatmessage[] $chatmessages
 * @property Users $users
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
            [['dateMessage', 'idUsers'], 'required'],
            [['dateMessage'], 'safe'],
            [['idUsers'], 'integer'],
            [['idUsers'], 'exist', 'skipOnError' => true, 'targetClass' => Users::className(), 'targetAttribute' => ['idUsers' => 'idusers']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idChatOnline' => 'Id Chat Online',
            'dateMessage' => 'Date Message',
            'idUsers' => 'Id Users',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getChatmessages()
    {
        return $this->hasMany(Chatmessage::className(), ['idChatOnline' => 'idchatonline']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUsers()
    {
        return $this->hasOne(Users::className(), ['idusers' => 'idUsers']);
    }
}
