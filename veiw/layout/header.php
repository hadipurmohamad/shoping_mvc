<?php ob_start(); ?>
<!DOCTYPE html>
<!--[if IE 8]> 				 <html class="no-js lt-ie9" lang="en" > <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="en">
<!--<![endif]-->

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width" />
    <title>سایت فروشگاهی</title>

    <!-- app.css if the Grid file (Contains grid style only) -->
    <link rel="stylesheet" type="text/css" href="public/defualt/stylesheets/app.css" />
    <!-- Droid Sans From Google -->
    <link href='http://fonts.googleapis.com/css?family=Droid+Sans:400,700' rel='stylesheet' type='text/css' />
    <!-- Main stylesheet -->
    <link rel="stylesheet" type="text/css" href="public/defualt/stylesheets/base.css" />
    <!-- Icon Font (icomoon.io) -->
    <link rel="stylesheet" type="text/css" href="public/defualt/fonts/style.css" />
    <!-- CSS3 Animation Lib -->
    <link rel="stylesheet" type="text/css" href="public/defualt/stylesheets/animations.css" />
    <!-- Flexslider -->
    <link rel="stylesheet" type="text/css" href="public/defualt/stylesheets/slider.css" media="all" />
    <!-- Jquery Selectric -->
    <link rel="stylesheet" type="text/css" href="public/defualt/stylesheets/selectric.css" />
    <!-- Owl Carousel Assets -->
    <link href="public/defualt/owl-carousel/owl.carousel.css" rel="stylesheet" />
    <link href="public/defualt/owl-carousel/owl.theme.css" rel="stylesheet" />

    <script src="public/defualt/javascripts/vendor/custom.modernizr.js"></script>

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>

<body>

    <!-- Header -->
    <div class="header">
        <!-- Header top -->
        <div class="headertop">

            <!-- Content Row -->
            <div class="row">

                <!-- Welcome Txt -->
                <div class="small-12 medium-5 large-5 welcome-guest-text columns">
                    <?php if (isset($_SESSION['user_name'])) {
                       echo "عزیز".$_SESSION['user_name']."سلام";
                    }else
                    {
                        echo "سلام کاربر میهمان";
                    }
                    ?>
            </div>
                <!-- End Welcome Txt -->
                <!-- Currency -->
                <div class="small-8 text-center small-centered large-uncentered medium-uncentered large-2 large-offset-1 medium-2 columns">
                    <div class="currency"><a href="#">$</a></div>
                    <div class="currency"><a href="#" title="Sterling Pound">£</a></div>
                    <div class="currency"><a href="#" title="Euro">€</a></div>
                </div>

                <!-- Topcart -->
                <div class="small-12 medium-5 large-4 left topcartbg columns">
                    <!-- Carticon -->
                    <div class="topcart-icon text-center">
                        <i class="icon-cart2"></i>
                    </div>
                    <!-- End Carticon -->

                    <!-- Topcart Text -->
                    <div class="topcart-text">
                        سبد خرید (<?php 
               if (isset($_SESSION['user_id'])) 
            {
                $user_id= $_SESSION['user_id'];
                $bascket = new bascket();
                $bascketList=$bascket->bascket_cart_search($user_id);
                echo  count($bascketList);
           
            } ?>)
                    </div>
                    <!-- End Topcart Text -->
                    <!-- Topcart Arrow Down -->
                    <div class="topcart-arrow-down">
                        <a href="#">
                            <i class="icon-arrow-down"></i>
                        </a>
                    </div>
                    <!-- End Topcart Arrow Down -->

                    <!-- Cart items -->
                    <div class="small-12 medium-12 large-4 cart-dropdown">
                     <?php foreach ($bascketList as $key => $value):?>   <!-- Item List -->
                        <div class="cart-item-list">
                            <!-- Thumb -->
                            <div class="cart-item-thumb right">
                                <img style="width:90px;height:90px;" src="admin/temp_image/<?php echo $value['image1'];?> " alt="Cart product 1" />
                            </div>
                            <!-- End thumb -->
                            <!-- Content -->
                            <div class="cart-item-content">
                                <!-- {product name} -->
                                <div class="cart-item-title">
                                    <a href="index.php?c=product&a=details&procat_id=<?php echo $value['product_id'];?>">
                                        <?php echo $value['tittle'];?>
                                     </a>
                                </div>
                                <!-- PRice -->
                                <div class="cart-item-price">
                                    $<?php echo number_format($value['price']);?>
                                </div>
                                <!-- Remove -->
                                <!-- Quanitity -->
                                <div class="cart-item-quantity">
                                    تعداد: (1)
                                </div>
                            </div>
                            <br>
                            <br>
                            <br>
                            <a href="index.php?c=bascket&a=delete&delete_id=<?php echo $value['id'];?>" class="cart-remove">X</a>
                            <!-- End Content -->

                            <!-- Clearing -->
                            <div class="clearing"></div>

                        </div>
                     <?php endforeach; ?>

                        <div class="small-12 large-12 text-center medium-12 columns cart-total">
                            مجموع:<?php 
                                 $total=0;
                                 foreach ($bascketList as $key => $value) {
                                 $total+=$value['price'];
                               }
                                    echo number_format($total);
                                  ?> $

                        </div>
                        <a href="index.php?c=bascket&a=list" class="small-12 large-12 btn btn-3 btn-3a icon-arrow-left">
                            سبد خرید</a>
                        <button class="small-12 large-12 btn btn-3 btn-3a icon-lock">بررسی</button>

                    </div>
                    <!-- End Cart item -->
                </div>
                <!-- End Topcart -->

            </div>
            <!-- End Content Row -->

        </div>
        <!-- End Header top -->

        <!-- Header Bottom -->
        <div class="headerbottom">
            <!-- Content Row -->
            <div class="row headerbottomrow">

                <!-- Logo -->
                <div class="small-12 medium-3 large-2 small-centered large-uncentered text-center logo columns">
                    <a href="index.php" title="nexx Homepage"><img src="public/defualt/img/logo.png" alt="Nexx Store" /></a>
                </div>
                <!-- End Logo -->
                <!-- Menu Icon For Mobile -->
                <div class="menu-icon"><i class="icon-menu"></i>

                </div>

                <!-- Main Navigation -->
                <div class="small-12 medium-12 large-7 mainnav columns">

                    <ul class="navigation">
                        <li><a href="index.php">صفحه اصلی</a></li>
                        <?php foreach ($res as $key => $value) : ?>

                            <li>

                                <a href="#"><?php echo $value['tittle'] ?></a>
                                <!-- dropdown -->
                                <div class="dropdown-menu">
                                    <!-- Dropdown Links -->
                                    <?php foreach ($res2 as $key => $value2) : ?>
                                        <?php if ($value['id'] == $value2['chid']) : ?>
                                            <ul class="dropdown">
                                                <li><a href="index.php?c=product&a=list&procat_id=<?php echo $value2['id'] ?>" title="Product Grid"><?php echo $value2['tittle'] ?></a></li>

                                            </ul>
                                        <?php endif; ?>
                                    <?php endforeach; ?>
                                    <!-- End Dropdown Links -->
                                </div>
                                <!-- End dropdown -->

                            </li>
                        <?php endforeach; ?>
                    </ul>

                </div>
                <!-- End Main Navigation -->

                <!-- Searchbox -->
                <div class="small-12 medium-12 large-3 searchinputholder columns">

                    <input type="text" class="searchinput" placeholder="محصولات جستجو" />

                </div>
                <!-- End Searchbox -->

                <!-- Sub Navigation -->
                <div class="subnavigation">
                    <ul class="subnav">
                        <li><a href="index.php?c=user&a=register">
                                ثبت نام</a></li>
                        <li><a href="index.php?c=user&a=login">ورود </a></li>
                        <li><a href="#">علاقه مندی ها (10)</a></li>
                        <li><a href="#">
                                حساب من</a></li>
                        <li><a href="#">بررسی</a></li>
                    </ul>
                </div>
                <!-- End Sub Navigation -->

            </div>
            <!-- End Content Row -->

        </div>
        <!-- End Header Bottom -->
    </div>
    <!-- End header -->