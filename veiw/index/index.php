<!-- Main Banners -->
<div class="mainbanner">

    <!-- SLIDER -->
    <div class="slider_container">
        <div class="flexslider">
            <ul class="slides">
                <!-- Slide 1 -->
                <li>
                    <a href="index.php?c=product&a=details&procat_id=<?php echo $productlist[0]['id']; ?>"><img style="width:800px;height:400px;margin:0 auto;" src="<?php echo "admin/temp_image/" . $productlist[0]['image1']; ?>" alt="" title="" /></a>
                    <!-- Slide Caption -->
                    <div class="flex-caption slideDown">
                        <div class="caption-heading">
                            آخرین تلوزیون مجموعه
                        </div>
                        <!-- Clear  -->
                        <div class="clearing"></div>
                        <div class="caption-sub-heading">
                            <?php echo  $productlist[0]['tittle']; ?>
                        </div>
                        <!-- Button -->
                        <div class="clearing"></div>
                        <div class="main-banner-button">
                            <a href="#">فهرست مجموعه</a>
                        </div>

                    </div>
                </li>
                <li>
                    <a href="index.php?c=product&a=details&procat_id=<?php echo  $productlist[1]['id']; ?>"><img style="width:800px;height:400px;margin:0 auto;" src="<?php echo "admin/temp_image/" . $productlist[1]['image1']; ?>" alt="" title="" /></a>
                    <!-- Slide Caption -->
                    <div class="flex-caption slideDown">
                        <div class="caption-heading">
                            آخرین تلوزیون مجموعه
                        </div>
                        <!-- Clear  -->
                        <div class="clearing"></div>
                        <div class="caption-sub-heading">
                            <?php echo  $productlist[1]['tittle']; ?>
                        </div>
                        <!-- Button -->
                        <div class="clearing"></div>
                        <div class="main-banner-button">
                            <a href="#">فهرست مجموعه</a>
                        </div>

                    </div>
                </li>
                <!-- Slide 2 -->

                <!-- End slide 2 -->

            </ul>
        </div>
    </div>
    <!-- End Slider -->

</div>
<!-- End Main Banners -->

<!-- Horizontal Border -->
<div class="contentborder">

</div>
<!-- End Horizontal Border -->

<!-- Advertisements -->
<div class="adbg">
    <!-- Content Row -->
    <div class="row">

        <!-- Ad 1 -->
        <div class="small-9 medium-4 medium-uncentered small-centered large-uncentered large-4 columns">
            <img src="public/defualt/img/ads/1.jpg" alt="ad1" />
        </div>
        <!-- End Ad 1 -->

        <!-- Ad 2 -->
        <div class="small-9 medium-4 medium-uncentered small-centered large-uncentered large-4 columns">
            <img src="public/defualt/img/ads/2.jpg" alt="ad2" />
        </div>
        <!-- End Ad 2 -->

        <!-- Ad 2 -->
        <div class="small-9 medium-4 medium-uncentered small-centered large-uncentered large-4 columns">
            <img src="public/defualt/img/ads/3.jpg" alt="ad2" />
        </div>
        <!-- End Ad 2 -->

    </div>
    <!-- End Row -->

</div>
<!-- End Advertisements -->


<!-- Featured Products -->

<!-- Heading -->
<div class="row featured-row">
    <h1 class="text-center">برجسته</h1>
    <div class="heading-summary text-center"> آخرین مجموعه ای از آیتم</div>
    <div class="fr-border"></div>
</div>
<!-- End Heading -->

<!-- Product Listing -->
<div class="row">
    <?php foreach ($productAlllist as $key => $value) : ?>
        <div class="small-8 medium-3 small-centered medium-uncentered large-3 large-uncentered columns f-product">
            <!-- Sale Tag -->
            <!-- <div class="sale-tag">
                SALE
            </div> -->
            <!-- End Sale Tag -->
            <img style="whidth:220px;height:284px;" src="<?php echo "admin/temp_image/" . $value['image1']; ?>" alt="Product 1">
            <!-- Product Link -->
            <div class="product-link text-center">
                <a href="index.php?c=product&a=details&procat_id=<?php echo $value['id']; ?>"><?php echo $value['tittle']; ?></a>
            </div>

            <!-- Product Rating -->
            <div class="f-productrating">
                <i class="icon-star"></i>
                <i class="icon-star"></i>
                <i class="icon-star"></i>
                <i class="icon-star"></i>
                <i class="icon-star"></i>
            </div>
            <!-- End Product Rating -->

            <!-- Product Price -->
            <div class="f-product-price">
                <?php echo  "$" . number_format($value['price']); ?>
            </div>

            <!-- AddtoCart Buttons -->
            <div class="f-product-hover">
                <div class="f-button">
                    <a href="index.php?c=bascket&a=add&add_id= <?php echo  $value['id']; ?>"><i class="icon-cart"></i></a>
                    <a href="#"><i class="icon-heart"></i></a>
                    <a href="#"><i class="icon-tags"></i></a>
                </div>
            </div>
            <!-- End AddtoCart Buttons -->
        </div>
    <?php endforeach; ?>
</div>
<!-- End Product Listing -->

<!-- End Featured Products -->

<!-- Social Widgets -->
<div class="social-bg">
    <!-- Content Row 0-->
    <div class="row">
        <!-- Facebook -->
        <div class="small-12 medium-12 large-4 columns">
            <!-- Heading -->
            <div class="social-heading">
                ما را در فیسبوک پیدا کنید
            </div>
            <!-- End Heading -->

            <!-- Likebox Widget -->
            <iframe id="fb_iframe" src="//www.facebook.com/plugins/likebox.php?href=http%3A%2F%2Fwww.facebook.com%2FFacebookDevelopers&amp;width=290&amp;height=258&amp;colorscheme=light&amp;show_faces=true&amp;header=false&amp;stream=false&amp;show_border=false&amp;appId=154819864707342" style="border:none; overflow:hidden; width:300px; height:258px;"></iframe>
            <!-- End Likebox Widget -->
        </div>
        <!-- End Facebook -->

        <!-- Twitter -->
        <div class="small-12 medium-12 large-4 columns">
            <!-- Heading -->
            <div class="social-heading">
                تویت های اخیر
            </div>
            <!-- End Heading -->
            <!-- Tweet Container -->
            <div class="tweet-container">

                <!-- Tweet -->
                <div class="tweet-list">
                    <!-- Date -->
                    <div class="tweet-date">
                        <i class="icon-twitter"></i>19 ساغت قبل:
                    </div>
                    <!-- Tweet -->
                    <div class="tweet-text">
                        لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است
                    </div>
                </div>
                <!-- End Tweet -->


                <!-- Tweet -->
                <div class="tweet-list">
                    <!-- Date -->
                    <div class="tweet-date">
                        <i class="icon-twitter"></i> 19 ساغت قبل:
                    </div>
                    <!-- Tweet -->
                    <div class="tweet-text">
                        لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است
                    </div>
                </div>
                <!-- End Tweet -->


                <!-- Tweet -->
                <div class="tweet-list">
                    <!-- Date -->
                    <div class="tweet-date">
                        <i class="icon-twitter"></i> 19 ساغت قبل:
                    </div>
                    <!-- Tweet -->
                    <div class="tweet-text">
                        لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است
                    </div>
                </div>
                <!-- End Tweet -->

            </div>

        </div>
        <!-- End Twitter -->

        <!-- Instagram -->
        <div class="small-12 medium-12 large-4 columns">
            <!-- Heading -->
            <div class="social-heading">
                اینستاگرام
            </div>
            <!-- End Heading -->

            <!-- Thumbs -->
            <div class="insta-widget">
                <!-- Items -->
                <div class="insta-thumb">
                    <a href="#" title="Image title">
                        <img src="public/defualt/img/others/instagram/1.jpg" alt="instagramphoto 1" />
                    </a>
                </div>
                <!-- End items -->

                <!-- Items -->
                <div class="insta-thumb">
                    <a href="#" title="Image title">
                        <img src="public/defualt/img/others/instagram/2.jpg" alt="instagramphoto 2" />
                    </a>
                </div>
                <!-- End items -->

                <!-- Items -->
                <div class="insta-thumb">
                    <a href="#" title="Image title">
                        <img src="public/defualt/img/others/instagram/3.jpg" alt="instagramphoto 3" />
                    </a>
                </div>
                <!-- End items -->

                <!-- Items -->
                <div class="insta-thumb">
                    <a href="#" title="Image title">
                        <img src="public/defualt/img/others/instagram/4.jpg" alt="instagramphoto 4" />
                    </a>
                </div>
                <!-- End items -->

                <!-- Items -->
                <div class="insta-thumb">
                    <a href="#" title="Image title">
                        <img src="public/defualt/img/others/instagram/5.jpg" alt="instagramphoto 5" />
                    </a>
                </div>
                <!-- End items -->

                <!-- Items -->
                <div class="insta-thumb">
                    <a href="#" title="Image title">
                        <img src="public/defualt/img/others/instagram/6.jpg" alt="instagramphoto 6" />
                    </a>
                </div>
                <!-- End items -->

                <!-- Items -->
                <div class="insta-thumb">
                    <a href="#" title="Image title">
                        <img src="public/defualt/img/others/instagram/7.jpg" alt="instagramphoto 7" />
                    </a>
                </div>
                <!-- End items -->

                <!-- Items -->
                <div class="insta-thumb">
                    <a href="#" title="Image title">
                        <img src="public/defualt/img/others/instagram/8.jpg" alt="instagramphoto 8" />
                    </a>
                </div>
                <!-- End items -->

                <!-- Items -->
                <div class="insta-thumb">
                    <a href="#" title="Image title">
                        <img src="public/defualt/img/others/instagram/1.jpg" alt="instagramphoto 9" />
                    </a>
                </div>
                <!-- End items -->

                <!-- Items -->
                <div class="insta-thumb">
                    <a href="#" title="Image title">
                        <img src="public/defualt/img/others/instagram/4.jpg" alt="instagramphoto 44" />
                    </a>
                </div>
                <!-- End items -->

                <!-- Items -->
                <div class="insta-thumb">
                    <a href="#" title="Image title">
                        <img src="public/defualt/img/others/instagram/5.jpg" alt="instagramphoto" />
                    </a>
                </div>
                <!-- End items -->

                <!-- Items -->
                <div class="insta-thumb">
                    <a href="#" title="Image title">
                        <img src="public/defualt/img/others/instagram/3.jpg" alt="instagramphoto" />
                    </a>
                </div>
                <!-- End items -->

            </div>
            <!-- End thumbs -->

        </div>
        <!-- End Instagram -->

    </div>

</div>
<!-- End Social Widget -->