<?php
/**
* Template Name: Form Template
* Description: Form template
* 
* 
*/
// Add our custom loop
remove_action( 'genesis_loop', 'genesis_do_loop' );
add_action( 'genesis_loop', 'form_template' );


function form_template() { ?>
	<div class="form-template-container">
		<div class="row">
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post();?>
			<div class="col s12 m6">
				<h1 class="alt-title"><?php the_title(); ?></h1>
				<div class="alt-content">
					<p><?php the_content(); ?></p>
				</div>
			</div>
			<?php endwhile; endif; ?>
			<div class="col s12 m6 form-wrapper">
				<?php $post_object = get_field('contact_form');
					if( $post_object ): $post = $post_object; setup_postdata( $post ); 
						$post_id = get_the_ID($post_object->ID);
						$post_title = get_the_title($post_object->ID);
						echo do_shortcode('[contact-form-7 id="' . $post_id .'" title="' . $post_title . '"]'); 
						wp_reset_postdata(); endif; ?>
			</div>
		</div>
	</div>
	<script>
		if(window.location.href.indexOf("get-quote/?") > -1) {
			var url = window.location.href;
			var productTitle = url.substring(url.indexOf("?") + 1);
			productTitle = decodeURIComponent(productTitle);
			console.log(productTitle);
			jQuery( "h1.alt-title" ).html("Get Quote For " + productTitle);
		}
	</script>
<?php }

genesis();