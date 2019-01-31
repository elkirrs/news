<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "category".
 *
 * @property int $idCategory
 * @property string $nameCategory
 *
 * @property News[] $news
 * @property Userselection[] $userselections
 */
class Category extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'category';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nameCategory'], 'required'],
            [['nameCategory'], 'string', 'max' => 45],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idCategory' => 'Id Category',
            'nameCategory' => 'Name Category',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getNews()
    {
        return $this->hasMany(News::className(), ['idCategory' => 'idcategory']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUserselections()
    {
        return $this->hasMany(Userselection::className(), ['idCategory' => 'idcategory']);
    }
}
