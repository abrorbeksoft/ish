<?php

use yii\helpers\Html;
?>

<!-- Sidebar end=============================================== -->
<div class="span9">
        <ul class="breadcrumb">
            <li><a href="index.html">Home</a> <span class="divider">/</span></li>
            <li><a href="products.html">Products</a> <span class="divider">/</span></li>
            <li class="active">product Details</li>
        </ul>
        <div class="row">
            <div id="gallery" class="span3">
                <a href="<?= Html::encode(Yii ::getAlias('@imageurl'))?>/<?= Html::encode($product->image1) ?>" title="Fujifilm FinePix S2950 Digital Camera">
                    <img src="<?= Html::encode(Yii ::getAlias('@imageurl'))?>/<?= Html::encode($product->image1) ?>" style="width:100%" alt="Fujifilm FinePix S2950 Digital Camera"/>
                </a>
                <div id="differentview" class="moreOptopm carousel slide">
                    <div class="carousel-inner">
                        <div class="item active">
                            <a href="<?= Html::encode(Yii ::getAlias('@imageurl'))?>/<?= Html::encode($product->image1) ?>">
                                <img style="width:29%" src="<?= Html::encode(Yii ::getAlias('@imageurl'))?>/<?= Html::encode($product->image1) ?>" alt=""/></a>
                            <a href="<?= Html::encode(Yii ::getAlias('@imageurl'))?>/<?= Html::encode($product->image2) ?>">
                                <img style="width:29%" src="<?= Html::encode(Yii ::getAlias('@imageurl'))?>/<?= Html::encode($product->image2) ?>" alt=""/></a>
                            <a href="<?= Html::encode(Yii ::getAlias('@imageurl'))?>/<?= Html::encode($product->image3) ?>" >
                                <img style="width:29%" src="<?= Html::encode(Yii ::getAlias('@imageurl'))?>/<?= Html::encode($product->image3) ?>" alt=""/></a>
                        </div>
                        <div class="item">
                            <a href="<?= Html::encode(Yii ::getAlias('@imageurl'))?>/<?= Html::encode($product->image1) ?>" >
                                <img style="width:29%" src="<?= Html::encode(Yii ::getAlias('@imageurl'))?>/<?= Html::encode($product->image1) ?>" alt=""/></a>
                            <a href="<?= Html::encode(Yii ::getAlias('@imageurl'))?>/<?= Html::encode($product->image2) ?>">
                                <img style="width:29%" src="<?= Html::encode(Yii ::getAlias('@imageurl'))?>/<?= Html::encode($product->image2) ?>" alt=""/></a>
                            <a href="<?= Html::encode(Yii ::getAlias('@imageurl'))?>/<?= Html::encode($product->image3) ?>">
                                <img style="width:29%" src="<?= Html::encode(Yii ::getAlias('@imageurl'))?>/<?= Html::encode($product->image3) ?>" alt=""/></a>
                        </div>
                    </div>
                </div>

            </div>
            <div class="span6">
                <h3><?= $product->name ?> </h3>
                <small>- (14MP, 18x Optical Zoom) 3-inch LCD</small>
                <hr class="soft"/>
                <form class="form-horizontal qtyFrm">
                    <div class="control-group">
                        <label class="control-label"><span>$ <?= $product->price ?></span></label>
                    </div>
                </form>

                <hr class="soft clr"/>
                <p>
                 <span style="font-size: 19px; margin-right: 10px"><b>Owner</b> <?= Html::encode($product->user->username) ?></span>
                    <span style="font-size: 14px"><?= Html::encode($product->user->phone) ?></span>
                </p>

                <br class="clr"/>
                <a href="#" name="detail"></a>
                <hr class="soft"/>
            </div>
            <div class="span9">
                <?php $form=\yii\widgets\ActiveForm::begin(['id'=>'comment form']) ?>
                <?= $form->field($model,'text')->textarea() ?>
                <?= $form->field($model,'id')->hiddenInput( ['value'=>$product->id])->label(false) ?>

                <div class="form-group">
                    <?= Html::submitButton('comment ',['class'=>'btn btn-primary']) ?>
                </div>
                <?php \yii\widgets\ActiveForm::end() ?>

                <h3>Comments</h3>
                <div >
                    <?php foreach ($product->comments as $comment){ ?>
                        <div style="display: flex">
                            <div class="span1">
                                <img style="width: 70px; height: 70px; border-radius: 50%" class="w-100" src="<?= Yii::getAlias('@imageurl') ?>/<?=   $comment->user->image ?>" alt="">
                                <h5 style="text-align: center" > <?= $comment->user->username ?></h5>
                            </div>
                            <div class="span9">
                                <div>
                                    <p><?= $comment->text ?></p>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </div>

            </div>

        </div>
    </div>

