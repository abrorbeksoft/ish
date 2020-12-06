<?php


namespace frontend\models;


use yii\base\Model;

class CommentModel extends Model
{
    public $text;
    public $id;

    public function rules()
    {
        return [
            [['id','text'],'required'],
            ['text','trim'],
        ];
    }

    public function submit()
    {
        $comment=new Comment();
        $comment->text=$this->text;
        $comment->user_id=\Yii::$app->user->identity->getId();
        $comment->product_id=$this->id;
        $comment->save();
    }

}