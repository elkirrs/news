<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "news".
 *
 * @property int $idNews
 * @property string $nameNews
 * @property string $annotatio
 * @property string $contentNews
 * @property string $files
 * @property string $dateNews
 * @property int $idCategory
 *
 * @property Commentsnews[] $commentsnews
 * @property Category $category
 */
class News extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'news';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nameNews', 'annotatio', 'contentNews', 'files', 'idCategory'], 'required'],
            [['contentNews', 'files'], 'string'],
            [['dateNews'], 'date', 'format' => 'php:Y-m-d'],
            [['dateNews'], 'default', 'value' => date('Y-m-d')],
            [['idCategory'], 'integer'],
            [['nameNews'], 'string', 'max' => 500],
            [['annotatio'], 'string', 'max' => 1000],
            [['idCategory'], 'exist', 'skipOnError' => true, 'targetClass' => Category::className(), 'targetAttribute' => ['idCategory' => 'idcategory']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idNews' => 'Id News',
            'nameNews' => 'Name News',
            'annotatio' => 'Annotatio',
            'contentNews' => 'Content News',
            'files' => 'Files',
            'dateNews' => 'Date News',
            'idCategory' => 'Id Category',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCommentsnews()
    {
        return $this->hasMany(Commentsnews::className(), ['idNews' => 'idnews']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCategory()
    {
        return $this->hasOne(Category::className(), ['idcategory' => 'idCategory']);
    }
}
