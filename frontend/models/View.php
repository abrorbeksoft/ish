<?php


namespace frontend\models;


use yii\db\ActiveRecord;

class View extends ActiveRecord
{

    public static function tableName()
    {
        return '{{views}}';
    }

    public function getProduct()
    {
        return $this->hasOne(Product::className(),['id'=>'product_id']);
    }

}