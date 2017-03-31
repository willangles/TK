<?php
/**
* Template Name: Purchase Page Template
* Description: Used as a page template for purchase page.
*/
 

remove_action( 'genesis_loop', 'genesis_do_loop' );
add_action( 'genesis_loop', 'my_custom_loop' );


function my_custom_loop () {
?>
<div class="purchase-page">

	<div class="product-cart-container">
		<p class="product-cart-text"><?php the_field('content'); ?><a href="#options" class="waves-effect waves-light btn button">Learn More</a></p>
	</div>
<div class="container">
	<div class="row">
		<div class="purchase-contact col s6">
			<p class="purchase-contact-icon"><i class="material-icons dp48">email</i></p>
			<p class="purchase-contact-title">Contact Us</p>
			<p class="purchase-contact-caption"><?php the_field('email_caption')?></p>
			<a class="purchase-contact-action email">Send an Email</a>
		</div>
		<div class="purchase-contact col s6">
			<p class="purchase-contact-icon"><i class="material-icons dp48">phonelink_ring</i></p>
			<p class="purchase-contact-title">Give Us A Call</p>
			<p class="purchase-contact-caption"><?php the_field('phone_caption')?></p>
			<p class="purchase-contact-action"><?php the_field('phone_number')?></p>
		</div>
		<div class="purchase-options col s12" id="options">
			<p class="purchase-options-title">Payment Options:</p>
			<p><?php the_field('payment_options')?></p>
		</div>
		<a href="/cart/" class="purchase-cart-btn waves-effect waves-light btn button">Continue To Cart</a>
	</div> 
	</div>
 </div>
<script>
	jQuery(document).ready(function(){
		jQuery('a[href*="#"]:not([href="#"])').click(function() {
			if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
			var target = jQuery(this.hash);
			target = target.length ? target : jQuery('[name=' + this.hash.slice(1) +']');
			if (target.length) {
				jQuery('html, body').animate({
				scrollTop: target.offset().top
				}, 1000);
				return false;
			}
			}
		});
});

</script>

<?php } ?>


<?php genesis(); ?>