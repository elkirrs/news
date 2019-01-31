<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "chatmessage".
 *
 * @property int $idChatMessage
 * @property string $textMessage
 * @property int $idChatOnline
 *
 * @property Chatonline $chatOnline
 */
class Chatmessage extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'chatmessage';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['textMessage', 'idChatOnline'], 'required'],
            [['idChatOnline'], 'integer'],
            [['textMessage'], 'string', 'max' => 1000],
            [['idChatOnline'], 'exist', 'skipOnError' => true, 'targetClass' => Chatonline::className(), 'targetAttribute' => ['idChatOnline' => 'idchatonline']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idChatMessage' => 'Id Chat Message',
            'textMessage' => 'Text Message',
            'idChatOnline' => 'Id Chat Online',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getChatOnline()
    {
        return $this->hasOne(Chatonline::className(), ['idchatonline' => 'idChatOnline']);
    }
}
