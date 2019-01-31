<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "userselection".
 *
 * @property int $idUserSelection
 * @property int $idUsers
 * @property int $idCategory
 *
 * @property Category $category
 * @property Users $users
 */
class Userselection extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'userselection';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['idUsers', 'idCategory'], 'required'],
            [['idUsers', 'idCategory'], 'integer'],
            [['idCategory'], 'exist', 'skipOnError' => true, 'targetClass' => Category::className(), 'targetAttribute' => ['idCategory' => 'idcategory']],
            [['idUsers'], 'exist', 'skipOnError' => true, 'targetClass' => Users::className(), 'targetAttribute' => ['idUsers' => 'idusers']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idUserSelection' => 'Id User Selection',
            'idUsers' => 'Id Users',
            'idCategory' => 'Id Category',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCategory()
    {
        return $this->hasOne(Category::className(), ['idcategory' => 'idCategory']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUsers()
    {
        return $this->hasOne(Users::className(), ['idusers' => 'idUsers']);
    }
}
