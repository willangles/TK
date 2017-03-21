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
	<div class="alt-page-master-wrapper">
		<div class="row" style="padding-top:1em;">

			<div class="col s12 m6">

				<?php if ( have_posts() ) : while ( have_posts() ) : the_post();
					echo '<h2>';
					echo the_title();
					echo '</h2>';
					the_content();
					endwhile; else: ?>
					<p>Sorry, no posts matched your criteria.</p>
				<?php endif; ?>

			</div>
			<div class="col s12 m6">
				<?php echo genesis_get_image( array( 'size' => 'page-featured-image' ) ); ?>
			</div>

		</div>
	</div>

<?php }

genesis();