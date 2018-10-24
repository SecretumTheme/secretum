<?php
/**
 * Actions related to theme display or manipulation
 *
 * @package WordPress
 * @subpackage Secretum_Theme
 */


/**
 * Copyright Content
 *
 * @example do_action('secretum_copyright');
 *
 * @return string HTML 
 */
add_action('secretum_copyright', function() {
	// If Copyright Display Allowed
	if (!secretum_mod('copyright_status')) {
		// Display Copyright HTML
		echo secretum_copyright_display();
	}
}, 10, 0);


/**
 * After Copyright Content
 *
 * @example do_action('secretum_copyright_after');
 *
 * @return string HTML
 */
add_action('secretum_copyright_after', function() {
	// Display Scroll To Top Icon
	echo secretum_scroll_top();
}, 10, 0);
