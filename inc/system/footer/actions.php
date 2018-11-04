<?php
/**
 * Actions related to theme display or manipulation
 *
 * @package WordPress
 * @subpackage Secretum_Theme
 */


/**
 * Footer Content
 *
 * @example do_action('secretum_footer');
 *
 * @return string HTML
 */
add_action('secretum_footer', function() {
	// If Footer Display Allowed
	if (!secretum_mod('footer_status')) {
		// If Setting, Get Custom Footer
		if (secretum_mod('custom_footers')) {
			// Build Custom Footer Query
			$query = new WP_Query(array(
			    'post_type' 	 => 'secretum_footers',
			    'post_status' 	 => 'publish',
			    'order' 		 => 'DESC',
			    'orderby' 		 => 'ID',
			    'posts_per_page' => 1,
			));

			// If Content
			if ($query->have_posts()) {
				// Display Custom Footer
				while ($query->have_posts()) {
					$query->the_post();

			        // Return Content
			        echo do_shortcode(get_the_content(null, false));
				}

			    // Clear Post Data
			    wp_reset_postdata();

			// Default Template, No Custom Footer Published
			} else {
				// Display Footer Template
				get_template_part('inc/system/footer/templates/footer');
			}

		// Default Template, No Custom Footer
		} else {
			// Display Footer Template
			get_template_part('inc/system/footer/templates/footer');
		}
	}
}, 10, 0);
