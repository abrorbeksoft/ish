<?php


namespace frontend\models;


use common\models\User;
use yii\db\ActiveRecord;

class Product extends ActiveRecord
{
    public static function tableName()
    {
        return '{{product}}';
    }

    public function getView()
    {
        return $this->hasOne(View::className(),['product_id'=>'id']);
    }

    public function getUser()
    {
        return $this->hasOne(User::className(),['id'=>'user_id']);
    }

    public function getComments()
    {
        return $this->hasMany(Comment::className(),['product_id'=>'id']);
    }
}