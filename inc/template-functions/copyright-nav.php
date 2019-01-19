<?php
/**
 * Functions related to theme display or manipulation
 *
 * @package Secretum
 */

namespace Secretum;

/**
 * Wrapper Classes
 */
function secretum_copyright_nav_wrapper() {
	// @about Classes
	$background = secretum_mod( 'copyright_nav_wrapper_background_color', 'attr', true );
	$border = secretum_mod( 'copyright_nav_wrapper_border_type', 'attr', true ) . secretum_mod( 'copyright_nav_wrapper_border_color', 'attr', true );
	$margin = secretum_mod( 'copyright_nav_wrapper_margin_top', 'attr', true ) . secretum_mod( 'copyright_nav_wrapper_margin_bottom', 'attr', true );
	$padding = secretum_mod( 'copyright_nav_wrapper_padding_x', 'attr', true ) . secretum_mod( 'copyright_nav_wrapper_padding_y', 'attr', true );

	$textuals = \Secretum\Textuals::classes( 'copyright_nav' );

	//$textuals = secretum_mod( 'copyright_nav_textual_text_transform', 'attr', true ) . secretum_mod( 'copyright_nav_textual_font_family', 'attr', true ) . secretum_mod( 'copyright_nav_textual_font_size', 'attr', true ) . secretum_mod( 'copyright_nav_textual_font_style', 'attr', true );
	//$text_color = secretum_mod( 'copyright_nav_textual_text_color', 'attr', true );
	//$link_colors = secretum_mod( 'copyright_nav_textual_link_color', 'attr', true ) . secretum_mod( 'copyright_nav_textual_link_hover_color', 'attr', true );

	echo esc_html( apply_filters( 'secretum_copyright_nav_wrapper', $background . $border . $margin . $padding . $textuals, 10, 1 ) );
}


/**
 * Alignment
 *
 * @return string Pre-sanitized class name
 */
function secretum_copyright_nav_alignment() {
	return apply_filters( 'secretum_copyright_nav_alignment', secretum_mod( 'copyright_nav_alignment', 'attr', true ), 10, 1 );
}


/**
 * Menu Item Classes
 *
 * @return string Pre-sanitized string of class names
 */
function secretum_copyright_nav_divider_classes() {
	// @about Classes
	$background = secretum_mod( 'copyright_nav_items_background_color', 'attr', true ) . secretum_mod( 'copyright_nav_items_background_hover_color', 'attr', true );
	$border = secretum_mod( 'copyright_nav_items_border_type', 'attr', true ) . secretum_mod( 'copyright_nav_items_border_color', 'attr', true );
	$margin = secretum_mod( 'copyright_nav_items_margin_y', 'attr', true ) . secretum_mod( 'copyright_nav_items_margin_x', 'attr', true );
	$padding = secretum_mod( 'copyright_nav_items_padding_y', 'attr', true ) . secretum_mod( 'copyright_nav_items_padding_x', 'attr', true );

	return apply_filters( 'secretum_copyright_nav_divider_classes', $background . $border . $margin . $padding, 10, 1 );
}
