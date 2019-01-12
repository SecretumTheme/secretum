<?php
/**
 * Functions related to theme display or manipulation
 *
 * @package Secretum
 */

namespace Secretum;


/**
 * Inject Content After Header
 */
add_action( 'secretum_after_header', function() {
	// @about Display Featured Image If Allowed
	if ( 'after_header' === secretum_mod( 'featured_image_display_location', 'raw' ) ) {
		get_template_part( 'template-parts/header/featured-image' );
	}
} );


/**
 * Header Wrapper Classes
 */
function secretum_header_wrapper() {
	// @about Classes
	$background = secretum_mod( 'header_wrapper_background_color', 'attr', true );
	$border = secretum_mod( 'header_wrapper_border_type', 'attr', true ) . secretum_mod( 'header_wrapper_border_color', 'attr', true );
	$margin = secretum_mod( 'header_wrapper_margin_top', 'attr', true ) . secretum_mod( 'header_wrapper_margin_bottom', 'attr', true );
	$padding = secretum_mod( 'header_wrapper_padding_y', 'attr', true );

	echo esc_html( apply_filters( 'secretum_header_wrapper', $background . $border . $margin . $padding, 10, 1 ) );
}


/**
 * Header Container Classes
 */
function secretum_header_container() {
	// @about Classes
	$container = secretum_mod( 'header_container_type', 'attr', false );
	$background = secretum_mod( 'header_container_background_color', 'attr', true );
	$border = secretum_mod( 'header_container_border_type', 'attr', true ) . secretum_mod( 'header_container_border_color', 'attr', true );
	$padding = secretum_mod( 'header_container_padding_x', 'attr', true ) . secretum_mod( 'header_container_padding_y', 'attr', true );

	echo esc_html( apply_filters( 'secretum_header_container', $container . $background . $border . $padding, 10, 1 ) );
}


/**
 * Render Branded Graphic Logo
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

	echo wp_kses(
		"<a href=\"{$href_link}\" class=\"navbar-brand custom-logo-link{$heading_classes}{$href_classes}\" rel=\"home\" itemprop=\"url\" title=\"{$blog_name} {$href_title}\"{$inlinecss}>{$image}</a>",
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
}


/**
 * Render h1 Frontpage Textual Brand Logo
 */
function secretum_render_heading_logo() {
	$heading_classes 	= secretum_site_identity_title_container();
	$href_link 			= esc_url( get_home_url( '/' ) );
	$href_classes 		= trim( secretum_site_identity_title_textuals() );
	$href_title 		= get_bloginfo( 'description' );
	$blog_name 			= get_bloginfo( 'name' );

	echo wp_kses(
		"<h1 class=\"navbar-brand{$heading_classes}\"><a href=\"{$href_link}\" rel=\"home\" itemprop=\"url\" class=\"{$href_classes}\" title=\"{$href_title}\">{$blog_name}</a></h1>",
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
}


/**
 * Render Textual Link Brand Logo
 */
function secretum_render_link_logo() {
	$href_link 			= esc_url( get_home_url( '/' ) );
	$heading_classes 	= trim( secretum_site_identity_title_container() );
	$href_classes 		= secretum_site_identity_title_textuals();
	$href_title 		= get_bloginfo( 'description' );
	$blog_name 			= get_bloginfo( 'name' );

	echo wp_kses(
		"<a href=\"{$href_link}\" class=\"navbar-brand{$heading_classes}{$href_classes}\" rel=\"home\" itemprop=\"url\" title=\"{$href_title}\">{$blog_name}</a>",
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
}
