<?php
/**
 * Global Theme Settings
 *
 * @package Secretum
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
	// @about Load Theme Translated Strings
	load_theme_textdomain( 'secretum', SECRETUM_THEME_DIR . '/lang' );

	// @about Register Navigation Menus
	register_nav_menus( [
		'secretum-navbar-primary-below' => __( 'Primary Navbar Below Header', 'secretum' ),
		'secretum-navbar-primary-above' => __( 'Primary Navbar Above Header', 'secretum' ),
		'secretum-navbar-primary-left' 	=> __( 'Primary Navbar Left of Logo', 'secretum' ),
		'secretum-navbar-primary-right' => __( 'Primary Navbar Right of Logo', 'secretum' ),
		'secretum-navbar-top-left' 		=> __( 'Top Left Textual Menu', 'secretum' ),
		'secretum-navbar-top-right' 	=> __( 'Top Right Textual Menu', 'secretum' ),
		'secretum-navbar-copyright' 	=> __( 'Copyright Textual Menu', 'secretum' ),
	] );

	// @about Editor Stylesheet
	add_theme_support( 'editor-styles' );
	add_editor_style( 'css/theme_editor.min.css' );

	// @about Add support for responsive embedded content
	add_theme_support( 'responsive-embeds' );

	// @about Header Image Panel
	add_theme_support( 'custom-header' );

	// @about Background Image Panel
	add_theme_support( 'custom-background' );

	// @about Adjust Avatar Thumbnail Size
	add_image_size( 'secretum-thumbnail-avatar', 100, 100, true );

	// @about Featured Image Support
	add_image_size( 'secretum-featured-image', 2000, 1200, true );

	// @about WordPress to manage <title> tags
	add_theme_support( 'title-tag' );

	// @about Include RSS feed links to wp_head
	add_theme_support( 'automatic-feed-links' );

	// @about Enable support for Post Thumbnails on posts and pages.
	add_theme_support( 'post-thumbnails' );

	// @about Customizer Support
	add_theme_support( 'customize-selective-refresh-widgets' );

	// @about HTML5 Markup Support
	add_theme_support( 'html5', [
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	] );

	// @about Post Format Support
	add_theme_support( 'post-formats', [
		'aside',
		'audio',
		'image',
		'link',
		'quote',
		'status',
		'video',
	] );

	// @about Enable Custom Logo Support
	add_theme_support( 'custom-logo', [
		'height' 		=> secretum_mod( 'custom_logo_height' ) ? secretum_mod( 'custom_logo_height', 'int' ) : 75,
		'width' 		=> secretum_mod( 'custom_logo_width' ) ? secretum_mod( 'custom_logo_width', 'int' ) : 300,
		'header-text' 	=> [ 'site-title', 'site-description' ],
		'flex-height' 	=> true,
		'flex-width' 	=> true,
	] );

	// @about Customizer Theme Colors
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

		// @about Update Theme Colors Option
		update_option( 'secretum_theme_colors', $settings );
	}
} );
