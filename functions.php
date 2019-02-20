<?php
/**
 * Secretum Theme
 *
 * @package    Secretum
 * @subpackage Theme\Functions
 * @author     SecretumTheme <author@secretumtheme.com>
 * @copyright  2018-2019 Secretum
 * @license    https://github.com/SecretumTheme/secretum/blob/master/license.txt GPL-2.0
 * @link       https://github.com/SecretumTheme/secretum/blob/master/functions.php
 * @since      1.0.0
 */

namespace Secretum;

// Constants.
define( 'SECRETUM_THEME_VERSION', 	'1.1.0' );

define( 'SECRETUM_DIR', 			dirname( __FILE__ ) );
define( 'SECRETUM_BASE_URL', 		esc_url( home_url() ) );
define( 'SECRETUM_INC', 			SECRETUM_DIR . '/inc' );

define( 'SECRETUM_THEME_FILE', 		__FILE__ );
define( 'SECRETUM_THEME_DIR', 		dirname( __FILE__ ) );
define( 'SECRETUM_THEME_BASE', 		plugin_basename( __FILE__ ) );
define( 'SECRETUM_THEME_URL', 		get_template_directory_uri() );
define( 'SECRETUM_STYLE_URL', 		get_stylesheet_directory_uri() );

define( 'SECRETUM_MENU_NAME', 		__( 'Theme Admin', 'secretum' ) );
define( 'SECRETUM_PAGE_NAME', 		__( 'Secretum Theme', 'secretum' ) );
define( 'SECRETUM_PAGE_ABOUT', 		__( 'A Custom Theme For WordPress', 'secretum' ) );
define( 'SECRETUM_THEME_NAME', 		'secretum' );


// PHP & WordPress Version Compare Checks.
require_once SECRETUM_INC . '/versions.php';


/**
 * Register Secretum Classes
 *
 * @param string $class Loaded Classes.
 *
 * @since 1.0.0
 */
function secretum_register_classes( $class ) {
	// Namespace Prefix.
	$prefix = 'Secretum\\';

	// Move To Next Rgistered autoloader.
	$len = strlen( $prefix );
	if ( strncmp( $prefix, $class, $len ) !== 0 ) {
		return;
	}

	// Build Class Name.
	$relative_class = strtolower( str_replace( '_', '-', substr( $class, $len ) ) );

	// Replace Dir Separators and Replace Namespace with Base Dir.
	$file = __DIR__ . '/inc/classes/class-' . str_replace( '\\', '/', $relative_class ) . '.php';

	// Include File.
	if ( true === file_exists( $file ) ) {
		require $file;
	}

}//end secretum_register_classes()

spl_autoload_register( 'Secretum\secretum_register_classes' );


// Include Theme Files.
require_once SECRETUM_INC . '/customize/default-settings.php';
require_once SECRETUM_INC . '/secretum-mod.php';
require_once SECRETUM_INC . '/secretum-icon.php';
require_once SECRETUM_INC . '/enqueue.php';
require_once SECRETUM_INC . '/theme-settings.php';
require_once SECRETUM_INC . '/template-filters.php';
require_once SECRETUM_INC . '/template-functions/author.php';
require_once SECRETUM_INC . '/template-functions/copyright.php';
require_once SECRETUM_INC . '/template-functions/entry.php';
require_once SECRETUM_INC . '/template-functions/featured-image.php';
require_once SECRETUM_INC . '/template-functions/frontpage.php';
require_once SECRETUM_INC . '/template-functions/header.php';
require_once SECRETUM_INC . '/template-functions/post-navigation.php';
require_once SECRETUM_INC . '/template-functions/sidebars.php';
require_once SECRETUM_INC . '/template-functions.php';
require_once SECRETUM_INC . '/template-classes.php';

// Include Tiny Mce Editor Features.
if ( true === is_admin() && false === is_customize_preview() ) {
	require_once SECRETUM_INC . '/editor.php';
}

// WooCommerce Features.
if ( true === secretum_is_woocomerce() ) {
	require_once SECRETUM_INC . '/woocommerce.php';

	if ( true === secretum_is_woobookings() ) {
		require_once SECRETUM_INC . '/woocommerce-bookings.php';
	}
}


/**
 * Initialize Theme Widgets.
 *
 * @since 1.0.0
 */
function secretum_widgets_init() {
	require_once SECRETUM_INC . '/sidebars/primary.php';
	require_once SECRETUM_INC . '/sidebars/header.php';
	require_once SECRETUM_INC . '/sidebars/footer.php';
	require_once SECRETUM_INC . '/sidebars/woocommerce.php';
	require_once SECRETUM_INC . '/sidebars/backup.php';

}//end secretum_widgets_init()

add_action( 'widgets_init', 'Secretum\secretum_widgets_init' );


/**
 * WordPress Customizer.
 *
 * @param object $wp_customize WordPress Customize Object.
 *
 * @since 1.0.0
 */
function secretum_customize_register( $wp_customize ) {
	// Sanitizers and Helper Functions.
	require_once SECRETUM_INC . '/customize/customizer-functions.php';

	// Controller Setting Arrays.
	require_once SECRETUM_INC . '/customize/choices/alignments.php';
	require_once SECRETUM_INC . '/customize/choices/borders.php';
	require_once SECRETUM_INC . '/customize/choices/colors.php';
	require_once SECRETUM_INC . '/customize/choices/containers.php';
	require_once SECRETUM_INC . '/customize/choices/font-control.php';
	require_once SECRETUM_INC . '/customize/choices/margins.php';
	require_once SECRETUM_INC . '/customize/choices/paddings.php';
	require_once SECRETUM_INC . '/customize/choices/sizes.php';
	require_once SECRETUM_INC . '/customize/choices/stylesheets.php';

	// Default Theme Settings.
	$defaults = secretum_customizer_default_settings();

	// Start Secretum Customizer.
	$customizer = new \Secretum\Customize_Customizer( $wp_customize );
	$wrapper 	= new \Secretum\Customize_Wrapper( $customizer, $defaults );
	$container 	= new \Secretum\Customize_Container( $customizer, $defaults );
	$textuals 	= new \Secretum\Customize_Textuals( $customizer, $defaults );
	$borders 	= new \Secretum\Customize_Borders( $customizer, $defaults );
	$navitems 	= new \Secretum\Customize_NavItems( $customizer, $defaults );
	$dropdown 	= new \Secretum\Customize_Dropdown( $customizer, $defaults );

	// Include Panels, Sections, and Settings.
	require_once SECRETUM_INC . '/customize/sections/theme.php';
	require_once SECRETUM_INC . '/customize/sections/site-identity.php';
	require_once SECRETUM_INC . '/customize/sections/header-top.php';
	require_once SECRETUM_INC . '/customize/sections/header.php';
	require_once SECRETUM_INC . '/customize/sections/primary-nav.php';
	require_once SECRETUM_INC . '/customize/sections/body.php';
	require_once SECRETUM_INC . '/customize/sections/featured-image.php';
	require_once SECRETUM_INC . '/customize/sections/entry.php';
	require_once SECRETUM_INC . '/customize/sections/sidebar.php';
	require_once SECRETUM_INC . '/customize/sections/footer.php';
	require_once SECRETUM_INC . '/customize/sections/copyright.php';
	require_once SECRETUM_INC . '/customize/sections/copyright-nav.php';
	require_once SECRETUM_INC . '/customize/sections/frontpage.php';
	require_once SECRETUM_INC . '/customize/sections/extras.php';

	// Text Translations.
	$translate = new \Secretum\Customize_Translations( $wp_customize );
	$translate->settings();

}//end secretum_customize_register()

add_action( 'customize_register', 'Secretum\secretum_customize_register' );


// Secretum Updater Plugin.
if ( true === defined( 'SECRETUM_UPDATER' ) && true === file_exists( SECRETUM_UPDATER ) ) {
	if ( false === class_exists( 'Puc_v4p4_Autoloader' ) ) {
		require_once SECRETUM_UPDATER;
	}

	$secretum_theme_updater = \Puc_v4_Factory::buildUpdateChecker(
		'https://raw.githubusercontent.com/SecretumTheme/secretum/master/updates.json',
		SECRETUM_THEME_FILE,
		'secretum'
	);
}
