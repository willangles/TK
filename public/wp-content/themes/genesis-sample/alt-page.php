<?php
/**
* Template Name: Tertiary Page
* Description: Alternative Page for Regular Content
* 
* 
*/
// Add our custom loop
add_filter( 'body_class', 'childthemeprefix_tk_alt_page' );
function childthemeprefix_tk_alt_page( $classes ) {
	$classes[] = 'tk-alt-page';
	return $classes;
}
remove_action( 'genesis_loop', 'genesis_do_loop' );
add_action( 'genesis_loop', 'alt_page' );


function alt_page() { ?>
	<div class="alt-wrapper">
		<div class="row">
			<div class="col s12 m6">
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post();?>
					<h1 class="alt-title"><?php the_title(); ?></h1>
					<div class="alt-content">
						<p><?php the_content(); ?></p>
					</div>
					<?php endwhile; endif; ?>
					<?php include('faqs.php'); ?>
			</div>
			<div class="alt-image" style="background: url(<?php the_post_thumbnail_url(); ?>); background-size: cover; background-position: <?php the_field('position');?>"></div>
		</div>
	</div>
<?php }

genesis();