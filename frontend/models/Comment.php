<?php


namespace frontend\models;


use common\models\User;
use yii\base\Model;
use yii\db\ActiveRecord;

class Comment extends ActiveRecord
{

    public static function tableName()
    {
        return '{{comments}}';
    }

    public function getUser()
    {
        return $this->hasOne(User::className(),['id'=>'user_id']);
    }
}