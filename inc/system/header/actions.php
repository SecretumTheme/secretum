<?php
/**
 * Actions related to theme display or manipulation
 *
 * @package WordPress
 * @subpackage Secretum_Theme
 */


/**
 * Before Header Content
 *
 * @example do_action('secretum_header_before');
 *
 * @return string HTML 
 */
add_action('secretum_header_before', function() {
	// Display Header Top Area
	// @source inc/system/header/template-parts.php
	secretum_header_top();
}, 10, 0);



/**
 * Header Content
 *
 * @example do_action('secretum_header_before');
 *
 * @return string HTML 
 */
add_action('secretum_header', function() {
	// If Header Display Allowed
	if (!secretum_mod('header_status')) {
		// Navbar Menu Above Header
		// @source inc/system/primary-nav/template-parts.php
		echo secretum_primary_nav('secretum-navbar-primary-above');

		// If Setting, Get Custom Header
		if (secretum_mod('custom_headers')) {
			// Build Custom Header Query
			$query = new WP_Query(array(
			    'post_type' 	 => 'secretum_headers',
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
			}

		// No Custom Header
		} else {
			// Navbar Brand Logo & Primary Menu
			// @source inc/system/primary-nav/template-parts.php
			echo secretum_primary_nav_brand();
		}

		// Navbar Menu Below Header
		// @source inc/system/primary-nav/template-parts.php
		echo secretum_primary_nav('secretum-navbar-primary-below');
	}
}, 10, 0);


/**
 * After Header Content
 *
 * @example do_action('secretum_header_after');
 *
 * @return string HTML
 */
add_action('secretum_header_after', function() {
	// Display Featured Image Template
	// @source inc/system/header/template-parts.php
	secretum_featured_image();
}, 10, 0);
