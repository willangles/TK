<?php
/**
 * This file adds the Front Page Template to any Genesis Child Theme.
 */
 
add_action('genesis_entry_content', 'service_posts');
function service_posts(){
	 $loop = new WP_Query( array( 'post_type' => 'post', 'posts_per_page' => -1, 'category_name' => 'Services' ) );
		while ( $loop->have_posts() ) : $loop->the_post();
		$thumb_id = get_post_thumbnail_id();
		$thumb_url_array = wp_get_attachment_image_src($thumb_id, 'thumbnail-size', true);
		$thumb_url = $thumb_url_array[0];
		echo	'<div class="service-container">';
		echo '<div class="service-img" style="background: url('. $thumb_url .'); background-size: cover;"></div>';
		echo '<div class="service-content">';
		echo '<h3 class="service-title">';
		echo the_title();
		echo '</h3>';
		echo the_content();
		echo '</div>';
		echo '</div>';
		endwhile; wp_reset_query();
}
 
 
genesis();