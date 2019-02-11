<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "commentsnews".
 *
 * @property int $id
 * @property string $textComments
 * @property string $dateComments
 * @property int $news_id
 * @property int $users_id
 *
 * @property News $news
 * @property User $users
 */
class Commentsnews extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'commentsnews';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['textComments', 'dateComments', 'news_id', 'users_id'], 'required'],
            [['dateComments'], 'safe'],
            [['news_id', 'users_id'], 'integer'],
            [['textComments'], 'string', 'max' => 1000],
            [['news_id'], 'exist', 'skipOnError' => true, 'targetClass' => News::className(), 'targetAttribute' => ['news_id' => 'id']],
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
            'textComments' => 'Text Comments',
            'dateComments' => 'Date Comments',
            'news_id' => 'News ID',
            'users_id' => 'Users ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getNews()
    {
        return $this->hasOne(News::className(), ['id' => 'news_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUsers()
    {
        return $this->hasOne(User::className(), ['id' => 'users_id']);
    }
}
