<?php
/**
 * Global Theme Settings
 *
 * @package    Secretum
 * @subpackage Theme-Settings
 * @author     SecretumTheme <author@secretumtheme.com>
 * @copyright  2018-2019 Secretum
 * @license    https://github.com/SecretumTheme/secretum/blob/master/license.txt GPL-2.0
 * @link       https://github.com/SecretumTheme/secretum/blob/master/inc/theme-settings.php
 */

namespace Secretum;

/**
 * WordPress Required Content Width
 *
 * @link https://codex.wordpress.org/Content_Width
 */
if ( ! isset( $content_width ) ) {
	$content_width = secretum_mod( 'secretum_content_width' ) ? absint( secretum_mod( 'secretum_content_width', 'int' ) ) : 640;
}


/**
 * WordPress Theme Settings
 */
add_action( 'after_setup_theme', function() {
	// Load Theme Translated Strings.
	load_theme_textdomain( 'secretum', SECRETUM_THEME_DIR . '/lang' );

	// Register Navigation Menus.
	register_nav_menus( [
		'secretum-navbar-primary-below' => __( 'Primary Navbar Below Header', 'secretum' ),
		'secretum-navbar-primary-above' => __( 'Primary Navbar Above Header', 'secretum' ),
		'secretum-navbar-primary-left' 	=> __( 'Primary Navbar Left of Logo', 'secretum' ),
		'secretum-navbar-primary-right' => __( 'Primary Navbar Right of Logo', 'secretum' ),
		'secretum-navbar-top-left' 		=> __( 'Top Left Textual Menu', 'secretum' ),
		'secretum-navbar-top-right' 	=> __( 'Top Right Textual Menu', 'secretum' ),
		'secretum-navbar-copyright' 	=> __( 'Copyright Textual Menu', 'secretum' ),
	] );

	// Editor Stylesheet.
	add_theme_support( 'editor-styles' );
	add_editor_style( 'css/theme_editor.min.css' );

	// Add support for responsive embedded content.
	add_theme_support( 'responsive-embeds' );

	// Header Image Panel.
	add_theme_support( 'custom-header' );

	// Background Image Panel.
	add_theme_support( 'custom-background' );

	// Adjust Avatar Thumbnail Size.
	add_image_size( 'secretum-thumbnail-avatar', 100, 100, true );

	// Featured Image Support.
	add_image_size( 'secretum-featured-image', 2000, 1200, true );

	// WordPress to manage <title> tags.
	add_theme_support( 'title-tag' );

	// Include RSS feed links to wp_head.
	add_theme_support( 'automatic-feed-links' );

	// Enable support for Post Thumbnails on posts and pages.
	add_theme_support( 'post-thumbnails' );

	// Customizer Support.
	add_theme_support( 'customize-selective-refresh-widgets' );

	// HTML5 Markup Support.
	add_theme_support( 'html5', [
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	] );

	// Post Format Support.
	add_theme_support( 'post-formats', [
		'aside',
		'audio',
		'image',
		'link',
		'quote',
		'status',
		'video',
	] );

	// Enable Custom Logo Support.
	add_theme_support( 'custom-logo', [
		'height' 		=> secretum_mod( 'custom_logo_height' ) ? secretum_mod( 'custom_logo_height', 'int' ) : 75,
		'width' 		=> secretum_mod( 'custom_logo_width' ) ? secretum_mod( 'custom_logo_width', 'int' ) : 300,
		'header-text' 	=> [ 'site-title', 'site-description' ],
		'flex-height' 	=> true,
		'flex-width' 	=> true,
	] );

	// Customizer Theme Colors.
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
