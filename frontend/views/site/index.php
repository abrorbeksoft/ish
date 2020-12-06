<?php

/* @var $this yii\web\View */

$this->title = 'My Yii Application';
use frontend\widgets\SidebarWidget;
?>

<!-- Sidebar end=============================================== -->
<div class="span9">
    <h4>Latest Products </h4>
    <ul class="thumbnails">
        <?php
        foreach ($views as $view)
        {
            $str='<li class="span3"><div class="thumbnail"><a  href="';
            $str.=\yii\helpers\Url::to(['product/view','id'=>$view->id]).'"><img src="';
            $str.=Yii ::getAlias('@imageurl').'/'.$view->product->image1;
            $str.='" alt=""/></a><div class="caption"><h5>';
            $str.=$view->product->name."</h5><p>";
            $str.=$view->product->text.'</p><h4 style="text-align:center"><a class="btn" href="product_details.html">';
            $str.='<i class="icon-zoom-in"></i></a><a class="btn" href="#">Views ';
            $str.=$view->views.'</a><a class="btn btn-primary" href="#">';

            $str.=$view->product->price."</a></h4></div></div></li>";
            echo $str;
        }
        ?>

    </ul>

</div>


