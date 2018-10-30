<?php
/**
 * Actions related to theme display or manipulation
 *
 * @package WordPress
 * @subpackage Secretum_Theme
 */


/**
 * Frontpage Content
 * Displays custom frontpage if defined, else defaults to index
 * Displays custom heading and google map if defined
 *
 * @example do_action('secretum_frontpage');
 *
 * @return string HTML 
 */
add_action('secretum_frontpage', function() {
	// Custom Heading
	get_template_part('inc/system/frontpage/templates/heading');

	// If Setting, Get Custom Frontpages
	if (secretum_mod('custom_frontpages')) {
		// Build Custom Frontpage Query
		$query = new WP_Query(array(
		    'post_type' 	 => 'secretum_frontpages',
		    'post_status' 	 => 'publish',
		    'order' 		 => 'DESC',
		    'orderby' 		 => 'ID',
		    'posts_per_page' => 1,
		));

		// If Content
		if ($query->have_posts()) {
			// Display Custom Header
			while ($query->have_posts()) {
				$query->the_post();

		        // Return Content
		        echo do_shortcode(get_the_content(null, false));
			}

		    // Clear Post Data
		    wp_reset_postdata();

		// No Results, Default Index Template
		} else {
			get_template_part('inc/system/frontpage/templates/default');
		}

	// Default Index Template
	} else {
		get_template_part('inc/system/frontpage/templates/default');
	}

	// Google Map
	get_template_part('inc/system/frontpage/templates/map');
}, 10, 0);
