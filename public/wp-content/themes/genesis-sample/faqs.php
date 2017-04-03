<?php if( get_field('faqs') ): ?>
	<ul class="collapsible" data-collapsible="accordion">
	<?php $faqs = get_field('faqs'); foreach( $faqs as $f): setup_postdata($f);?>
		<li>
			<div class="collapsible-header"><?php echo get_the_title($f->ID); ?></div>
			<div class="collapsible-body"><span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptates repudiandae, dolor enim non et? Voluptas qui reprehenderit autem, pariatur harum nesciunt officiis dignissimos, architecto voluptates, aut, asperiores aperiam sequi fugiat!</span></div>
		</li>
	<?php endforeach; wp_reset_postdata(); ?>
</ul>
<?php endif; ?>