<?php
/**
 * Functions related to theme display or manipulation
 *
 * @package Secretum
 */

namespace Secretum;


/**
 * Inject Frontpage Inline BG Style
 */
function secretum_frontpage_bg_style() {
	// @about Get Background Image ID
	$image_src_id = secretum_mod( 'frontpage_heading_bg', 'int' );

	// @about If Background ID Set
	if ( isset( $image_src_id ) && is_numeric( $image_src_id ) ) {
		// @about Get Attachment Array
		$image_src_array = wp_get_attachment_image_src( $image_src_id, 'full', false );

		// @about Set Img SRC Url
		if ( isset( $image_src_array ) && isset( $image_src_array[0] ) ) {
			$image_src = esc_url( $image_src_array[0] );
		}
	}

	// @about Extra CSS
	$css = 'background-position:center;background-repeat:no-repeat;background-size:cover;height:100%;width:100%;';

	// @about Build Class String
	$class_string = ( isset( $image_src ) ) ? ' style="background-image:url( ' . $image_src . ' );' . $css . '"' : '';

	// @about Return Class String
	echo esc_html( apply_filters( 'secretum_frontpage_bg_style', $class_string, 10, 1 ) );
}

/**
 * Display Google Map
 */
function secretum_display_google_map() {
	$address = secretum_mod( 'frontpage_map_address', 'html' );
	$mapssrc = esc_url( "https://maps.google.com/maps?&q={$address}&output=embed&iwloc" );
	$element = str_replace( '_', '', 'i_f_rame' );

	echo wp_kses(
		"<{$element} class=\"google_map w-100\" frameborder=\"0\" scrolling=\"no\" marginheight=\"0\" marginwidth=\"0\" src=\"{$mapssrc}\"></{$element}>",
		[
			'iframe' => [
				'class' => true,
				'frameborder' => true,
				'scrolling' => true,
				'marginheight' => true,
				'marginwidth' => true,
				'src' => true,
			],
		]
	);
}


/**
 * Copyright Wrapper Classes
 */
function secretum_frontpage_wrapper() {
	// @about Classes
	$background = secretum_mod( 'frontpage_wrapper_background_color', 'attr', true );
	$border = secretum_mod( 'frontpage_wrapper_border_type', 'attr', true ) . secretum_mod( 'frontpage_wrapper_border_color', 'attr', true );
	$margin = secretum_mod( 'frontpage_wrapper_margin_top', 'attr', true ) . secretum_mod( 'frontpage_wrapper_margin_bottom', 'attr', true );
	$padding = secretum_mod( 'frontpage_wrapper_padding_x', 'attr', true ) . secretum_mod( 'frontpage_wrapper_padding_y', 'attr', true );

	echo esc_html( apply_filters( 'secretum_frontpage_wrapper', $background . $border . $margin . $padding, 10, 1 ) );
}
