<?php
/**
 * Functions related to theme display or manipulation
 *
 * @package    Secretum
 * @subpackage Core\Template-Functions\Header
 * @author     SecretumTheme <author@secretumtheme.com>
 * @copyright  2018-2019 Secretum
 * @license    https://github.com/SecretumTheme/secretum/blob/master/license.txt GPL-2.0
 * @link       https://github.com/SecretumTheme/secretum/blob/master/inc/template-functions/header.php
 * @since      1.0.0
 */

namespace Secretum;

/**
 * Inject Content After Header
 *
 * @since 1.0.0
 */
add_action( 'secretum_after_header', function() {
	// Display Featured Image If Allowed.
	if ( 'after_header' === secretum_mod( 'featured_image_display_location', 'raw' ) ) {
		get_template_part( 'template-parts/header/featured-image' );
	}
} );


/**
 * Header Wrapper Classes
 *
 * @since 1.0.0
 */
function secretum_header_wrapper() {
	$wrapper = \Secretum\Wrapper::classes( 'header' );
	$borders = \Secretum\Borders::classes( 'header_wrapper' );

	echo esc_html( apply_filters( 'secretum_header_wrapper', $wrapper . $borders, 10, 1 ) );

}//end secretum_header_wrapper()


/**
 * Header Container Classes
 *
 * @since 1.0.0
 */
function secretum_header_container() {
	$container = \Secretum\Container::classes( 'header' );
	$borders = \Secretum\Borders::classes( 'header_container' );

	echo esc_html( apply_filters( 'secretum_header_container', $container . $borders, 10, 1 ) );

}//end secretum_header_container()


/**
 * Render Branded Graphic Logo
 *
 * @since 1.0.0
 */
function secretum_render_brand_logo() {
	$href_link 			= esc_url( get_home_url( '/' ) );
	$heading_classes 	= secretum_site_identity_title_container();
	$href_classes 		= secretum_site_identity_title_textuals();
	$blog_name 			= esc_html( get_bloginfo( 'name' ) );
	$href_title 		= esc_html( get_bloginfo( 'description' ) );
	$maxwidth 			= secretum_mod( 'custom_logo_maxwidth' ) ? secretum_mod( 'custom_logo_maxwidth', 'int', false ) : '';
	$inlinecss 			= ! empty( $maxwidth ) ? ' style="max-width:' . $maxwidth . 'px;height:auto !important;"' : '';
	$image 				= wp_get_attachment_image( get_theme_mod( 'custom_logo' ), 'full', false, array(
		'class'		=> 'custom-logo img-fluid',
		'title' 	=> $blog_name,
		'itemprop' 	=> 'logo',
	) );
	$html 				= "<a href=\"{$href_link}\" class=\"navbar-brand custom-logo-link{$heading_classes}{$href_classes}\" rel=\"home\" itemprop=\"url\" title=\"{$blog_name} {$href_title}\"{$inlinecss}>{$image}</a>";

	echo wp_kses(
		apply_filters( 'secretum_render_brand_logo', $html, 10, 1 ),
		[
			'a' => [
				'href' 		=> true,
				'class' 	=> true,
				'rel' 		=> true,
				'itemprop' 	=> true,
				'title' 	=> true,
				'style' => [
					'max-width' => true,
					'height' 	=> true,
				],
			],
			'img' => [
				'src' 		=> true,
				'class' 	=> true,
				'title' 	=> true,
				'itemprop' 	=> true,
			],
		]
	);

}//end secretum_render_brand_logo()


/**
 * Render h1 Frontpage Textual Brand Logo
 *
 * @since 1.0.0
 */
function secretum_render_heading_logo() {
	$heading_classes 	= secretum_site_identity_title_container();
	$href_link 			= esc_url( get_home_url( '/' ) );
	$href_classes 		= trim( secretum_site_identity_title_textuals() );
	$href_title 		= get_bloginfo( 'description' );
	$blog_name 			= get_bloginfo( 'name' );
	$html 				= "<h1 class=\"navbar-brand{$heading_classes}\"><a href=\"{$href_link}\" rel=\"home\" itemprop=\"url\" class=\"{$href_classes}\" title=\"{$href_title}\">{$blog_name}</a></h1>";

	echo wp_kses(
		apply_filters( 'secretum_render_heading_logo', $html, 10, 1 ),
		[
			'h1' => [
				'class' => true,
			],
			'a' => [
				'href' 		=> true,
				'rel' 		=> true,
				'itemprop' 	=> true,
				'class' 	=> true,
				'title' 	=> true,
			],
		]
	);

}//end secretum_render_heading_logo()


/**
 * Render Textual Link Brand Logo
 *
 * @since 1.0.0
 */
function secretum_render_link_logo() {
	$href_link 			= esc_url( get_home_url( '/' ) );
	$heading_classes 	= trim( secretum_site_identity_title_container() );
	$href_classes 		= secretum_site_identity_title_textuals();
	$href_title 		= get_bloginfo( 'description' );
	$blog_name 			= get_bloginfo( 'name' );
	$html 				= "<a href=\"{$href_link}\" class=\"navbar-brand{$heading_classes}{$href_classes}\" rel=\"home\" itemprop=\"url\" title=\"{$href_title}\">{$blog_name}</a>";

	echo wp_kses(
		apply_filters( 'secretum_render_link_logo', $html, 10, 1 ),
		[
			'a' => [
				'href' 		=> true,
				'class' 	=> true,
				'rel' 		=> true,
				'itemprop' 	=> true,
				'title' 	=> true,
			],
		]
	);

}//end secretum_render_link_logo()
