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

global $post;

$type = get_field('product_type');

function woo_custom_taxonomy_in_body_class( $classes ){
  if( is_singular( 'product' ) )
  {
    $custom_terms = get_the_terms(0, 'product_cat');
    if ($custom_terms) {
      foreach ($custom_terms as $custom_term) {
        $classes[] = 'product_cat_' . $custom_term->slug;
      }
    }
  }
  return $classes;
}
add_filter( 'body_class', 'woo_custom_taxonomy_in_body_class' );

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
				<?php wc_get_template( 'single-product/product-layout.php' ); ?>
			</div>
			<?php if($type == 'Product'): ?>
				<div class="wc-custom-wrapper extended">
					<?php wc_get_template( 'single-product/product-info-nav.php' ); ?>
				</div>
				<div class="row" style="background: #fff;">
					<?php wc_get_template( 'single-product/product-info.php' ); ?>
				</div>
			<?php endif; ?>

			<?php if($type == 'Talon900' || 'Talon-R'): ?>
				<div class="wc-custom-wrapper extended">
					<?php wc_get_template( 'single-product/product-info-variation.php' ); ?>
				</div>
			<?php endif; ?>
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

<?php get_footer( ); ?>

	<script>
	jQuery(document).ready(function(){ 
		jQuery('#tk-product-overview').click(function(){
			jQuery('ul.product-info-nav > li > a').removeClass('active');
			jQuery('.info-panel-to-show').hide(200);
			jQuery('#overview').show(600);
			jQuery(this).addClass('active');
		});
		jQuery('#tk-product-features').click(function(){
			jQuery('ul.product-info-nav > li > a').removeClass('active');
			jQuery('.info-panel-to-show').hide(200);
			jQuery('#features').show(600);
			jQuery(this).addClass('active');
		});
		jQuery('#tk-product-specs').click(function(){
			jQuery('ul.product-info-nav > li > a').removeClass('active');
			jQuery('.info-panel-to-show').hide(200);
			jQuery('#specs').show(600);
			jQuery(this).addClass('active');
		});
		jQuery('#tk-product-warranty').click(function(){
			jQuery('ul.product-info-nav > li > a').removeClass('active');
			jQuery('.info-panel-to-show').hide(200);
			jQuery('#warranty').show(600);
			jQuery(this).addClass('active');
		});
		jQuery('#tk-product-qa').click(function(){
			jQuery('ul.product-info-nav > li > a').removeClass('active');
			jQuery('.info-panel-to-show').hide(200);
			jQuery('#qa').show(600);
			jQuery(this).addClass('active');
		});
	});
	if( jQuery("body").hasClass("product_cat_portable-sawmills")){
		jQuery(".woocommerce-breadcrumb a")[1].href="/timberking-portable-saw-mills/"; 
	}
	</script>