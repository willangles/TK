<?php
/**
 * The Template for displaying all single products
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see 	    https://docs.woocommerce.com/document/template-structure/
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     1.6.4
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_title', 5 );
remove_action( 'woocommerce_product_thumbnails', 'woocommerce_show_product_thumbnails', 20 );


get_header( 'shop' ); ?>

	<?php
		/**
		 * woocommerce_before_main_content hook.
		 *
		 * @hooked woocommerce_output_content_wrapper - 10 (outputs opening divs for the content)
		 * @hooked woocommerce_breadcrumb - 20
		 */
		do_action( 'woocommerce_before_main_content' );
	?>

		<?php while ( have_posts() ) : the_post(); ?>
			<div class="wc-custom-wrapper">
				<!-- Main image and short description-->
				<div class="row">
					<div class="wc-product-img col s12 m12 l6">
						<?php the_post_thumbnail( 'full' ); ?>
					</div>
					<div class="wc-description-wrapper col s12 m12 l6">
						<?php the_title( '<h1 itemprop="name" class="wc-product-title product_title entry-title">', '</h1>' ); ?>
						<div class="wc-product-description">
							<?php echo apply_filters( 'woocommerce_short_description', $post->post_excerpt ) ?>
						</div>
					</div>
				</div>
				<!-- Thumbnails-->
				<div class="row">
					<div class="wc-thumbnail-wrapper">
						<?php wc_get_template( 'single-product/product-thumbnails.php' ); ?>
					</div>
				</div>
			</div>
			<div class="wc-custom-wrapper extended">
				<div class="row">
					<ul class="product-info-nav">
						<li class="info-panel"><a id="tk-product-overview">Overview</a></li>
						<li class="info-panel"><a id="tk-product-features">Features</a></li>
						<li class="info-panel"><a id="tk-product-specs">Specifications</a></li>
						<li class="info-panel"><a id="tk-product-warranty">Warranty</a></li>
						<li class="info-panel"><a id="tk-product-qa">Q&amp;A</a></li>
					</ul>
				</div>
			</div>
			<div class="wc-custom-wrapper">
				<div class="row">
					<?php wc_get_template( 'single-product/product-info.php' ); ?>
				</div>
			</div>

		<?php endwhile; // end of the loop. ?>

	<?php
		/**
		 * woocommerce_after_main_content hook.
		 *
		 * @hooked woocommerce_output_content_wrapper_end - 10 (outputs closing divs for the content)
		 */
		do_action( 'woocommerce_after_main_content' );
	?>

	<?php
		/**
		 * woocommerce_sidebar hook.
		 *
		 * @hooked woocommerce_get_sidebar - 10
		 */
		do_action( 'woocommerce_sidebar' );
	?>

<?php get_footer( 'shop' ); ?>

	<script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ=" crossorigin="anonymous"></script>
	<script>
	$(document).ready(function(){ 
		$('#tk-product-overview').click(function(){
			$('ul.product-info-nav > li > a').removeClass('active');
			$('.info-panel-to-show').hide(200);
			$('#overview').show(600);
			$(this).addClass('active');
		});
		$('#tk-product-features').click(function(){
			$('ul.product-info-nav > li > a').removeClass('active');
			$('.info-panel-to-show').hide(200);
			$('#features').show(600);
			$(this).addClass('active');
		});
		$('#tk-product-specs').click(function(){
			$('ul.product-info-nav > li > a').removeClass('active');
			$('.info-panel-to-show').hide(200);
			$('#specs').show(600);
			$(this).addClass('active');
		});
		$('#tk-product-warranty').click(function(){
			$('ul.product-info-nav > li > a').removeClass('active');
			$('.info-panel-to-show').hide(200);
			$('#warranty').show(600);
			$(this).addClass('active');
		});
		$('#tk-product-qa').click(function(){
			$('ul.product-info-nav > li > a').removeClass('active');
			$('.info-panel-to-show').hide(200);
			$('#qa').show(600);
			$(this).addClass('active');
		});
	});
	</script>