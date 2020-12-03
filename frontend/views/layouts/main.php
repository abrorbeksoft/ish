<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>

    <!-- Bootstrap style -->
    <link id="callCss" rel="stylesheet" href="<?php echo Yii ::getAlias('@imageurl') ?>/bootshop/bootstrap.min.css" media="screen"/>
    <link href="<?php echo Yii ::getAlias('@imageurl') ?>/css/base.css" rel="stylesheet" media="screen"/>
    <!-- Bootstrap style responsive -->
    <link href="<?php echo Yii ::getAlias('@imageurl') ?>/css/bootstrap-responsive.min.css" rel="stylesheet"/>
    <link href="<?php echo Yii ::getAlias('@imageurl') ?>/css/font-awesome.css" rel="stylesheet" type="text/css">
    <!-- Google-code-prettify -->
    <link href="<?php echo Yii ::getAlias('@imageurl') ?>/js/google-code-prettify/prettify.css" rel="stylesheet"/>
    <!-- fav and touch icons -->
    <link rel="shortcut icon" href="<?php echo Yii ::getAlias('@imageurl') ?>/images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo Yii ::getAlias('@imageurl') ?>/images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo Yii ::getAlias('@imageurl') ?>/images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo Yii ::getAlias('@imageurl') ?>/images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="<?php echo Yii ::getAlias('@imageurl') ?>/images/ico/apple-touch-icon-57-precomposed.png">
    <style type="text/css" id="enject"></style>

</head>
<body>
<?php $this->beginBody() ?>
<div id="header">
    <div class="container">
        <div id="welcomeLine" class="row">
            <div class="span6">Welcome!<strong> User</strong></div>

        </div>
        <!-- Navbar ================================================== -->
        <div id="logoArea" class="navbar">
            <a id="smallScreen" data-target="#topMenu" data-toggle="collapse" class="btn btn-navbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </a>
            <div class="navbar-inner">
                <a class="brand" href="index.html"><img src="<?php echo Yii ::getAlias('@imageurl') ?>/images/logo.png" alt="Bootsshop"/></a>
                <form class="form-inline navbar-search" method="post" action="products.html" >
                    <input id="srchFld" class="srchTxt" type="text" />
                    <select class="srchTxt">
                        <option>All</option>
                        <option>CLOTHES </option>
                        <option>FOOD AND BEVERAGES </option>
                        <option>HEALTH & BEAUTY </option>
                        <option>SPORTS & LEISURE </option>
                        <option>BOOKS & ENTERTAINMENTS </option>
                    </select>
                    <button type="submit" id="submitButton" class="btn btn-primary">Go</button>
                </form>
                <ul id="topMenu" class="nav pull-right">
                    <li class=""><a href="<?php echo \yii\helpers\Url::to(['site/index']) ?>" >Home </a> </li>
                    <li class=""><a  href="<?php echo \yii\helpers\Url::to(['site/about']) ?>">About  </a></li>
                    <li class=""><a href="<?php echo \yii\helpers\Url::to(['site/contact']) ?>">Contact</a></li>
                    <li class="">
                        <a href="#login" role="button" data-toggle="modal" style="padding-right:0"><span class="btn btn-large btn-success">Login</span></a>
                        <div id="login" class="modal hide fade in" tabindex="-1" role="dialog" aria-labelledby="login" aria-hidden="false" >
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                <h3>Login Block</h3>
                            </div>
                            <div class="modal-body">
                                <form class="form-horizontal loginFrm">
                                    <div class="control-group">
                                        <input type="text" id="inputEmail" placeholder="Email">
                                    </div>
                                    <div class="control-group">
                                        <input type="password" id="inputPassword" placeholder="Password">
                                    </div>
                                    <div class="control-group">
                                        <label class="checkbox">
                                            <input type="checkbox"> Remember me
                                        </label>
                                    </div>
                                </form>
                                <button type="submit" class="btn btn-success">Sign in</button>
                                <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- Header End====================================================================== -->
<div id="carouselBlk">
    <div id="myCarousel" class="carousel slide">
        <div class="carousel-inner">
            <div class="item active">
                <div class="container">
                    <a href="register.html"><img style="width:100%" src="<?php echo Yii ::getAlias('@imageurl') ?>/images/carousel/1.png" alt="special offers"/></a>
                    <div class="carousel-caption">
                        <h4>Second Thumbnail label</h4>
                        <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="container">
                    <a href="register.html"><img style="width:100%" src="<?php echo Yii ::getAlias('@imageurl') ?>/images/carousel/2.png" alt=""/></a>
                    <div class="carousel-caption">
                        <h4>Second Thumbnail label</h4>
                        <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="container">
                    <a href="register.html"><img src="<?php echo Yii ::getAlias('@imageurl') ?>/images/carousel/3.png" alt=""/></a>
                    <div class="carousel-caption">
                        <h4>Second Thumbnail label</h4>
                        <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                    </div>

                </div>
            </div>
            <div class="item">
                <div class="container">
                    <a href="register.html"><img src="<?php echo Yii ::getAlias('@imageurl') ?>/images/carousel/4.png" alt=""/></a>
                    <div class="carousel-caption">
                        <h4>Second Thumbnail label</h4>
                        <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                    </div>

                </div>
            </div>
            <div class="item">
                <div class="container">
                    <a href="register.html"><img src="<?php echo Yii ::getAlias('@imageurl') ?>/images/carousel/5.png" alt=""/></a>
                    <div class="carousel-caption">
                        <h4>Second Thumbnail label</h4>
                        <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="container">
                    <a href="register.html"><img src="<?php echo Yii ::getAlias('@imageurl') ?>/images/carousel/6.png" alt=""/></a>
                    <div class="carousel-caption">
                        <h4>Second Thumbnail label</h4>
                        <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                    </div>
                </div>
            </div>
        </div>
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">&lsaquo;</a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">&rsaquo;</a>
    </div>
</div>





<!--    --><?php
//    NavBar::begin([
//        'brandLabel' => Yii::$app->name,
//        'brandUrl' => Yii::$app->homeUrl,
//        'options' => [
//            'class' => 'navbar-inverse navbar-fixed-top',
//        ],
//    ]);
//    $menuItems = [
//        ['label' => 'Home', 'url' => ['/site/index']],
//        ['label' => 'About', 'url' => ['/site/about']],
//        ['label' => 'Contact', 'url' => ['/site/contact']],
//    ];
//    if (Yii::$app->user->isGuest) {
//        $menuItems[] = ['label' => 'Signup', 'url' => ['/site/signup']];
//        $menuItems[] = ['label' => 'Login', 'url' => ['/site/login']];
//    } else {
//        $menuItems[] = '<li>'
//            . Html::beginForm(['/site/logout'], 'post')
//            . Html::submitButton(
//                'Logout (' . Yii::$app->user->identity->username . ')',
//                ['class' => 'btn btn-link logout']
//            )
//            . Html::endForm()
//            . '</li>';
//    }
//    echo Nav::widget([
//        'options' => ['class' => 'navbar-nav navbar-right'],
//        'items' => $menuItems,
//    ]);
//    NavBar::end();
//    ?>
    <div id="mainBody" >
        <div class="container">
            <?= Breadcrumbs::widget([
                'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
            ]) ?>
            <?= Alert::widget() ?>
            <?= $content ?>
        </div>
    </div>




<?php $this->endBody() ?>

<!-- Footer ================================================================== -->
<div  id="footerSection">
    <div class="container">
        <div class="row">
            <div class="span3">
                <h5>ACCOUNT</h5>
                <a href="login.html">YOUR ACCOUNT</a>
                <a href="login.html">PERSONAL INFORMATION</a>
                <a href="login.html">ADDRESSES</a>
                <a href="login.html">DISCOUNT</a>
                <a href="login.html">ORDER HISTORY</a>
            </div>
            <div class="span3">
                <h5>INFORMATION</h5>
                <a href="contact.html">CONTACT</a>
                <a href="register.html">REGISTRATION</a>
                <a href="legal_notice.html">LEGAL NOTICE</a>
                <a href="tac.html">TERMS AND CONDITIONS</a>
                <a href="faq.html">FAQ</a>
            </div>
            <div class="span3">
                <h5>OUR OFFERS</h5>
                <a href="#">NEW PRODUCTS</a>
                <a href="#">TOP SELLERS</a>
                <a href="special_offer.html">SPECIAL OFFERS</a>
                <a href="#">MANUFACTURERS</a>
                <a href="#">SUPPLIERS</a>
            </div>
            <div id="socialMedia" class="span3 pull-right">
                <h5>SOCIAL MEDIA </h5>
                <a href="#"><img width="60" height="60" src="<?php echo Yii ::getAlias('@imageurl') ?>/images/facebook.png" title="facebook" alt="facebook"/></a>
                <a href="#"><img width="60" height="60" src="<?php echo Yii ::getAlias('@imageurl') ?>/images/twitter.png" title="twitter" alt="twitter"/></a>
                <a href="#"><img width="60" height="60" src="<?php echo Yii ::getAlias('@imageurl') ?>/images/youtube.png" title="youtube" alt="youtube"/></a>
            </div>
        </div>
        <p class="pull-right">&copy; Bootshop</p>
    </div><!-- Container End -->
</div>
<!-- Placed at the end of the document so the pages load faster ============================================= -->
<script src="<?php echo Yii ::getAlias('@imageurl') ?>/js/jquery.js" type="text/javascript"></script>
<script src="<?php echo Yii ::getAlias('@imageurl') ?>/js/bootstrap.min.js" type="text/javascript"></script>
<script src="<?php echo Yii ::getAlias('@imageurl') ?>/js/google-code-prettify/prettify.js"></script>

<script src="<?php echo Yii ::getAlias('@imageurl') ?>/js/bootshop.js"></script>
<script src="<?php echo Yii ::getAlias('@imageurl') ?>/js/jquery.lightbox-0.5.js"></script>


<span id="<?php echo Yii ::getAlias('@imageurl') ?>Btn"></span>
</body>
</html>
<?php $this->endPage() ?>
