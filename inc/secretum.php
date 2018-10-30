<?php
/**
 * Secretum Theme Core Includes
 *
 * @package WordPress
 * @subpackage Secretum_Theme
 */


// Secretum Settings Option
include_once(SECRETUM_INC . '/secretum-mod.php');


// Secretum Text Translation Filter
include_once(SECRETUM_INC . '/secretum-text.php');


// WP Admin Only
if (is_admin()) {
	// WP Admin Area Settings
	include_once(SECRETUM_INC . '/admin-settings.php');

	// WP Visual Editor Settings
	include_once(SECRETUM_INC . '/editor.php');
}


// WordPress Customizer
//include_once(SECRETUM_INC . '/customizer/customizer.php');
include_once(SECRETUM_INC . '/system/customizer.php');


// Theme Settings
include_once(SECRETUM_INC . '/theme-settings.php');


// Template Styling Filters
include_once(SECRETUM_INC . '/template-filters.php');


// Template Styling Functions
include_once(SECRETUM_INC . '/template-functions.php');


// Enqueue Scripts
include_once(SECRETUM_INC . '/enqueue.php');


// Shortcodes
include_once(SECRETUM_INC . '/shortcode/shortcodes.php');


// Register Widget Areas
include_once(SECRETUM_INC . '/system/widgets/widgets-init.php');


// WordPress Nav Menus
include_once(SECRETUM_INC . '/system/menus/functions.php');


// Header
include_once(SECRETUM_INC . '/system/header/actions.php');
include_once(SECRETUM_INC . '/system/header/posttypes.php');
include_once(SECRETUM_INC . '/system/header/functions.php');
include_once(SECRETUM_INC . '/system/header/template-parts.php');


// Body
include_once(SECRETUM_INC . '/system/body/functions.php');


// Sidebars
include_once(SECRETUM_INC . '/system/sidebars/functions.php');
if (is_admin()) {
	include_once(SECRETUM_INC . '/system/sidebars/metabox.php');
	new SecretumMetaboxSidebars;
}


// Front-page
include_once(SECRETUM_INC . '/system/frontpage/actions.php');
include_once(SECRETUM_INC . '/system/frontpage/posttypes.php');
include_once(SECRETUM_INC . '/system/frontpage/functions.php');


// Entry
include_once(SECRETUM_INC . '/system/entry/functions.php');


// Footer
include_once(SECRETUM_INC . '/system/footer/actions.php');
include_once(SECRETUM_INC . '/system/footer/posttypes.php');
include_once(SECRETUM_INC . '/system/footer/functions.php');
include_once(SECRETUM_INC . '/system/footer/template-parts.php');


// Copyright
include_once(SECRETUM_INC . '/system/copyright/actions.php');
include_once(SECRETUM_INC . '/system/copyright/functions.php');
include_once(SECRETUM_INC . '/system/copyright/template-parts.php');


// Copyright Nav
include_once(SECRETUM_INC . '/system/copyright-nav/functions.php');
include_once(SECRETUM_INC . '/system/copyright-nav/template-parts.php');


// Primary Navwalker
include_once(SECRETUM_INC . '/navs/class-wp-bootstrap-navwalker.php');


// WP Bootstrap 4 Pagination
include_once(SECRETUM_INC . '/navs/wp_bootstrap_pagination.php');


// If WooCommerce
if (class_exists('woocommerce')) {
	// WooCommerce Settings
	include_once(SECRETUM_INC . '/woocommerce.php');

	// If WooCommerce Bookings
	if (class_exists('WC_Bookings')) {
		// WooCommerce Bookings Settings
		include_once(SECRETUM_INC . '/woocommerce-bookings.php');

	}
}


// Include Custom Theme Features
include_once(SECRETUM_INC . '/feature/features.php');


// Theme Update Checker
include_once(SECRETUM_INC . '/puc/plugin-update-checker.php');
$secretum = Puc_v4_Factory::buildUpdateChecker(
	'https://raw.githubusercontent.com/SecretumTheme/secretum/master/updates.json',
	SECRETUM_THEME_FILE,
	'secretum'
);
