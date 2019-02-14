<?php
/**
 * Global Theme Settings
 *
 * @package    Secretum
 * @subpackage Core\Theme-Settings
 * @author     SecretumTheme <author@secretumtheme.com>
 * @copyright  2018-2019 Secretum
 * @license    https://github.com/SecretumTheme/secretum/blob/master/license.txt GPL-2.0
 * @link       https://github.com/SecretumTheme/secretum/blob/master/inc/theme-settings.php
 * @since      1.0.0
 */

namespace Secretum;

/**
 * WordPress Required Content Width
 *
 * @since 1.0.0
 *
 * @link https://codex.wordpress.org/Content_Width
 */
if ( true !== isset( $content_width ) ) {
	$content_width = secretum_mod( 'secretum_content_width' ) ? absint( secretum_mod( 'secretum_content_width', 'int' ) ) : 640;
}


/**
 * WordPress Theme Settings
 *
 * @since 1.0.0
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
		'secretum-navbar-top' 			=> __( 'Header Top Navbar (above header)', 'secretum' ),
		'secretum-navbar-copyright' 	=> __( 'Copyright Textual Menu', 'secretum' ),
	] );

	// Editor Stylesheet.
	add_theme_support( 'editor-styles' );
	add_editor_style( 'css/theme_editor.min.css' );

	// Add support for responsive embedded content.
	add_theme_support( 'responsive-embeds' );

	// Header Image Panel.
	add_theme_support( 'custom-header', [
		'flex-width' 	=> true,
		'width' 		=> 980,
		'flex-height' 	=> true,
		'height' 		=> 200,
		'video' 		=> true,
	] );

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

	// Load regular editor styles into the new block-based editor.
	add_theme_support( 'editor-styles' );

	// Load default block styles.
	add_theme_support( 'wp-block-styles' );

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
		'height' 		=> secretum_mod( 'custom_logo_height' ) ? secretum_mod( 'custom_logo_height', 'int' ) : '',
		'width' 		=> secretum_mod( 'custom_logo_width' ) ? secretum_mod( 'custom_logo_width', 'int' ) : '',
		'header-text' 	=> [ 'site-title', 'site-description' ],
		'flex-height' 	=> true,
		'flex-width' 	=> true,
	] );
} );
