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
function secretum_after_header() {
	// Display Featured Image If Allowed.
	if ( 'after_header' === secretum_mod( 'featured_image_display_location', 'raw' ) ) {
		get_template_part( 'template-parts/header/featured-image' );
	}

}//end secretum_after_header()

add_action( 'secretum_after_header', 'Secretum\secretum_after_header' );


/**
 * Render Branded Graphic Logo
 *
 * @since 1.0.0
 */
function secretum_render_brand_logo() {
	$href_link         = esc_url( SECRETUM_BASE_URL );
	$container_classes = secretum_container( 'site_identity_title', 'return' );
	$blog_name         = esc_html( get_bloginfo( 'name' ) );
	$href_title        = esc_html( get_bloginfo( 'description' ) );
	$maxwidth          = secretum_mod( 'custom_logo_maxwidth' ) ? secretum_mod( 'custom_logo_maxwidth', 'int', false ) : '';
	$inlinecss         = ( true !== empty( $maxwidth ) ) ? ' style="max-width:' . $maxwidth . 'px;height:auto !important;"' : '';
	$image             = wp_get_attachment_image(
		get_theme_mod( 'custom_logo' ),
		'full',
		false,
		[
			'class'    => 'custom-logo img-fluid',
			'title'    => $blog_name,
			'itemprop' => 'logo',
		]
	);
	$html              = "<a href=\"{$href_link}\" class=\"navbar-brand custom-logo-link{$container_classes}\" rel=\"home\" itemprop=\"url\" title=\"{$blog_name} {$href_title}\"{$inlinecss}>{$image}</a>";

	echo wp_kses(
		apply_filters( 'secretum_render_brand_logo', $html, 10, 1 ),
		[
			'a'   => [
				'href'     => true,
				'class'    => true,
				'rel'      => true,
				'itemprop' => true,
				'title'    => true,
				'style'    => [
					'max-width' => true,
					'height'    => true,
				],
			],
			'img' => [
				'src'      => true,
				'class'    => true,
				'title'    => true,
				'itemprop' => true,
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
	$container_classes = secretum_container( 'site_identity_title', 'return' );
	$href_link         = esc_url( SECRETUM_BASE_URL );
	$textuals_classes  = trim( secretum_textual( 'site_identity_title', 'return' ) );
	$href_title        = get_bloginfo( 'description' );
	$blog_name         = get_bloginfo( 'name' );
	$html              = "<h1 class=\"navbar-brand{$container_classes}\"><a href=\"{$href_link}\" rel=\"home\" itemprop=\"url\" class=\"{$textuals_classes}\" title=\"{$href_title}\">{$blog_name}</a></h1>";

	echo wp_kses(
		apply_filters( 'secretum_render_container_logo', $html, 10, 1 ),
		[
			'h1' => [
				'class' => true,
			],
			'a'  => [
				'href'     => true,
				'rel'      => true,
				'itemprop' => true,
				'class'    => true,
				'title'    => true,
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
	$href_link         = esc_url( SECRETUM_BASE_URL );
	$container_classes = secretum_container( 'site_identity_title', 'return' );
	$textuals_classes  = trim( secretum_textual( 'site_identity_title', 'return' ) );
	$href_title        = get_bloginfo( 'description' );
	$blog_name         = get_bloginfo( 'name' );
	$html              = "<div class=\"navbar-brand{$container_classes}\"><a href=\"{$href_link}\" class=\"{$textuals_classes}\" rel=\"home\" itemprop=\"url\" title=\"{$href_title}\">{$blog_name}</a></div>";

	echo wp_kses(
		apply_filters( 'secretum_render_link_logo', $html, 10, 1 ),
		[
			'a'   => [
				'href'     => true,
				'class'    => true,
				'rel'      => true,
				'itemprop' => true,
				'title'    => true,
			],
			'div' => [
				'class' => true,
			],
		]
	);

}//end secretum_render_link_logo()
