<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}
global $product; ?>

<div class="wc-price-box">
    <span class="price-label highlight"><?php echo $product->get_price_html(); ?></span>
    <button onclick="addToCart(event);" data-id="<?php echo $product->id ?>" class="wc-custom-btn buy waves-effect waves-light btn"><i class="material-icons right">play_arrow</i>BUY NOW</button>
</div>

<script>
    function addToCart(event){
        var el = event.target;
        var id = $(el).data('id');
        var url = "/?add-to-cart=" + id;
        $.ajax({
            url: url,
        }).done(function() {
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
        });
    }
</script>