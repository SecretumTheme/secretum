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

define('SECRETUM_THEME_VERSION', 	'0.0.1');
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


// Secretum Theme Includes
include_once(SECRETUM_INC . '/secretum.php');
