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
	// Navbar Menu Above Header
	// @source inc/system/primary-nav/template-parts.php
	echo secretum_primary_nav('secretum-navbar-primary-above');

	// If Header Display Allowed
	if (!secretum_mod('header_status')) {

		// If Setting, Get Custom Header
		if (secretum_mod('custom_headers')) {
			// Secretum Headers & Footers Plugin
			echo do_action('secretum_hf', 'headers');

		// No Custom Header
		} else {
			// Navbar Brand Logo & Primary Menu
			// @source inc/system/primary-nav/template-parts.php
			echo secretum_header_display();
		}
	}

	// Navbar Menu Below Header
	// @source inc/system/primary-nav/template-parts.php
	echo secretum_primary_nav('secretum-navbar-primary-below');
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
	echo secretum_featured_image();
}, 10, 0);
