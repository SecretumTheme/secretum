<?php
/**
 * Functions related to theme display or manipulation
 *
 * @package Secretum
 */

namespace Secretum;

/**
 * Container Classes
 */
function secretum_scrolltop_container() {
	// @about Classes
	$background = secretum_mod( 'scrolltop_background_color', 'attr', true ) . secretum_mod( 'scrolltop_background_hover_color', 'attr', true );
	$border = secretum_mod( 'scrolltop_border_type', 'attr', true ) . secretum_mod( 'scrolltop_border_radius', 'attr', true ) . secretum_mod( 'scrolltop_border_color', 'attr', true );
	$margin = secretum_mod( 'scrolltop_margin_right', 'attr', true ) . secretum_mod( 'scrolltop_margin_bottom', 'attr', true );
	$padding = secretum_mod( 'scrolltop_padding_x', 'attr', true ) . secretum_mod( 'scrolltop_padding_y', 'attr', true );

	echo esc_html( apply_filters( 'secretum_scrolltop_container', $background . $border . $margin . $padding, 10, 1 ) );
}


/**
 * Text/Front Classes
 */
function secretum_scrolltop_textuals() {
	// @about Classes
	$text_color = secretum_mod( 'scrolltop_text_color', 'attr', true );
	$font_size = secretum_mod( 'scrolltop_icon_size', 'attr', true );

	echo esc_html( apply_filters( 'secretum_scrolltop_textuals', $text_color . $font_size, 10, 1 ) );
}
