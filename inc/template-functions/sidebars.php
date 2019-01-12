<?php
/**
 * Functions related to theme display or manipulation
 *
 * @package Secretum
 */

namespace Secretum;

/**
 * Sidebar Wrapper Classes
 */
function secretum_sidebar_wrapper() {
	// @about Classes
	$background = secretum_mod( 'sidebar_wrapper_background_color', 'attr', true );
	$border = secretum_mod( 'sidebar_wrapper_border_type', 'attr', true ) . secretum_mod( 'sidebar_wrapper_border_color', 'attr', true );
	$margin = secretum_mod( 'sidebar_wrapper_margin_top', 'attr', true ) . secretum_mod( 'sidebar_wrapper_margin_right', 'attr', true ) . secretum_mod( 'sidebar_wrapper_margin_bottom', 'attr', true ) . secretum_mod( 'sidebar_wrapper_margin_left', 'attr', true );
	$padding = secretum_mod( 'sidebar_wrapper_padding_x', 'attr', true ) . secretum_mod( 'sidebar_wrapper_padding_y', 'attr', true );

	echo esc_html( apply_filters( 'secretum_sidebar_wrapper', $background . $border . $margin . $padding, 10, 1 ) );
}


/**
 * Sidebar Container Classes
 *
 * @return string Pre-sanitized string of class names
 */
function secretum_sidebar_container() {
	// @about Classes
	$background = secretum_mod( 'sidebar_container_background_color', 'attr', true );
	$border = secretum_mod( 'sidebar_container_border_type', 'attr', true ) . secretum_mod( 'sidebar_container_border_color', 'attr', true );
	$padding = secretum_mod( 'sidebar_container_padding_x', 'attr', true ) . secretum_mod( 'sidebar_container_padding_y', 'attr', true );

	return apply_filters( 'secretum_sidebar_container', $background . $border . $padding, 10, 1 );
}


/**
 * Font/Text/Link Classes
 *
 * @return string Pre-sanitized string of class names
 */
function secretum_sidebar_textuals() {
	// @about Classes
	$font_size = secretum_mod( 'sidebar_font_size', 'attr', true );
	$font_family = secretum_mod( 'sidebar_font_family', 'attr', true );
	$font_style = secretum_mod( 'sidebar_font_style', 'attr', true );
	$text_transform = secretum_mod( 'sidebar_text_transform', 'attr', true );
	$text_color = secretum_mod( 'sidebar_text_color', 'attr', true );
	$link_color = secretum_mod( 'sidebar_link_color', 'attr', true );
	$link_hover_color = secretum_mod( 'sidebar_link_hover_color', 'attr', true );

	return apply_filters( 'secretum_sidebar_text_fonts', $font_size . $font_family . $font_style . $text_transform . $text_color . $link_color . $link_hover_color, 10, 1 );
}


/**
 * Render Sidebar Based On Allowed Location
 *
 * @example secretum_sidebar_location( 'right' );
 * @example secretum_sidebar_location( 'left' );
 * @see /template-parts/sidebar/sidebar-left.php
 * @see /template-parts/sidebar/sidebar-right-blog.php
 * @see /template-parts/sidebar/sidebar-right.php
 *
 * @param string $location_check Sidebar display location.
 * @return bool Defaults to false
 */
function secretum_sidebar_location( $location_check ) {
	// @about Global Sidebar Location
	$global_location = secretum_mod( 'sidebar_location', 'attr' );

	// @about Local Sidebar Location
	$local_location = get_post_meta( get_the_ID(), 'secretum_meta_sidebars' );

	// @about Build Sidebar Location
	$sidebar_location = ! empty( $local_location[0] ) ? $local_location[0] : $global_location;

	// @about Default No Sidebars
	$display = false;

	// @about Left or both
	if ( isset( $sidebar_location ) && ( 'both' === $sidebar_location || 'left' === $sidebar_location ) && 'right' === $location_check ) {
		$display = true;
	}

	// @about Right or both
	if ( isset( $sidebar_location ) && ( 'both' === $sidebar_location || 'right' === $sidebar_location ) && 'right' === $location_check ) {
		$display = true;
	}

	return ( $display ) ? true : false;
}
