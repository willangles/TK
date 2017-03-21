<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}
global $product; ?>

<div class="wc-price-box">
    <span class="price-label highlight"><?php echo $product->get_price_html(); ?></span>
    <button class="wc-custom-btn buy waves-effect waves-light btn"><i class="material-icons right">play_arrow</i>BUY NOW</button>
</div>