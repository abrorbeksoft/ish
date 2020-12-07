<?php
use yii\helpers\Url;
use \yii\helpers\Html;
?>

<div class="span9">
    <h3><a class="btn-primary btn" href="<?= Url::to(['product/create']) ?>">Create new</a></h3>
    <ul class="thumbnails">
        <?php foreach ($myposts as $product){ ?>
            <li class="span3">
                <div class="thumbnail">
                    <a  href="<?= Url::to(['product/view','id'=>$product->id]) ?> ">
                        <img src="<?= Yii ::getAlias('@imageurl') ?>/<?= $product->image1 ?>" alt=""/>
                    </a>
                    <div class="caption">
                        <h5><?= $product->name ?></h5>
                        <p><?= $product->text  ?></p>
                        <h4 style="text-align:center">
                            <a class="btn" href="<?= Url::to(['product/view','id'=>$product->id]) ?> "><i class="icon-zoom-in"></i></a>
                            <a class="btn" href="<?= Url::to(['product/view','id'=>$product->id]) ?>">Views   <?= $product->view->views ?></a>
                            <a class="btn btn-primary" href="<?= Url::to(['product/view','id'=>$product->id]) ?>">$ <?= $product->price ?></a>
                        </h4>
                    </div>
                </div>
            </li>

        <?php } ?>

    </ul>
</div>