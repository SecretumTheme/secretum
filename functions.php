<?php
/**
 * Secretum Theme
 *
 * @package    Secretum
 * @subpackage Theme\functions.php
 * @author     SecretumTheme <author@secretumtheme.com>
 * @copyright  2018-2019 Secretum
 * @license    https://github.com/SecretumTheme/secretum/blob/master/license.txt GPL-2.0
 * @link       https://github.com/SecretumTheme/secretum/blob/master/functions.php
 */

namespace Secretum;

// Constants.
define( 'SECRETUM_DIR', 			dirname( __FILE__ ) );
define( 'SECRETUM_BASE_URL', 		esc_url( home_url() ) );
define( 'SECRETUM_INC', 			SECRETUM_DIR . '/inc' );

define( 'SECRETUM_THEME_VERSION', 	'0.0.19' );
define( 'SECRETUM_WP_MIN_VERSION', 	'3.8' );

define( 'SECRETUM_THEME_FILE', 		__FILE__ );
define( 'SECRETUM_THEME_DIR', 		dirname( __FILE__ ) );
define( 'SECRETUM_THEME_BASE', 		plugin_basename( __FILE__ ) );
define( 'SECRETUM_THEME_URL', 		get_template_directory_uri() );
define( 'SECRETUM_STYLE_URL', 		get_stylesheet_directory_uri() );

define( 'SECRETUM_MENU_NAME', 		__( 'Theme Admin', 'secretum' ) );
define( 'SECRETUM_PAGE_NAME', 		__( 'Secretum Theme', 'secretum' ) );
define( 'SECRETUM_PAGE_ABOUT', 		__( 'A Custom Theme For WordPress', 'secretum' ) );
define( 'SECRETUM_THEME_NAME', 		'secretum' );


// Register Classes.
spl_autoload_register( function ( $class ) {
	// Namespace Prefix.
	$prefix = 'Secretum\\';

	// Base Dir For Namespace Prefix.
	$base_dir = __DIR__ . '/inc/classes/';

	// Move To Next Rgistered autoloader.
	$len = strlen( $prefix );
	if ( strncmp( $prefix, $class, $len ) !== 0 ) {
		return;
	}

	// Build Class Name.
	$relative_class = substr( $class, $len );

	// Replace Dir Separators & Replace Namespace with Base Dir.
	$file = $base_dir . 'class-' . str_replace( '\\', '/', strtolower( $relative_class ) ) . '.php';

	// Include File.
	if ( file_exists( $file ) === true ) {
		require $file;
	}
} );


// Include Theme Files.
require_once  SECRETUM_INC . '/customize/default-settings.php';
require_once  SECRETUM_INC . '/secretum-mod.php';
require_once  SECRETUM_INC . '/secretum-text.php';
require_once  SECRETUM_INC . '/secretum-icon.php';
require_once  SECRETUM_INC . '/enqueue.php';
require_once  SECRETUM_INC . '/editor.php';
require_once  SECRETUM_INC . '/theme-settings.php';
require_once  SECRETUM_INC . '/template-functions.php';
require_once  SECRETUM_INC . '/template-filters.php';
require_once  SECRETUM_INC . '/template-functions/author.php';
require_once  SECRETUM_INC . '/template-functions/body.php';
require_once  SECRETUM_INC . '/template-functions/copyright-nav.php';
require_once  SECRETUM_INC . '/template-functions/copyright.php';
require_once  SECRETUM_INC . '/template-functions/copyright-nav.php';
require_once  SECRETUM_INC . '/template-functions/entry.php';
require_once  SECRETUM_INC . '/template-functions/featured-image.php';
require_once  SECRETUM_INC . '/template-functions/footer.php';
require_once  SECRETUM_INC . '/template-functions/frontpage.php';
require_once  SECRETUM_INC . '/template-functions/globals.php';
require_once  SECRETUM_INC . '/template-functions/header-top.php';
require_once  SECRETUM_INC . '/template-functions/header.php';
require_once  SECRETUM_INC . '/template-functions/post-navigation.php';
require_once  SECRETUM_INC . '/template-functions/primary-nav.php';
require_once  SECRETUM_INC . '/template-functions/scrolltop.php';
require_once  SECRETUM_INC . '/template-functions/sidebars.php';
require_once  SECRETUM_INC . '/template-functions/site-identity.php';

if ( is_admin() ) {
	require_once  SECRETUM_INC . '/editor.php';

	// Theme Admin Area.
	// Building Section: add_action( 'admin_menu', '\Secretum\ThemePage::instance' );.
}

if ( class_exists( 'woocommerce' ) ) {
	require_once  SECRETUM_INC . '/woocommerce.php';

	if ( class_exists( 'WC_Bookings' ) ) {
		require_once  SECRETUM_INC . '/woocommerce-bookings.php';
	}
}


// Initialize Theme Widgets.
add_action( 'widgets_init', function() {
	require_once  SECRETUM_INC . '/sidebars/primary.php';
	require_once  SECRETUM_INC . '/sidebars/header.php';
	require_once  SECRETUM_INC . '/sidebars/footer.php';
	require_once  SECRETUM_INC . '/sidebars/woocommerce.php';
	require_once  SECRETUM_INC . '/sidebars/backup.php';
} );


// Initialize Admin Features.
add_action( 'admin_init', function() {
	// Add Metabox Sidebars.
	new MetaboxSidebars;
} );


// WordPress Customizer.
add_action( 'customize_register', function( $wp_customize ) {
	// Remove Sections.
	$wp_customize->remove_section( 'colors' );
	$wp_customize->remove_section( 'title_tagline' );
	$wp_customize->remove_section( 'header_image' );
	$wp_customize->remove_section( 'background_image' );

	// Register Custom Customizer Sections Type
	// Moved to branch: feature-customizer-sections | $wp_customize->register_section_type( '\Secretum\CustomizerSections' );.
	// Blank on purpose.
	// Controller Setting Arrays.
	require_once  SECRETUM_INC . '/customize/choices/alignments.php';
	require_once  SECRETUM_INC . '/customize/choices/borders.php';
	require_once  SECRETUM_INC . '/customize/choices/colors.php';
	require_once  SECRETUM_INC . '/customize/choices/containers.php';
	require_once  SECRETUM_INC . '/customize/choices/font-control.php';
	require_once  SECRETUM_INC . '/customize/choices/margins.php';
	require_once  SECRETUM_INC . '/customize/choices/paddings.php';
	require_once  SECRETUM_INC . '/customize/choices/sizes.php';
	require_once  SECRETUM_INC . '/customize/choices/theme-colors.php';

	// Customizer Fallback & Sanitize Functions.
	require_once  SECRETUM_INC . '/customize/customizer-functions.php';

	// Start Secretum Customizer Class.
	$customizer = \Secretum\Customizer::instance( $wp_customize );

	// Get Default Settings.
	$default = secretum_customizer_default_settings();

	// Register Secretum Pro Section.
	// Moved to branch: feature-customizer-sections.
	/**
	$wp_customize->add_section(
		new \Secretum\CustomizerSections(
			$wp_customize,
			'secretum_pro_section',
			array(
				'title'		 => __( 'Secretum Pro!', 'secretum' ),
				'button_text'   => __( 'Instant Upgrade!', 'secretum' ),
				'button_url'	=> 'https://secretumtheme.com/secretum/',
				'button_class'  => 'button button-primary alignright',
				'section_class' => 'secretum-pro-section',
				'priority'	  => 0,
			)
		)
	);
	*/

	// Include Settings.
	require_once  SECRETUM_INC . '/customize/settings/globals.php';
	require_once  SECRETUM_INC . '/customize/settings/site-identity.php';
	require_once  SECRETUM_INC . '/customize/settings/header-top.php';
	require_once  SECRETUM_INC . '/customize/settings/header.php';
	require_once  SECRETUM_INC . '/customize/settings/primary-nav.php';
	require_once  SECRETUM_INC . '/customize/settings/body.php';
	require_once  SECRETUM_INC . '/customize/settings/featured-image.php';
	require_once  SECRETUM_INC . '/customize/settings/entry.php';
	require_once  SECRETUM_INC . '/customize/settings/sidebar.php';
	require_once  SECRETUM_INC . '/customize/settings/footer.php';
	require_once  SECRETUM_INC . '/customize/settings/copyright.php';
	require_once  SECRETUM_INC . '/customize/settings/copyright-nav.php';
	require_once  SECRETUM_INC . '/customize/settings/frontpage.php';
	require_once  SECRETUM_INC . '/customize/settings/extras.php';
	require_once  SECRETUM_INC . '/customize/settings/translations.php';

	// Register Documentation Section.
	// Moved to branch: feature-customizer-sections.
	/**
	$wp_customize->add_section(
		new \Secretum\CustomizerSections(
			$wp_customize,
			'secretum_docs_section',
			array(
				'title'		 => __( 'Secretum Documentation', 'secretum' ),
				'button_text'   => __( 'View', 'secretum' ),
				'button_url'	=> 'https://secretumtheme.com/secretum/docs/',
				'button_class'  => 'button button-secondary alignright',
				'section_class' => 'secretum-docs-section',
				'priority'	  => 10000,
			)
		)
	);
	*/
} );


// Secretum Updater Plugin.
if ( defined( 'SECRETUM_UPDATER' ) === true && file_exists( SECRETUM_UPDATER ) === true ) {
	if ( class_exists( 'Puc_v4p4_Autoloader' ) === false ) {
		require_once  SECRETUM_UPDATER;
	}

	$secretum_theme_updater = \Puc_v4_Factory::buildUpdateChecker(
		'https://raw.githubusercontent.com/SecretumTheme/secretum/master/updates.json',
		SECRETUM_THEME_FILE,
		'secretum'
	);
}


// Theme Setup - Save Theme Color CSS Files.
add_action( 'after_switch_theme', function() {
	if ( ! get_option( 'secretum_theme_colors' ) ) {
		$files = array();
		$files = scandir( SECRETUM_DIR . '/css/', 1 );
		$folders = array_diff( $files, array( 'theme_editor.css', 'theme.min.css', 'theme.css.map', 'theme.css', '..', '.' ) );

		$settings = array();
		foreach ( $folders as $dirname ) {
			$ampersand = str_replace( '_',  __( ' Primary', 'secretum' ) . ' & ', esc_attr( $dirname ) );
			$spaced = str_replace( '-', ' ', $ampersand );
			$name = ucwords( $spaced ) . __( ' Secondary', 'secretum' );
			$settings[ $dirname ] = $name;
		}

		// Update Theme Colors Option.
		update_option( 'secretum_theme_colors', $settings );
	}
} );
