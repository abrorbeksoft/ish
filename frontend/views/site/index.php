<?php

/* @var $this yii\web\View */

$this->title = 'My Yii Application';
use frontend\widgets\SidebarWidget;
?>

<div class="row">
    <!-- Sidebar ================================================== -->
    <div id="sidebar" class="span3">
        <div class="well well-small">
            <a id="myCart" href="product_summary.html">
                <img src="<?php echo Yii ::getAlias('@imageurl') ?>/images/ico-cart.png" alt="cart">
                3 Items in your cart<span class="badge badge-warning pull-right">$155.00</span>
            </a>
        </div>

    <?= SidebarWidget::widget(['categories'=>$categories])  ?>

        <div class="thumbnail">
            <img src="<?php echo Yii ::getAlias('@imageurl') ?>/images/products/panasonic.jpg" alt="Bootshop panasonoc New camera"/>
            <div class="caption">
                <h5>Panasonic</h5>
                <h4 style="text-align:center"><a class="btn" href="product_details.html"> <i class="icon-zoom-in"></i></a> <a class="btn" href="#">Add to <i class="icon-shopping-cart"></i></a> <a class="btn btn-primary" href="#">$222.00</a></h4>
            </div>
        </div><br/>
        <div class="thumbnail">
            <img src="<?php echo Yii ::getAlias('@imageurl') ?>/images/products/kindle.png" title="Bootshop New Kindel" alt="Bootshop Kindel">
            <div class="caption">
                <h5>Kindle</h5>
                <h4 style="text-align:center"><a class="btn" href="product_details.html"> <i class="icon-zoom-in"></i></a> <a class="btn" href="#">Add to <i class="icon-shopping-cart"></i></a> <a class="btn btn-primary" href="#">$222.00</a></h4>
            </div>
        </div><br/>
        <div class="thumbnail">
            <img src="<?php echo Yii ::getAlias('@imageurl') ?>/images/payment_methods.png" title="Bootshop Payment Methods" alt="Payments Methods">
            <div class="caption">
                <h5>Payment Methods</h5>
            </div>
        </div>
    </div>



    <!-- Sidebar end=============================================== -->
    <div class="span9">
        <div class="well well-small">
            <h4>Featured Products <small class="pull-right">200+ featured products</small></h4>
            <div class="row-fluid">
                <div id="featured" class="carousel slide">
                    <div class="carousel-inner">
                        <div class="item active">
                            <ul class="thumbnails">
                                <li class="span3">
                                    <div class="thumbnail">
                                        <i class="tag"></i>
                                        <a href="product_details.html"><img src="<?php echo Yii ::getAlias('@imageurl') ?>/images/products/b1.jpg" alt=""></a>
                                        <div class="caption">
                                            <h5>Product name</h5>
                                            <h4><a class="btn" href="product_details.html">VIEW</a> <span class="pull-right">$222.00</span></h4>
                                        </div>
                                    </div>
                                </li>
                                <li class="span3">
                                    <div class="thumbnail">
                                        <i class="tag"></i>
                                        <a href="product_details.html"><img src="<?php echo Yii ::getAlias('@imageurl') ?>/images/products/b2.jpg" alt=""></a>
                                        <div class="caption">
                                            <h5>Product name</h5>
                                            <h4><a class="btn" href="product_details.html">VIEW</a> <span class="pull-right">$222.00</span></h4>
                                        </div>
                                    </div>
                                </li>
                                <li class="span3">
                                    <div class="thumbnail">
                                        <i class="tag"></i>
                                        <a href="product_details.html"><img src="<?php echo Yii ::getAlias('@imageurl') ?>/images/products/b3.jpg" alt=""></a>
                                        <div class="caption">
                                            <h5>Product name</h5>
                                            <h4><a class="btn" href="product_details.html">VIEW</a> <span class="pull-right">$222.00</span></h4>
                                        </div>
                                    </div>
                                </li>
                                <li class="span3">
                                    <div class="thumbnail">
                                        <i class="tag"></i>
                                        <a href="product_details.html"><img src="<?php echo Yii ::getAlias('@imageurl') ?>/images/products/b4.jpg" alt=""></a>
                                        <div class="caption">
                                            <h5>Product name</h5>
                                            <h4><a class="btn" href="product_details.html">VIEW</a> <span class="pull-right">$222.00</span></h4>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="item">
                            <ul class="thumbnails">
                                <li class="span3">
                                    <div class="thumbnail">
                                        <i class="tag"></i>
                                        <a href="product_details.html"><img src="<?php echo Yii ::getAlias('@imageurl') ?>/images/products/5.jpg" alt=""></a>
                                        <div class="caption">
                                            <h5>Product name</h5>
                                            <h4><a class="btn" href="product_details.html">VIEW</a> <span class="pull-right">$222.00</span></h4>
                                        </div>
                                    </div>
                                </li>
                                <li class="span3">
                                    <div class="thumbnail">
                                        <i class="tag"></i>
                                        <a href="product_details.html"><img src="<?php echo Yii ::getAlias('@imageurl') ?>/images/products/6.jpg" alt=""></a>
                                        <div class="caption">
                                            <h5>Product name</h5>
                                            <h4><a class="btn" href="product_details.html">VIEW</a> <span class="pull-right">$222.00</span></h4>
                                        </div>
                                    </div>
                                </li>
                                <li class="span3">
                                    <div class="thumbnail">
                                        <a href="product_details.html"><img src="<?php echo Yii ::getAlias('@imageurl') ?>/images/products/7.jpg" alt=""></a>
                                        <div class="caption">
                                            <h5>Product name</h5>
                                            <h4><a class="btn" href="product_details.html">VIEW</a> <span class="pull-right">$222.00</span></h4>
                                        </div>
                                    </div>
                                </li>
                                <li class="span3">
                                    <div class="thumbnail">
                                        <a href="product_details.html"><img src="<?php echo Yii ::getAlias('@imageurl') ?>/images/products/8.jpg" alt=""></a>
                                        <div class="caption">
                                            <h5>Product name</h5>
                                            <h4><a class="btn" href="product_details.html">VIEW</a> <span class="pull-right">$222.00</span></h4>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="item">
                            <ul class="thumbnails">
                                <li class="span3">
                                    <div class="thumbnail">
                                        <a href="product_details.html"><img src="<?php echo Yii ::getAlias('@imageurl') ?>/images/products/9.jpg" alt=""></a>
                                        <div class="caption">
                                            <h5>Product name</h5>
                                            <h4><a class="btn" href="product_details.html">VIEW</a> <span class="pull-right">$222.00</span></h4>
                                        </div>
                                    </div>
                                </li>
                                <li class="span3">
                                    <div class="thumbnail">
                                        <a href="product_details.html"><img src="<?php echo Yii ::getAlias('@imageurl') ?>/images/products/10.jpg" alt=""></a>
                                        <div class="caption">
                                            <h5>Product name</h5>
                                            <h4><a class="btn" href="product_details.html">VIEW</a> <span class="pull-right">$222.00</span></h4>
                                        </div>
                                    </div>
                                </li>
                                <li class="span3">
                                    <div class="thumbnail">
                                        <a href="product_details.html"><img src="<?php echo Yii ::getAlias('@imageurl') ?>/images/products/11.jpg" alt=""></a>
                                        <div class="caption">
                                            <h5>Product name</h5>
                                            <h4><a class="btn" href="product_details.html">VIEW</a> <span class="pull-right">$222.00</span></h4>
                                        </div>
                                    </div>
                                </li>
                                <li class="span3">
                                    <div class="thumbnail">
                                        <a href="product_details.html"><img src="<?php echo Yii ::getAlias('@imageurl') ?>/images/products/1.jpg" alt=""></a>
                                        <div class="caption">
                                            <h5>Product name</h5>
                                            <h4><a class="btn" href="product_details.html">VIEW</a> <span class="pull-right">$222.00</span></h4>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="item">
                            <ul class="thumbnails">
                                <li class="span3">
                                    <div class="thumbnail">
                                        <a href="product_details.html"><img src="<?php echo Yii ::getAlias('@imageurl') ?>/images/products/2.jpg" alt=""></a>
                                        <div class="caption">
                                            <h5>Product name</h5>
                                            <h4><a class="btn" href="product_details.html">VIEW</a> <span class="pull-right">$222.00</span></h4>
                                        </div>
                                    </div>
                                </li>
                                <li class="span3">
                                    <div class="thumbnail">
                                        <a href="product_details.html"><img src="<?php echo Yii ::getAlias('@imageurl') ?>/images/products/3.jpg" alt=""></a>
                                        <div class="caption">
                                            <h5>Product name</h5>
                                            <h4><a class="btn" href="product_details.html">VIEW</a> <span class="pull-right">$222.00</span></h4>
                                        </div>
                                    </div>
                                </li>
                                <li class="span3">
                                    <div class="thumbnail">
                                        <a href="product_details.html"><img src="<?php echo Yii ::getAlias('@imageurl') ?>/images/products/4.jpg" alt=""></a>
                                        <div class="caption">
                                            <h5>Product name</h5>
                                            <h4><a class="btn" href="product_details.html">VIEW</a> <span class="pull-right">$222.00</span></h4>
                                        </div>
                                    </div>
                                </li>
                                <li class="span3">
                                    <div class="thumbnail">
                                        <a href="product_details.html"><img src="<?php echo Yii ::getAlias('@imageurl') ?>/images/products/5.jpg" alt=""></a>
                                        <div class="caption">
                                            <h5>Product name</h5>
                                            <h4><a class="btn" href="product_details.html">VIEW</a> <span class="pull-right">$222.00</span></h4>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <a class="left carousel-control" href="#featured" data-slide="prev">‹</a>
                    <a class="right carousel-control" href="#featured" data-slide="next">›</a>
                </div>
            </div>
        </div>
        <h4>Latest Products </h4>
        <ul class="thumbnails">
            <li class="span3">
                <div class="thumbnail">
                    <a  href="product_details.html"><img src="<?php echo Yii ::getAlias('@imageurl') ?>/images/products/6.jpg" alt=""/></a>
                    <div class="caption">
                        <h5>Product name</h5>
                        <p>
                            Lorem Ipsum is simply dummy text.
                        </p>

                        <h4 style="text-align:center"><a class="btn" href="product_details.html"> <i class="icon-zoom-in"></i></a> <a class="btn" href="#">Add to <i class="icon-shopping-cart"></i></a> <a class="btn btn-primary" href="#">$222.00</a></h4>
                    </div>
                </div>
            </li>
            <li class="span3">
                <div class="thumbnail">
                    <a  href="product_details.html"><img src="<?php echo Yii ::getAlias('@imageurl') ?>/images/products/7.jpg" alt=""/></a>
                    <div class="caption">
                        <h5>Product name</h5>
                        <p>
                            Lorem Ipsum is simply dummy text.
                        </p>
                        <h4 style="text-align:center"><a class="btn" href="product_details.html"> <i class="icon-zoom-in"></i></a> <a class="btn" href="#">Add to <i class="icon-shopping-cart"></i></a> <a class="btn btn-primary" href="#">$222.00</a></h4>
                    </div>
                </div>
            </li>
            <li class="span3">
                <div class="thumbnail">
                    <a  href="product_details.html"><img src="<?php echo Yii ::getAlias('@imageurl') ?>/images/products/8.jpg" alt=""/></a>
                    <div class="caption">
                        <h5>Product name</h5>
                        <p>
                            Lorem Ipsum is simply dummy text.
                        </p>
                        <h4 style="text-align:center"><a class="btn" href="product_details.html"> <i class="icon-zoom-in"></i></a> <a class="btn" href="#">Add to <i class="icon-shopping-cart"></i></a> <a class="btn btn-primary" href="#">$222.00</a></h4>
                    </div>
                </div>
            </li>
            <li class="span3">
                <div class="thumbnail">
                    <a  href="product_details.html"><img src="<?php echo Yii ::getAlias('@imageurl') ?>/images/products/9.jpg" alt=""/></a>
                    <div class="caption">
                        <h5>Product name</h5>
                        <p>
                            Lorem Ipsum is simply dummy text.
                        </p>
                        <h4 style="text-align:center"><a class="btn" href="product_details.html"> <i class="icon-zoom-in"></i></a> <a class="btn" href="#">Add to <i class="icon-shopping-cart"></i></a> <a class="btn btn-primary" href="#">$222.00</a></h4>
                    </div>
                </div>
            </li>
            <li class="span3">
                <div class="thumbnail">
                    <a  href="product_details.html"><img src="<?php echo Yii ::getAlias('@imageurl') ?>/images/products/10.jpg" alt=""/></a>
                    <div class="caption">
                        <h5>Product name</h5>
                        <p>
                            Lorem Ipsum is simply dummy text.
                        </p>
                        <h4 style="text-align:center"><a class="btn" href="product_details.html"> <i class="icon-zoom-in"></i></a> <a class="btn" href="#">Add to <i class="icon-shopping-cart"></i></a> <a class="btn btn-primary" href="#">$222.00</a></h4>
                    </div>
                </div>
            </li>
            <li class="span3">
                <div class="thumbnail">
                    <a  href="product_details.html"><img src="<?php echo Yii ::getAlias('@imageurl') ?>/images/products/11.jpg" alt=""/></a>
                    <div class="caption">
                        <h5>Product name</h5>
                        <p>
                            Lorem Ipsum is simply dummy text.
                        </p>
                        <h4 style="text-align:center"><a class="btn" href="product_details.html"> <i class="icon-zoom-in"></i></a> <a class="btn" href="#">Add to <i class="icon-shopping-cart"></i></a> <a class="btn btn-primary" href="#">$222.00</a></h4>
                    </div>
                </div>
            </li>
        </ul>

    </div>
</div>




