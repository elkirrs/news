<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "commentstext".
 *
 * @property int $idCommentsText
 * @property string $commentsText
 * @property int $idCommentsNews
 *
 * @property Commentsnews $commentsNews
 */
class Commentstext extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'commentstext';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['commentsText', 'idCommentsNews'], 'required'],
            [['idCommentsNews'], 'integer'],
            [['commentsText'], 'string', 'max' => 1000],
            [['idCommentsNews'], 'exist', 'skipOnError' => true, 'targetClass' => Commentsnews::className(), 'targetAttribute' => ['idCommentsNews' => 'idcommentsnews']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idCommentsText' => 'Id Comments Text',
            'commentsText' => 'Comments Text',
            'idCommentsNews' => 'Id Comments News',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCommentsNews()
    {
        return $this->hasOne(Commentsnews::className(), ['idcommentsnews' => 'idCommentsNews']);
    }
}
