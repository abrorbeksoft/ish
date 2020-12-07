<?php


namespace frontend\models;


use yii\base\Model;

class ProductModel extends Model
{
    public $name;
    public $price;
    public $image1;
//    public $image2;
//    public $image3;
    public $text;
    public $category;

    public function rules()
    {
        return [
           [['name','price','text','category'] ,'required'],

        ];
    }

    public function addNew()
    {
        if ($this->validate())
        {
            $name1=$this->image1->basName.'.'.$this->image1->extension;


            $product=new Product();
            $product->name=$this->name;
            $product->price=$this->price;
            $product->image1='uploads/'.$name1;
            $product->image2='image.jpg';
            $product->image3='image.jpg';
            $product->text=$this->text;
            $product->user_id=\Yii::$app->user->identity->getId();
            $product->sub_category_id=$this->category;
            $product->status=0;
            return $product->save();

        }
        else
        {
            return null;
        }
    }

}