<?php


namespace frontend\controllers;

use frontend\models\CommentModel;
use frontend\models\Product;
use frontend\models\ProductModel;
use Yii;
use yii\web\Controller;

class ProductController extends Controller
{
    public function actionView()
    {
        $model=new CommentModel();
        if (Yii::$app->user->isGuest)
            return $this->goHome();

        $request=Yii::$app->request;
        $product=Product::findOne($request->get('id'));

        if ( $model->load(Yii::$app->request->post()) && $model->submit())
        {
            return $this->render('show',[
                'product'=>$product,
                'model'=>$model,

            ]);
        }


        $view=$product->view;
        $view->views=$view->views+1;
        $view->update();

        return $this->render('show',[
            'product'=>$product,
            'model'=>$model
            ]);
    }

}