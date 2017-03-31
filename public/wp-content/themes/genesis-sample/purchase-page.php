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
		<p class="product-cart-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. A fugiat voluptatibus vel dolorem temporibus neque quam voluptates, odit. Maxime inventore repellendus consequuntur ex placeat dicta amet impedit autem, nostrum quo!<button class="waves-effect waves-light btn button">Learn More</button></p>
	</div>
<div class="container">
	<div class="row">
		<div class="purchase-contact col s6">
			<p class="purchase-contact-icon"><i class="material-icons dp48">email</i></p>
			<p class="purchase-contact-title">Contact Us</p>
			<p class="purchase-contact-caption">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
			<p class="purchase-contact-action">Send an Email</p>
		</div>
		<div class="purchase-contact col s6">
			<p class="purchase-contact-icon"><i class="material-icons dp48">phonelink_ring</i></p>
			<p class="purchase-contact-title">Give Us A Call</p>
			<p class="purchase-contact-caption">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
			<p class="purchase-contact-action">1-800-000</p>
		</div>
		<div class="purchase-options col s12">
			<p class="purchase-options-title">Payment Options:</p>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur, minima libero velit similique, animi explicabo quaerat quod et temporibus quidem accusantium voluptatem modi odit eos tempora? Qui eligendi vero dicta.</p>
		</div>
		<button class="purchase-cart-btn waves-effect waves-light btn button">Continue To Cart</button>
	</div> 
	</div>
 </div>


<?php } ?>


<?php genesis(); ?>