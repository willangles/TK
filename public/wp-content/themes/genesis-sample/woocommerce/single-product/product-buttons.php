<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}
global $product; ?>

<div class="wc-price-box">
    <?php $type = get_field('product_type'); if($type !== 'Accessory'){ ?>
        <span class="price-label highlight"><?php echo $product->get_price_html(); ?></span>
        <a onclick="getQuote(event);" data-title="<?php echo $product->get_title(); ?>" class="wc-custom-btn buy waves-effect waves-light btn">Get Detailed Quote</a>
        <a href="/get-financed" class="wc-custom-btn accent-btn buy waves-effect waves-light btn">Get Financed</a>
        <a onclick="addToCart(event);" data-type="<?php the_field('product_type'); ?>" data-id="<?php echo $product->id ?>" class="wc-custom-btn buy accent-btn waves-effect waves-light btn"><i class="material-icons right">play_arrow</i>BUY NOW</a>
    <?php } else { ?>
        <span class="price-label highlight"><?php echo $product->get_price_html(); ?></span>
        <a onclick="addToCart(event);" data-type="<?php the_field('product_type'); ?>" data-id="<?php echo $product->id ?>" class="wc-custom-btn buy waves-effect waves-light btn"><i class="material-icons right">play_arrow</i>BUY NOW</a>
    <?php } ?>
</div>

<script>
    function addToCart(event){
        var el = event.target;
        var id = jQuery(el).data('id');
        var type = jQuery(el).data('type');
        var url = "/?add-to-cart=" + id;

        function openDialog(){
            swal({
                title: "Success!",
                text: "Your product as been added to cart!",
                type: "success",
                showCancelButton: true,
                cancelButtonText: "Return to shop",
                confirmButtonText: "Continue To Cart",
                confirmButtonColor: "#dc2c00"
            },
            function(isConfirm){
                if (isConfirm) {
                    window.location = "/cart/";
                } else {
                     window.location = "/shop/";
                }
            });
        }
        jQuery.ajax({
            url: url,
        }).done(function() {
            openDialog();
        });
    }
    function getQuote(event){
        var el = event.target;
        var title = jQuery(el).data('title');
        var url = "/get-quote" + "?" + encodeURIComponent(title);
        window.location.href = url;

    }
</script>