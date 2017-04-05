<?php
/**
* Template Name: TimberKing Front Page Template
* Description: Used as a page template for front page
*/
 
remove_action( 'genesis_loop', 'genesis_do_loop' );
add_action( 'genesis_loop', 'my_custom_loop' );
function my_custom_loop () {
?>
 <div id="front-page-stacks">
  	<section id="fpSplash" style="background-image:url('<?php the_field("splash_image"); ?>');">
  		<div class="row valign-wrapper">
  			<div class="valign">
	  			<h2><?php the_field('splash_image_headline'); ?></h2>
	  			<p><?php the_field('splash_image_text'); ?></p>
	  			<a href="<?php the_field('button_link')?>" class="waves-effect waves-light btn button">See it in action<i class="material-icons right">play_arrow</i></a>
  			</div>
  		</div>
  	</section>
	<section id="fpIconRow">
		<div class="row">
			<div id="icon-one" class="col l3 m6 s12 icon-row-icon">
				<img src="<?php the_field('icon_1_icon'); ?>">
				<h3><?php the_field('icon_1_title'); ?></h3>
				<p><?php the_field('icon_1_copy'); ?></p>
			</div>
			<div id="icon-two" class="col l3 m6 s12 icon-row-icon">
				<img src="<?php the_field('icon_2_icon'); ?>">
				<h3><?php the_field('icon_2_title'); ?></h3>
				<p><?php the_field('icon_2_copy'); ?></p>
			</div>
			<div id="icon-three" class="col l3 m6 s12 icon-row-icon">
				<img src="<?php the_field('icon_3_icon'); ?>">
				<h3><?php the_field('icon_3_title'); ?></h3>
				<p><?php the_field('icon_3_copy'); ?></p>
			</div>
			<div id="icon-four" class="col l3 m6 s12 icon-row-icon">
				<img src="<?php the_field('icon_4_icon'); ?>">
				<h3><?php the_field('icon_4_title'); ?></h3>
				<p><?php the_field('icon_4_copy'); ?></p>
			</div>
 
 			<!-- Triggered Icon Boxes -->
			<div id="icon-one-trigger" class="s12 hidden icon-trigger">
				<div class="row valign-wrapper">
					<div class="col s12 m3 valign">
						<img src="<?php the_field('icon_1_icon'); ?>">
					</div>
					<div class="col s12 m9 valign">
						<h3><?php the_field('icon_1_title'); ?></h3>
						<p><?php the_field('icon_1_copy_expanded'); ?></p>
					</div>
				</div>				
			</div>
			<div id="icon-two-trigger" class="s12 hidden icon-trigger">
				<div class="row valign-wrapper">
					<div class="col s12 m3 valign">
						<img src="<?php the_field('icon_2_icon'); ?>">
					</div>
					<div class="col s12 m9 valign">
						<h3><?php the_field('icon_2_title'); ?></h3>
						<p><?php the_field('icon_2_copy_expanded'); ?></p>
					</div>
				</div>		
			</div>
			<div id="icon-three-trigger" class="s12 hidden icon-trigger">
				<div class="row valign-wrapper">
					<div class="col s12 m3 valign">
						<img src="<?php the_field('icon_3_icon'); ?>">
					</div>
					<div class="col s12 m9 valign">
						<h3><?php the_field('icon_3_title'); ?></h3>
						<p><?php the_field('icon_3_copy_expanded'); ?></p>
					</div>
				</div>
			</div>
			<div id="icon-four-trigger" class="s12 hidden icon-trigger">
				<div class="row valign-wrapper">
					<div class="col s12 m3 valign">
						<img src="<?php the_field('icon_4_icon'); ?>">
					</div>
					<div class="col s12 m9 valign">
						<h3><?php the_field('icon_4_title'); ?></h3>
						<p><?php the_field('icon_4_copy_expanded'); ?></p>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section id="fpPromo">
		<div class="row">
			<div class="col m6 s12 valign-wrapper" style="overflow:hidden;">
				<div>
				<?php $video_url = get_field('video_modal_link', false, false); 
						$re = '/[^=]+$/';
						preg_match($re, $video_url, $video_id); ?>
					<iframe width="853" height="480" src="https://www.youtube.com/embed/<?php echo $video_id[0]; ?>?enablejsapi=1" frameborder="0" allowfullscreen></iframe>
				</div>
			</div>
			<div class="col m6 s12 valign-wrapper">
				<div class="valign">
					<h2><?php the_field('promo_title'); ?></h2>
					<p><?php the_field('promo_copy'); ?></p>
				</div>
			</div>
		</div>
	</section>
	<section id="fpHistory">
		<div class="row">
			<div class="col s12 m6 valign-wrapper">
				<p class="valign"><?php the_field('history_copy'); ?></p>
			</div>
			<div class="col s12 m6 valign-wrapper">
				<div class="valign"><img src="http://timberking.msaavedra.com/wp-content/uploads/history-img.png"></div>
			</div>
		</div>
	</section>
	<section id="fpFeatured">
		<div class="row">
			<a href="<?php the_field('featured_link_1'); ?>">
			<div class="col s12 m6 feature-box" style="background-image:url(<?php the_field('featured_image_1'); ?>);">
				<article>
					<h3><?php the_field('featured_title_1'); ?></h3>
				</article>
				<p><?php the_field('featured_copy_1'); ?></p>
			</div>
			</a>
			<a href="<?php the_field('featured_link_2'); ?>">
			<div class="col s12 m6 feature-box" style="background-image:url(<?php the_field('featured_image_2'); ?>);">
				<article>
					<h3><?php the_field('featured_title_2'); ?></h3>
				</article>
				<p><?php the_field('featured_copy_2'); ?></p>
			</div>
			</a>
		</div>
	</section>
 </div> <!-- end main container -->
<script type="text/javascript" src="http://www.youtube.com/player_api"></script>

<?php } ?>


<?php genesis(); ?>