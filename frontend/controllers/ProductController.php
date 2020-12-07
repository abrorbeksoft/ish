<?php


namespace frontend\controllers;

use frontend\models\CommentModel;
use frontend\models\Product;
use frontend\models\ProductModel;
use frontend\models\SubCategory;
use phpDocumentor\Reflection\Element;
use Yii;
use yii\web\Controller;
use yii\web\UploadedFile;

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

    public function actionCreate()
    {
        $model=new ProductModel();
        $model->image1=UploadedFile::getInstance($model,'image1');

        $request=Yii::$app->request;
        if ($model->load(Yii::$app->request->post()))
        {

            if (!$model->addNew())
            {
                print_r($model->getErrors());
            }
            else
                Yii::$app->getSession()->setFlash('success','Saved successfully');


        }
        $subCategory=SubCategory::find()->select('name')->indexBy('id')->column();
        return $this->render('create',[
            'model'=>$model,
            'category'=>$subCategory
        ]);
    }

}