<?php


namespace frontend\models;


use yii\db\ActiveRecord;

class SubCategory extends ActiveRecord
{
    public static function tableName()
    {
        return '{{sub_category}}';
    }

    public function getCategory()
    {
        return $this->hasOne(Category::className(),['id'=>'category_id']);
    }
}