<div class="row">
	<div class="product-info-wrapper">
		<div class="row wrap">
			<div class="col s12 m12 l8">
				<div id="overview" class="info-panel-to-show info-panel-show">
					<h2>Overview</h2>
					<p><?php the_field('overview'); ?></p>
				</div>
				<div id="features" class="info-panel-to-show">
					<!--<img src="http://willangles.com/tk/wp-content/uploads/head.gif" class="responsive-img">-->
					<h2>Features</h2>
					<p><?php the_field('features'); ?></p>
				</div>
				<div id="specs" class="info-panel-to-show">
					<h2>Specifications</h2>
					<p class="spec-item"><strong>Cutting Head</strong><span><?php the_field('cutting_head'); ?></span></p>
					<p class="spec-item"><strong>Cutting Deck</strong><span><?php the_field('cutting_deck'); ?></span></p>
					<p class="spec-item"><strong>Standard Motor</strong><span><?php the_field('standard_motor'); ?></span></p>
					<p class="spec-item"><strong>Machine Weight</strong><span><?php the_field('machine_weight'); ?></span></p>
					<p class="spec-item"><strong>Max Log Diameter</strong><span><?php the_field('max_log_diameter'); ?></span></p>
					<p class="spec-item"><strong>Max Cut Length</strong><span><?php the_field('max_cut_length'); ?></span></p>
					<p class="spec-item"><strong>Max Width of Cut</strong><span><?php the_field('max_width_of_cut'); ?></span></p>
					<p class="spec-item"><strong>Clearance Above Blade</strong><span><?php the_field('clearance_above_blade'); ?></span></p>
					<p class="spec-item"><strong>Machine Width</strong><span><?php the_field('machine_width'); ?></span></p>
					<p class="spec-item"><strong>Machine Length</strong><span><?php the_field('machine_length'); ?></span></p>
					<p class="spec-item"><strong>Blade Clutch</strong><span><?php the_field('blade_clutch'); ?></span></p>
					<p class="spec-item"><strong>Moveable Guide Roller</strong><span><?php the_field('moveable_guide_roller'); ?></span></p>
					<p class="spec-item"><strong>Command Post</strong><span><?php the_field('command_post'); ?></span></p>
					<p class="spec-item"><strong>Direct-Action Hydraulics</strong><span><?php the_field('direct-action_hydraulics'); ?></span></p>
					<p class="spec-item"><strong>Feed System</strong><span><?php the_field('feed_system'); ?></span></p>
					<p class="spec-item"><strong>Blade Up/Down</strong><span><?php the_field('blade_up/down'); ?></span></p>
					<p class="spec-item"><strong>Bi-Directional Chain Log Turner</strong><span><?php the_field('chain_log'); ?></span></p>
					<p class="spec-item"><strong>Log Stomps</strong><span><?php the_field('log_stomps'); ?> </span></p>
					<p class="spec-item"><strong>Log Clamp</strong><span><?php the_field('log_clamp'); ?></span></p>
					<p class="spec-item"><strong>Highway Transport</strong><span><?php the_field('highway_transport'); ?></span></p>
					<p class="spec-item"><strong>Fine Adjust Outriggers</strong><span><?php the_field('fine_adjust_outriggers'); ?></span></p>
					<p class="spec-item"><strong>Money-Back Guarantee</strong><span><?php the_field('money-back_guarantee'); ?></span></p>
					<p class="spec-item"><strong>Warranty</strong><span><?php the_field('warranty'); ?></span></p>
					<p class="spec-item"><strong>Cutting Deck Warranty</strong><span><?php the_field('cutting_deck_warranty'); ?></p>
				</div>
				<div id="warranty" class="info-panel-to-show">
					<h2>Warranty</h2>
					<p><?php the_field('warranty_text'); ?></p>
				</div>
				<div id="qa" class="info-panel-to-show qa">
					<h2>Q &amp; A</h2>
					<?php the_field('q_and_a'); ?>
				</div>
				<p class="notice">Specifications refer to standard configuration mills and are subject to change without notice.</p>
			</div>
			<div class="col s12 m12 l4">
				<div class="product-video-wrap">
					<?php wc_get_template( 'single-product/product-videos.php' ); ?>
				</div>
			</div>
		</div>
	</div>
</div>