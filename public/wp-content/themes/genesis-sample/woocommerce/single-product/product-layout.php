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
</div>
<div class="row">
    <div class="wc-thumbnail-wrapper">
        <?php wc_get_template( 'single-product/product-thumbnails.php' ); ?>
    </div>
</div>
