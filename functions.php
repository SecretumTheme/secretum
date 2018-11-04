<?php
/**
 * Secretum Theme: Theme functions and definitions
 *
 * @package WordPress
 * @subpackage Secretum_Theme
 */

// Constants
define('SECRETUM_DIR', 				dirname(__FILE__));
define('SECRETUM_BASE_URL', 		esc_url(home_url()));
define('SECRETUM_INC', 				SECRETUM_DIR . '/inc');

define('SECRETUM_THEME_VERSION', 	'0.0.2');
define('SECRETUM_WP_MIN_VERSION', 	'3.8');

define('SECRETUM_THEME_FILE', 		__FILE__);
define('SECRETUM_THEME_DIR', 		dirname(__FILE__));
define('SECRETUM_THEME_BASE', 		plugin_basename(__FILE__));
define('SECRETUM_THEME_URL', 		get_template_directory_uri());
define('SECRETUM_STYLE_URL', 		get_stylesheet_directory_uri());

define('SECRETUM_MENU_NAME', 		__('Theme Admin', 'secretum'));
define('SECRETUM_PAGE_NAME', 		__('Secretum Theme', 'secretum'));
define('SECRETUM_PAGE_ABOUT', 		__('A Custom Theme For WordPress', 'secretum'));
define('SECRETUM_THEME_NAME', 		'secretum');


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
include_once(SECRETUM_INC . '/system/customizer/register.php');


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
if (secretum_mod('custom_headers')) {
	include_once(SECRETUM_INC . '/system/header/posttype.php');
}
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
if (secretum_mod('custom_frontpages')) {
	include_once(SECRETUM_INC . '/system/frontpage/posttype.php');
}
include_once(SECRETUM_INC . '/system/frontpage/functions.php');


// Entry
include_once(SECRETUM_INC . '/system/entry/functions.php');


// Footer
include_once(SECRETUM_INC . '/system/footer/actions.php');
if (secretum_mod('custom_footers')) {
	include_once(SECRETUM_INC . '/system/footer/posttype.php');
}
include_once(SECRETUM_INC . '/system/footer/functions.php');


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


// Documentation: Post Type & Taxonomies
if (secretum_mod('feature_documentation_display')) {
	include_once(SECRETUM_INC . '/system/feature/documentation/functions.php');
	include_once(SECRETUM_INC . '/system/feature/documentation/posttype.php');
	include_once(SECRETUM_INC . '/system/feature/documentation/taxonomy.php');

	// Category Widget
	if(!secretum_mod('feature_documentation_category_widget')) {
		include_once(SECRETUM_INC . '/system/feature/documentation/widgets/categories.php');

		add_action('widgets_init', function() {
			register_widget('SecretumCategoriesWidget');
		});
	}

	// Recent Post Widget
	if(!secretum_mod('feature_documentation_recent_widget')) {
		include_once(SECRETUM_INC . '/system/feature/documentation/widgets/recent.php');

		add_action('widgets_init', function() {
			register_widget('SecretumRecentWidget');
		});
	}
}


// Testimonial: Post Type & Widget
if (secretum_mod('feature_testimonial_display')) {
	include_once(SECRETUM_INC . '/system/feature/testimonial/posttype.php');

	// Recent Post Widget
	if(!secretum_mod('feature_testimonial_query_widget')) {
		include_once(SECRETUM_INC . '/system/feature/testimonial/widgets/query.php');

		add_action('widgets_init', function() {
			register_widget('SecretumTestimonialQueryWidget');
		});
	}
}


// Theme Update Checker
include_once(SECRETUM_INC . '/puc/plugin-update-checker.php');
$secretum = Puc_v4_Factory::buildUpdateChecker(
	'https://raw.githubusercontent.com/SecretumTheme/secretum/master/updates.json',
	SECRETUM_THEME_FILE,
	'secretum'
);
