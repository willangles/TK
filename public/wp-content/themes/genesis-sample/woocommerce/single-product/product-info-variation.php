<div class="row">
	<div class="product-info-wrapper">
		<div class="row wrap">
			<div class="col s12 m12 l10 offset-l1">
				<div id="specs" class="info-panel">
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
					<p class="spec-item"><strong>Edger Length</strong><span><?php the_field('t9_edger_length'); ?></span></p>
					<p class="spec-item"><strong>Conveyor Length (Infeed)</strong><span><?php the_field('t9_conveyor_length_in'); ?></span></p>
					<p class="spec-item"><strong>Conveyor Length (Outfeed)</strong><span><?php the_field('t9_conveyor_length_out'); ?></span></p>
					<p class="spec-item"><strong>Weight</strong><span><?php the_field('t9_weight'); ?></span></p>
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
					<?php endif; ?>
				</div>
			</div>
		</div>
	</div>
</div>