<?php if(get_field('product_type') != 'Product'): ?>
<div class="row">
    <div class="wc-product-img col s12 m12 l6">
        <?php the_post_thumbnail( 'full' ); ?>
    </div>
    <div class="wc-description-wrapper col s12 m12 l6">
        <!-- Product Title -->
        <?php wc_get_template( 'single-product/title.php' ); ?>
        <!-- Buy Now and Deposit Buttons -->
        <?php wc_get_template( 'single-product/product-buttons.php' ); ?>
       
        <!-- Product Description-->
        <?php wc_get_template( 'single-product/short-description.php' ); ?>
    </div>
<?php else: ?>
<div class="row sawmill-product-image" style="background:url(<?php the_post_thumbnail_url( 'full' ); ?>) center center / cover;">
    <div class="wc-product-img col s12 m12 l8"></div>
    <div class="wc-description-wrapper col s12 m12 l4">
        <!-- Product Title -->
        <?php wc_get_template( 'single-product/title.php' ); ?>
        <!-- Buy Now and Deposit Buttons -->
        <?php wc_get_template( 'single-product/product-buttons.php' ); ?>
       
        <!-- Product Description-->
        <?php wc_get_template( 'single-product/short-description.php' ); ?>
    </div>
 <?php endif ?>
</div>
<div class="row">
    <div class="wc-thumbnail-wrapper">
        <?php wc_get_template( 'single-product/product-thumbnails.php' ); ?>
    </div>
</div>
