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


/**
 * Setup Secretum Theme
 *
 * @since 1.0.0
 */
add_action( 'after_switch_theme', function() {
	// Fresh Install, Setup Secretum Customizer.
	if ( false === get_option( 'secretum' ) ) {
		update_option( 'secretum', [
			'site_identity_title_container_margin_bottom'	=> 'mb-0',
			'site_identity_title_container_padding_y'		=> 'py-0',
			'site_identity_title_textual_font_size'			=> 'text-32',
			'site_identity_title_textual_link_color'		=> 'color-primary-link',
			'site_identity_desc_textual_text_color'			=> 'color-secondary',
			'header_top_alignment'							=> 'ml-auto',
			'header_top_wrapper_background_color'			=> 'bg-whitish',
			'header_top_container_type'						=> '-fluid',
			'header_top_textual_font_size'					=> 'text-13',
			'header_top_textual_link_color'					=> 'color-gray-600-link',
			'header_top_textual_link_hover_color'			=> 'color-gray-600-hover',
			'header_top_items_text_alignment'				=> 'text-center',
			'header_top_items_margin_x'						=> 'mx-2',
			'header_top_items_padding_x'					=> 'px-2',
			'header_top_items_padding_y'					=> 'py-1',
			'header_wrapper_padding_y'						=> 'py-3',
			'primary_nav_wrapper_background_color'			=> 'bg-primary',
			'primary_nav_wrapper_padding_y'					=> 'py-0',
			'primary_nav_textual_font_size'					=> 'text-14',
			'primary_nav_textual_link_color'				=> 'color-whitish-link',
			'primary_nav_textual_link_hover_color'			=> 'color-white-hover',
			'primary_nav_items_border_type'					=> 'border-left',
			'primary_nav_items_border_color'				=> 'border-primary-light',
			'primary_nav_items_padding_y'					=> 'py-3',
			'primary_nav_items_padding_x'					=> 'px-3',
			'primary_nav_dropdown_background_color'			=> 'bg-primary',
			'primary_nav_dropdown_background_hover_color' 	=> 'bg-primary-light-hover',
			'primary_nav_dropdown_textual_font_size'		=> 'text-14',
			'primary_nav_dropdown_textual_link_color'		=> 'color-whitish-link',
			'primary_nav_dropdown_textual_link_hover_color'	=> 'color-white-hover',
			'primary_nav_toggler_alignment'					=> 'mr-auto',
			'primary_nav_toggler_font_size'					=> 'text-22',
			'primary_nav_toggler_background_color'			=> 'bg-white',
			'primary_nav_toggler_margin_x'					=> 'mx-0',
			'primary_nav_toggler_margin_y'					=> 'my-2',
			'primary_nav_toggler_border_type'				=> 'border-0',
			'primary_nav_cart_link_padding_t'				=> 'pt-2',
			'primary_nav_cart_icon_color'					=> 'color-light',
			'primary_nav_cart_icon_size'					=> 'text-22',
			'primary_nav_cart_count_color'					=> 'color-gray-500',
			'primary_nav_cart_count_size'					=> 'text-14',
			'body_wrapper_background_color'					=> 'bg-whitish',
			'featured_image_wrapper_margin_bottom'			=> 'mb-4',
			'entry_meta_tagslinks_status'					=> '1',
			'entry_wrapper_background_color'				=> 'bg-white',
			'entry_wrapper_padding_x'						=> 'px-4',
			'entry_wrapper_padding_y'						=> 'py-4',
			'entry_wrapper_margin_top'						=> 'mt-4',
			'entry_wrapper_margin_bottom'					=> 'mb-4',
			'sidebar_location'								=> 'right',
			'sidebar_wrapper_background_color'				=> 'bg-white',
			'sidebar_wrapper_padding_x'						=> 'px-4',
			'sidebar_wrapper_padding_y'						=> 'py-4',
			'sidebar_wrapper_margin_top'					=> 'mt-4',
			'sidebar_wrapper_margin_bottom'					=> 'mb-4',
			'sidebar_container_margin_bottom'				=> 'mb-5',
			'footer_wrapper_background_color'				=> 'bg-gray-100',
			'footer_wrapper_padding_y'						=> 'py-4',
			'footer_wrapper_border_type'					=> 'border-top',
			'footer_wrapper_border_color'					=> 'border-gray-300',
			'copyright_wrapper_background_color'			=> 'bg-white',
			'copyright_wrapper_padding_y'					=> 'py-3',
			'copyright_wrapper_border_type'					=> 'border-top',
			'copyright_wrapper_border_color'				=> 'border-gray-300',
			'copyright_textual_text_color'					=> 'color-gray-600',
			'copyright_textual_link_color'					=> 'color-gray-700-link',
			'copyright_textual_link_hover_color'			=> 'color-gray-800-hover',
			'copyright_nav_alignment'						=> 'mx-auto',
			'copyright_nav_wrapper_padding_x'				=> 'px-0',
			'copyright_nav_wrapper_padding_y'				=> 'py-2',
			'copyright_nav_textual_font_size'				=> 'text-13',
			'copyright_nav_textual_link_color'				=> 'color-gray-600-link',
			'copyright_nav_items_text_alignment'			=> 'text-center',
			'copyright_nav_items_margin_y'					=> 'my-0',
			'copyright_nav_items_margin_x'					=> 'mx-1',
			'copyright_nav_items_padding_y'					=> 'py-2',
			'copyright_nav_items_padding_x'					=> 'px-2',
			'frontpage_wrapper_background_color'			=> 'bg-gray-900',
			'scrolltop_textual_text_color'					=> 'color-primary',
			'scrolltop_textual_font_size'					=> 'text-16',
			'scrolltop_container_background_color'			=> 'bg-gray-200',
			'scrolltop_container_background_hover_color'	=> 'bg-gray-300-hover',
			'scrolltop_container_padding_x'					=> 'px-3',
			'scrolltop_container_padding_y'					=> 'py-2',
			'scrolltop_container_border_radius'				=> 'rounded-circle',
		] );
	}
} );