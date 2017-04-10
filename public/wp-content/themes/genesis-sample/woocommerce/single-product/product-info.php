<div class="wc-custom-wrapper">
	<div class="product-info-wrapper">
		<div class="row wrap">
			<div class="col s12 m12 l8">
				<div id="features" class="info-panel-to-show info-panel-show">
					<h2>Features</h2>
					<p><?php the_field('overview'); ?></p>
				</div>
				<div id="specs" class="info-panel-to-show">
				<?php if(get_field('product_type') == 'Product'): ?>
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
					<p class="spec-item"><strong>Power Core</strong><span><?php the_field('power_core'); ?></span></p>
					<p class="spec-item"><strong>Control Height from Ground</strong><span><?php the_field('control_height'); ?></span></p>
					<p class="spec-item"><strong>Moveable Guide Roller</strong><span><?php the_field('moveable_guide_roller'); ?></span></p>
					<p class="spec-item"><strong>Command Post</strong><span><?php the_field('command_post'); ?></span></p>
					<p class="spec-item"><strong>Direct-Action Hydraulic System</strong><span><?php the_field('direct-action_hydraulics'); ?></span></p>
					<p class="spec-item"><strong>Feed System</strong><span><?php the_field('feed_system'); ?></span></p>
					<p class="spec-item"><strong>Blade Up/Down</strong><span><?php the_field('blade_up/down'); ?></span></p>
					<p class="spec-item"><strong>Bi-Directional Chain Log Turner</strong><span><?php the_field('chain_log'); ?></span></p>
					<p class="spec-item"><strong>Log Stops</strong><span><?php the_field('log_stops'); ?> </span></p>
					<p class="spec-item"><strong>Log Clamp</strong><span><?php the_field('log_clamp'); ?></span></p>
					<p class="spec-item"><strong>Log Deck Rails</strong><span><?php the_field('log_deck_rails'); ?></span></p>
					<p class="spec-item"><strong>Log Deck Cross Beams</strong><span><?php the_field('log_deck_cross_beams'); ?></span></p>
					<p class="spec-item"><strong>Highway Transport</strong><span><?php the_field('highway_transport'); ?></span></p>
					<p class="spec-item"><strong>Fine Adjust Outriggers</strong><span><?php the_field('fine_adjust_outriggers'); ?></span></p>
					<p class="spec-item"><strong>Money-Back Guarantee</strong><span><?php the_field('money-back_guarantee'); ?></span></p>
					<p class="spec-item"><strong>Warranty</strong><span><?php the_field('warranty'); ?></span></p>
					<p class="spec-item"><strong>Cutting Deck Warranty</strong><span><?php the_field('cutting_deck_warranty'); ?></p>
					<div><p class="notice">Specifications refer to standard configuration mills and are subject to change without notice.</p></div>
					<?php endif; ?>
				<?php if(get_field('product_type') == 'Talon900'): ?>
					<h2>Specifications</h2>
					<p class="spec-item"><strong>Max Width of Passage</strong><span><?php the_field('t9_max_width_of_passage'); ?></span></p>
					<p class="spec-item"><strong>Max Cutting Thickness</strong><span><?php the_field('t9_max_cutting_thickness'); ?></span></p>
					<p class="spec-item"><strong>Max Width of Cut</strong><span><?php the_field('t9_max_width_of_cut'); ?></span></p>
					<p class="spec-item"><strong>Shortest Stock</strong><span><?php the_field('t9_shortest_stock'); ?></span></p>
					<p class="spec-item"><strong>Blade Diameter</strong><span><?php the_field('t9_blade_diameter'); ?></span></p>
					<p class="spec-item"><strong>Arbor Diameter</strong><span><?php the_field('t9_arbor_diameter'); ?></span></p>
					<p class="spec-item"><strong>Feed Speed</strong><span><?php the_field('t9_feed_speed'); ?></span></p>
					<p class="spec-item"><strong>Horsepower</strong><span><?php the_field('t9_horsepower'); ?></span></p>
					<p class="spec-item"><strong>Table Height</strong><span><?php the_field('t9_table_height'); ?></span></p>
					<p class="spec-item"><strong>Edger Height</strong><span><?php the_field('t9_edger_length'); ?></span></p>
					<p class="spec-item"><strong>Conveyor Length (infeed)</strong><span><?php the_field('t9_conveyor_length_in'); ?></span></p>
					<p class="spec-item"><strong>Conveyor Length (outfeed)</strong><span><?php the_field('t9_conveyor_length_out'); ?></span></p>
					<p class="spec-item"><strong>Weight</strong><span><?php the_field('t9_weight'); ?></span></p>
					<div><p class="notice">Specifications refer to standard configuration mills and are subject to change without notice.</p></div>
					<?php endif; ?>
				<?php if(get_field('product_type') == 'Talon-R'): ?>
					<h2>Specifications</h2>
					<p class="spec-item"><strong>Power Options</strong><span><?php the_field('tr_power_options'); ?></span></p>
					<p class="spec-item"><strong>Length</strong><span><?php the_field('tr_length'); ?></span></p>
					<p class="spec-item"><strong>Width</strong><span><?php the_field('tr_width'); ?></span></p>
					<p class="spec-item"><strong>Weight</strong><span><?php the_field('tr_weight'); ?></span></p>
					<p class="spec-item"><strong>Diameter</strong><span><?php the_field('tr_diameter'); ?></span></p>
					<p class="spec-item"><strong>Type</strong><span><?php the_field('tr_type'); ?></span></p>
					<p class="spec-item"><strong>Conveyor</strong><span><?php the_field('tr_conveyor'); ?></span></p>
					<p class="spec-item"><strong>Head Height Adjustment</strong><span><?php the_field('tr_head_height_adjustment'); ?></span></p>
					<p class="spec-item"><strong>Feed Rate</strong><span><?php the_field('tr_feed_rate'); ?></span></p>
					<p class="spec-item"><strong>Manual Roller Table</strong><span><?php the_field('tr_manual_roller_table'); ?></span></p>
					<p class="spec-item"><strong>Material Length</strong><span><?php the_field('tr_material_length'); ?></span></p>
					<p class="spec-item"><strong>Material Width</strong><span><?php the_field('tr_material_width'); ?></span></p>
					<p class="spec-item"><strong>Material Height</strong><span><?php the_field('tr_material_height'); ?></span></p>
					<div><p class="notice">Specifications refer to standard configuration mills and are subject to change without notice.</p></div>
					<?php endif; ?>
				</div>
				<div id="warranty" class="info-panel-to-show">
					<h2>Warranty</h2>
					<p><?php the_field('warranty_text'); ?></p>
				</div>
				<!-- <div id="qa" class="info-panel-to-show qa">
					<h2>Q &amp; A</h2>
					
				</div> -->
			</div>
			<div class="col s12 m12 l4">
				<div class="product-video-wrap">
					<?php wc_get_template( 'single-product/product-videos.php' ); ?>
				</div>
			</div>
		</div>
	</div>
</div>