<?php
/**
 * Created by PhpStorm.
 * User: elkirrs
 * Date: 13.02.2019
 * Time: 15:33
 */

namespace app\models;


use Codeception\Step\Comment;
use Yii;
use yii\base\Model;

class CommentForm extends  Model
{
    public  $comment;


    public function rules()
    {
        return [
            [['comment'], 'required'],
            [['comment'], 'string', 'length' => [2,500]]
        ];
    }

    public function saveComment($news_id)
    {
        $commentsnews = new Commentsnews();
        $commentsnews->textComments = $this->comment;
        $commentsnews->users_id = Yii::$app->user->id;
        $commentsnews->news_id = $news_id;
        $commentsnews->dateComments = date('Y-m-d H:i:s');


        return $commentsnews->save();
    }
}
