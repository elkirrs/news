<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "commentsnews".
 *
 * @property int $idCommentsNews
 * @property string $dateComments
 * @property int $idUsers
 * @property int $idNews
 *
 * @property News $news
 * @property Users $users
 * @property Commentstext[] $commentstexts
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
            [['dateComments', 'idUsers', 'idNews'], 'required'],
            [['dateComments'], 'safe'],
            [['idUsers', 'idNews'], 'integer'],
            [['idNews'], 'exist', 'skipOnError' => true, 'targetClass' => News::className(), 'targetAttribute' => ['idNews' => 'idnews']],
            [['idUsers'], 'exist', 'skipOnError' => true, 'targetClass' => Users::className(), 'targetAttribute' => ['idUsers' => 'idusers']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idCommentsNews' => 'Id Comments News',
            'dateComments' => 'Date Comments',
            'idUsers' => 'Id Users',
            'idNews' => 'Id News',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getNews()
    {
        return $this->hasOne(News::className(), ['idnews' => 'idNews']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUsers()
    {
        return $this->hasOne(Users::className(), ['idusers' => 'idUsers']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCommentstexts()
    {
        return $this->hasMany(Commentstext::className(), ['idCommentsNews' => 'idcommentsnews']);
    }
}
