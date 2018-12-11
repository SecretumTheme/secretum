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
		// Secretum Frontpages Plugin
		echo do_action('secretum_fp');

	// Default Index Template
	} else {
		get_template_part('inc/system/frontpage/templates/body');
	}

	// Google Map
	get_template_part('inc/system/frontpage/templates/map');
}, 10, 0);
