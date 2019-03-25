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
function secretum_setup_theme() {
	// Load Theme Translated Strings.
	load_theme_textdomain( 'secretum', SECRETUM_THEME_DIR . '/lang' );

	// Register Navigation Menus.
	register_nav_menus(
		[
			'secretum-navbar-primary-below' => __( 'Primary Navbar Below Header', 'secretum' ),
			'secretum-navbar-primary-above' => __( 'Primary Navbar Above Header', 'secretum' ),
			'secretum-navbar-primary-left'  => __( 'Primary Navbar Left of Logo', 'secretum' ),
			'secretum-navbar-primary-right' => __( 'Primary Navbar Right of Logo', 'secretum' ),
			'secretum-navbar-top'           => __( 'Header Top Navbar (above header)', 'secretum' ),
			'secretum-navbar-copyright'     => __( 'Copyright Textual Menu', 'secretum' ),
		]
	);

	// Editor Stylesheet.
	add_theme_support( 'editor-styles' );
	add_editor_style( 'css/theme_editor.min.css' );

	// Add support for responsive embedded content.
	add_theme_support( 'responsive-embeds' );

	// Header Image Panel.
	$secretum_custom_header_args = [
		'flex-width'  => true,
		'width'       => 980,
		'flex-height' => true,
		'height'      => 200,
		'video'       => true,
	];
	add_theme_support( 'custom-header', $secretum_custom_header_args );

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
	add_theme_support(
		'html5',
		[
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		]
	);

	// Post Format Support.
	add_theme_support(
		'post-formats',
		[
			'aside',
			'audio',
			'image',
			'link',
			'quote',
			'status',
			'video',
		]
	);

	// Enable Custom Logo Support.
	add_theme_support(
		'custom-logo',
		[
			'height'      => secretum_mod( 'custom_logo_height', 'int' ),
			'width'       => secretum_mod( 'custom_logo_width', 'int' ),
			'header-text' => [ 'site-title', 'site-description' ],
			'flex-height' => true,
			'flex-width'  => true,
		]
	);

}//end secretum_setup_theme()

add_action( 'after_setup_theme', 'Secretum\secretum_setup_theme' );


/**
 * Setup Secretum Theme
 *
 * @param array $settings Secretum Default Settings Array.
 *
 * @see secretum/inc/customize/default-settings.php
 *
 * @return array
 *
 * @since 1.1.1
 */
function secretum_load_default_settings( $settings ) {
	$settings['site_identity_title_container_margin_bottom']   = 'mb-0';
	$settings['site_identity_title_container_padding_y']       = 'py-0';
	$settings['site_identity_title_textual_font_size']         = 'text-32';
	$settings['site_identity_title_textual_link_color']        = 'color-primary-link';
	$settings['site_identity_desc_textual_text_color']         = 'color-secondary';
	$settings['header_top_alignment']                          = 'ml-auto';
	$settings['header_top_wrapper_background_color']           = 'bg-whitish';
	$settings['header_top_container_type']                     = '-fluid';
	$settings['header_top_textual_font_size']                  = 'text-13';
	$settings['header_top_textual_link_color']                 = 'color-gray-600-link';
	$settings['header_top_textual_link_hover_color']           = 'color-gray-600-hover';
	$settings['header_top_items_text_alignment']               = 'text-center';
	$settings['header_top_items_margin_x']                     = 'mx-2';
	$settings['header_top_items_padding_x']                    = 'px-2';
	$settings['header_top_items_padding_y']                    = 'py-1';
	$settings['header_wrapper_padding_y']                      = 'py-3';
	$settings['primary_nav_wrapper_background_color']          = 'bg-primary';
	$settings['primary_nav_wrapper_padding_y']                 = 'py-0';
	$settings['primary_nav_textual_font_size']                 = 'text-14';
	$settings['primary_nav_textual_link_color']                = 'color-whitish-link';
	$settings['primary_nav_textual_link_hover_color']          = 'color-white-hover';
	$settings['primary_nav_items_border_type']                 = 'border-left';
	$settings['primary_nav_items_border_color']                = 'border-primary-light';
	$settings['primary_nav_items_padding_y']                   = 'py-3';
	$settings['primary_nav_items_padding_x']                   = 'px-3';
	$settings['primary_nav_dropdown_background_color']         = 'bg-primary';
	$settings['primary_nav_dropdown_background_hover_color']   = 'bg-primary-light-hover';
	$settings['primary_nav_dropdown_textual_font_size']        = 'text-14';
	$settings['primary_nav_dropdown_textual_link_color']       = 'color-whitish-link';
	$settings['primary_nav_dropdown_textual_link_hover_color'] = 'color-white-hover';
	$settings['primary_nav_toggler_alignment']                 = 'mr-auto';
	$settings['primary_nav_toggler_font_size']                 = 'text-22';
	$settings['primary_nav_toggler_background_color']          = 'bg-white';
	$settings['primary_nav_toggler_margin_x']                  = 'mx-0';
	$settings['primary_nav_toggler_margin_y']                  = 'my-2';
	$settings['primary_nav_toggler_border_type']               = 'border-0';
	$settings['primary_nav_cart_link_padding_t']               = 'pt-2';
	$settings['primary_nav_cart_icon_color']                   = 'color-light';
	$settings['primary_nav_cart_icon_size']                    = 'text-22';
	$settings['primary_nav_cart_count_color']                  = 'color-gray-500';
	$settings['primary_nav_cart_count_size']                   = 'text-14';
	$settings['body_wrapper_background_color']                 = 'bg-whitish';
	$settings['featured_image_wrapper_margin_bottom']          = 'mb-4';
	$settings['entry_meta_tagslinks_status']                   = '1';
	$settings['entry_wrapper_background_color']                = 'bg-white';
	$settings['entry_wrapper_padding_x']                       = 'px-4';
	$settings['entry_wrapper_padding_y']                       = 'py-4';
	$settings['entry_wrapper_margin_top']                      = 'mt-4';
	$settings['entry_wrapper_margin_bottom']                   = 'mb-4';
	$settings['sidebar_location']                              = 'right';
	$settings['sidebar_wrapper_background_color']              = 'bg-white';
	$settings['sidebar_wrapper_padding_x']                     = 'px-4';
	$settings['sidebar_wrapper_padding_y']                     = 'py-4';
	$settings['sidebar_wrapper_margin_top']                    = 'mt-4';
	$settings['sidebar_wrapper_margin_bottom']                 = 'mb-4';
	$settings['sidebar_container_margin_bottom']               = 'mb-5';
	$settings['footer_wrapper_background_color']               = 'bg-gray-100';
	$settings['footer_wrapper_padding_y']                      = 'py-4';
	$settings['footer_wrapper_border_type']                    = 'border-top';
	$settings['footer_wrapper_border_color']                   = 'border-gray-300';
	$settings['copyright_wrapper_background_color']            = 'bg-white';
	$settings['copyright_wrapper_padding_y']                   = 'py-3';
	$settings['copyright_wrapper_border_type']                 = 'border-top';
	$settings['copyright_wrapper_border_color']                = 'border-gray-300';
	$settings['copyright_textual_text_color']                  = 'color-gray-600';
	$settings['copyright_textual_link_color']                  = 'color-gray-700-link';
	$settings['copyright_textual_link_hover_color']            = 'color-gray-800-hover';
	$settings['copyright_nav_alignment']                       = 'mx-auto';
	$settings['copyright_nav_wrapper_padding_x']               = 'px-0';
	$settings['copyright_nav_wrapper_padding_y']               = 'py-2';
	$settings['copyright_nav_textual_font_size']               = 'text-13';
	$settings['copyright_nav_textual_link_color']              = 'color-gray-600-link';
	$settings['copyright_nav_items_text_alignment']            = 'text-center';
	$settings['copyright_nav_items_margin_y']                  = 'my-0';
	$settings['copyright_nav_items_margin_x']                  = 'mx-1';
	$settings['copyright_nav_items_padding_y']                 = 'py-2';
	$settings['copyright_nav_items_padding_x']                 = 'px-2';
	$settings['frontpage_wrapper_background_color']            = 'bg-gray-900';
	$settings['scrolltop_textual_text_color']                  = 'color-primary';
	$settings['scrolltop_textual_font_size']                   = 'text-16';
	$settings['scrolltop_container_background_color']          = 'bg-gray-200';
	$settings['scrolltop_container_background_hover_color']    = 'bg-gray-300-hover';
	$settings['scrolltop_container_padding_x']                 = 'px-3';
	$settings['scrolltop_container_padding_y']                 = 'py-2';
	$settings['scrolltop_container_border_radius']             = 'rounded-circle';

	return $settings;

}//end secretum_load_default_settings()

add_filter( 'secretum_customizer_default_settings', 'Secretum\secretum_load_default_settings' );
