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
				<?php echo the_field('sf-info-kit') ?>
			</div>
		</div>
	</div>
<?php }

genesis();