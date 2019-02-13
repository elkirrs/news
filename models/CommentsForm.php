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

class CommentsForm extends  Model
{
    public  $comments;


    public function rules()
    {
        return [
            [['comment'], 'required'],
            [['comment'], 'string', 'length' => [3,500]]
        ];
    }

    public function saveComment($news_id)
    {
        $comment = new Commentsnews;
        $comment->textComments = $this->comments;
        $comment->users_id = Yii::$app->user->id;
        $comment->news_id = $news_id;
        $comment->dateComments = date('Y-m-d H:i:s');


        return $comment->save();
    }
}
