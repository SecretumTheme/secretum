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
 * Set the content width in pixels, based on the theme's design and stylesheet.
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width Content width.
 *
 * @link https://codex.wordpress.org/Content_Width
 *
 * @since 1.0.0
 */
function secretum_content_width() {
	// phpcs:ignore WPThemeReview.CoreFunctionality.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = secretum_mod( 'secretum_content_width' ) ? absint( secretum_mod( 'secretum_content_width', 'int' ) ) : 640;
}

add_action( 'after_setup_theme', 'Secretum\secretum_content_width', 0 );


/**
 * WordPress Theme Settings
 *
 * @since 1.0.0
 */
function secretum_setup_theme() {
	// Load Theme Translated Strings.
	load_theme_textdomain( 'secretum', SECRETUM_THEME_DIR . '/lang' );

	register_nav_menus(
		[
			'secretum-navbar-primary'       => __( 'Primary Menu', 'secretum' ),
			'secretum-navbar-primary-below' => __( 'Old Primary Menu (deprecated)', 'secretum' ),
			'secretum-navbar-top'           => __( 'Header Top Menu (above header)', 'secretum' ),
			'secretum-navbar-copyright'     => __( 'Copyright Menu', 'secretum' ),
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
	$settings['enqueue_primary_javascript_status']             = true;
	$settings['enqueue_woocommerce_status']                    = true;
	$settings['frontpage_page_title_status']                   = true;
	$settings['site_identity_branding_status']                 = true;
	$settings['site_identity_logo_status']                     = true;
	$settings['site_identity_tagline_status']                  = true;
	$settings['header_top_status']                             = true;
	$settings['header_status']                                 = true;
	$settings['primary_nav_status']                            = true;
	$settings['primary_nav_toggler_status']                    = true;
	$settings['body_status']                                   = true;
	$settings['breadcrumbs_posts_status']                      = true;
	$settings['breadcrumbs_pages_status']                      = true;
	$settings['featured_image_status']                         = true;
	$settings['entry_status']                                  = true;
	$settings['entry_meta_commentlink_status']                 = true;
	$settings['entry_meta_catlinks_status']                    = true;
	$settings['entry_meta_published_status']                   = true;
	$settings['entry_meta_author_status']                      = true;
	$settings['entry_meta_post_navigation_links']              = true;
	$settings['footer_status']                                 = true;
	$settings['copyright_status']                              = true;
	$settings['copyright_nav_status']                          = true;
	$settings['scrolltop_status']                              = true;
	$settings['site_identity_title_container_margin_bottom']   = 'mb-0';
	$settings['site_identity_title_container_padding_y']       = 'py-0';
	$settings['site_identity_title_textual_font_size']         = 'text-32';
	$settings['header_wrapper_padding_y']                      = 'py-3';
	$settings['primary_nav_wrapper_background_color']          = 'bg-primary';
	$settings['primary_nav_wrapper_padding_y']                 = 'py-0';
	$settings['primary_nav_textual_link_color']                = 'link-light';
	$settings['primary_nav_textual_link_hover_color']          = 'link-gray-300-hover';
	$settings['primary_nav_dropdown_background_color']         = 'bg-primary';
	$settings['primary_nav_dropdown_textual_link_color']       = 'link-light';
	$settings['primary_nav_dropdown_textual_link_hover_color'] = 'link-gray-200-hover';
	$settings['primary_nav_items_padding_y']                   = 'py-3';
	$settings['primary_nav_items_padding_x']                   = 'px-3';
	$settings['primary_nav_toggler_alignment']                 = 'mr-auto';
	$settings['primary_nav_toggler_margin_x']                  = 'mx-0';
	$settings['primary_nav_toggler_margin_y']                  = 'my-2';
	$settings['primary_nav_cart_link_padding_t']               = 'pt-2';
	$settings['primary_nav_cart_icon_size']                    = 'text-22';
	$settings['primary_nav_cart_count_size']                   = 'text-14';
	$settings['breadcrumbs_display_location']                  = 'after_header';
	$settings['breadcrumbs_wrapper_padding_y']                 = 'py-3';
	$settings['frontpage_heading_wrapper_padding_x']           = 'px-0';
	$settings['frontpage_heading_wrapper_padding_y']           = 'py-0';
	$settings['frontpage_heading_wrapper_border_radius']       = 'rounded-0';
	$settings['frontpage_heading_wrapper_border_type']         = 'border-0';
	$settings['featured_image_wrapper_margin_bottom']          = 'mb-4';
	$settings['entry_wrapper_padding_x']                       = 'px-3';
	$settings['entry_wrapper_padding_y']                       = 'py-4';
	$settings['entry_wrapper_margin_bottom']                   = 'mb-4';
	$settings['sidebar_location']                              = 'right';
	$settings['sidebar_wrapper_padding_x']                     = 'px-4';
	$settings['sidebar_wrapper_padding_y']                     = 'py-4';
	$settings['sidebar_wrapper_margin_bottom']                 = 'mb-4';
	$settings['sidebar_container_margin_bottom']               = 'mb-5';
	$settings['footer_wrapper_padding_y']                      = 'py-4';
	$settings['copyright_wrapper_padding_y']                   = 'py-3';
	$settings['copyright_nav_items_margin_y']                  = 'my-0';
	$settings['copyright_nav_items_margin_x']                  = 'mx-1';
	$settings['copyright_nav_items_padding_y']                 = 'py-2';
	$settings['copyright_nav_items_padding_x']                 = 'px-2';

	return $settings;

}//end secretum_load_default_settings()

add_filter( 'secretum_customizer_default_settings', 'Secretum\secretum_load_default_settings' );
