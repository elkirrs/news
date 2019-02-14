<?php

namespace app\models;

use Yii;
use yii\data\Pagination;

/**
 * This is the model class for table "category".
 *
 * @property int $id
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
            'id' => 'ID',
            'nameCategory' => 'Name Category',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getNews()
    {
        return $this->hasMany(News::className(), ['category_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUserselections()
    {
        return $this->hasMany(Userselection::className(), ['category_id' => 'id']);
    }

    public function getNewsCount()
    {
        return $this->getNews()->count();
    }

    public static function getAll()
    {
        return Category::find()->all();
    }

    public static function getNewsByCategory($id)
    {
        $query = News::find()->where(['category_id' => $id])->orderBy(['id' => SORT_DESC]);
        $count = $query->count();
        $pages = new Pagination(['totalCount' => $count, 'pageSize' => 15]);
        $news = $query->offset($pages->offset)
            ->limit($pages->limit)
            ->all();


        $data['news'] = $news;
        $data['pages'] = $pages;

        return $data;
    }
}
