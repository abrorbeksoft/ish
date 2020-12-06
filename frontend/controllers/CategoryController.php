<?php


namespace frontend\controllers;


use frontend\models\Category;
use frontend\models\SubCategory;
use yii\web\Controller;

class CategoryController extends Controller
{

    public function actionView()
    {
        $id=\Yii::$app->request->get('id');
        $category=SubCategory::findOne(['id'=>$id]);
        return $this->render('product',[
            'category'=>$category
        ]);
    }

}