<?php if( get_field('faqs') ): ?>
	<ul class="collapsible" data-collapsible="accordion">
	<?php $faqs = get_field('faqs'); foreach( $faqs as $f): setup_postdata($f);?>
		<li>
			<div class="collapsible-header"><?php echo get_the_title($f->ID); ?></div>
			<div class="collapsible-body"><span><?php echo the_content($f->ID); ?></span></div>
		</li>
	<?php endforeach; wp_reset_postdata(); ?>
</ul>
<?php endif; ?>