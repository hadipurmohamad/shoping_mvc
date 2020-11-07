<div class="row featured-row">

    <h1>سبد خرید</h1>
    <div class="fr-border"></div>
    <!-- Item List -->

<?php foreach ($bascketList as $key => $value):?>
    <div class="small-10 small-centered large-12 medium-12 medium-uncentered large-uncentered columns shopping-cart-list ">
        <div class="small-12 small-centered medium-2 medium-uncentered large-2 shopping-cart-thumb large-uncentered columns">
            <img src="admin/temp_image/<?= $value['image1'] ?>" alt="Product 1">
        </div>
        <!-- End Thumb -->
        <!-- Content -->
        <div class="small-12 small-centered medium-8 medium-uncentered large-9 large-uncentered columns">
            <!-- Title -->
            <div class="product-detail-title  shopping-cart-item-title">
                <a href="index.php?c=product&a=details&procat_id=<?= $value['product_id'] ?>" title="Coolwater Perfume">


                <?= $value['tittle'] ?>
                </a>
            </div>
            <!-- End Title -->
            <div class="main-price shopping-cart-item-price">
                $<?= number_format($value['price']) ?>
            </div>

            <!-- Product Size -->
            <div class="small-12 small-centered medium-12 medium-uncentered large-12 large-uncentered shopping-cart-product-size columns">
                <div class="product-attr-text">
                    اندازه:
                </div>
                <div class="product-size">
                    <a href="#" title="Small">
                        S
                    </a>
                </div>


            </div>
            <!-- End Product Size -->


            <!-- Product Quantity -->
            <div class="small-12 small-centered medium-12 medium-uncentered large-12 large-uncentered columns">
                <div class="product-attr-text q-lineheight">
                    تعداد:
                </div>

                <div class="quantity-inp">
                    <input type="text" class="quantity-input" id="p_quantity" value="1">
                </div>

            </div>
            <!-- End Product Quantity -->



        </div>
        <!-- End Content  -->

        <!-- Remove Button -->
        <div class="small-12 text-center medium-1 large-1 large-uncentered shp-remove-btn medium-uncentered columns">
            <div class="continue-button">
                <a href="index.php?c=bascket&a=delete&delete_id=<?= $value['id'] ?>" title="remove item">
                    X
                </a>
            </div>
        </div>
        <div class="clearing">
        </div>
    </div>
<?php endforeach;?>
<?php if (empty($bascketList)):?>
<div class="small-10 small-centered large-12 medium-12 medium-uncentered large-uncentered columns shopping-cart-list">
  <div class="small-12 small-centered medium-2 medium-uncentered large-2 shopping-cart-thumb large-uncentered columns">
    <i class="icon-meh" ></i>
  </div>
  <div class="small-12 small-centered medium-8 medium-uncentered large-9 large-uncentered columns">
    <div class="product-detail-title  shopping-cart-item-title">
    <h1>سبد خرید شما خالی است!</h1>
    </div>
    <div class="main-price shopping-cart-item-price">  
    </div>
    <div class="small-12 small-centered medium-12 medium-uncentered large-12 large-uncentered shopping-cart-product-size columns">
    </div>
    <div class="small-12 small-centered medium-12 medium-uncentered large-12 large-uncentered shopping-cart-product-size columns">
    </div>
    <div class="small-12 small-centered medium-12 medium-uncentered large-12 large-uncentered columns"> 
      <div class="quantity-inp">
 
      </div>
    </div>
  </div>
  <div class="small-12 text-center medium-1 large-1 large-uncentered shp-remove-btn medium-uncentered columns">
  </div>
  <div class="clearing">
  </div>
</div>
<?php endif;?>
    <!-- End item list -->
    <!-- Total -->
    <div class="small-12 small-centered large-uncentered medium-uncentered large-6 medium-6 cart-total columns">

        مجموع:
        <?php 
        $total=0;
   foreach ($bascketList as $key => $value) {
      $total+=$value['price'];
   }
        echo number_format($total);
        ?>$ 
           </div>

    <!-- Check out button -->

    <div class="small-12 large-5 cart-checkout-button left medium-6 columns">
        <button class="small-12 large-12 medium-12 btn btn-3 btn-3a icon-lock">بررسی</button>
    </div>

</div>