<?php
/**
 * Functions related to theme display or manipulation
 *
 * @package Secretum
 */

namespace Secretum;

/**
 * Footer Wrapper Classes
 */
function secretum_footer_wrapper() {
	$wrapper = \Secretum\Wrapper::classes( 'footer' );
	$borders = \Secretum\Borders::classes( 'footer_wrapper' );

	echo esc_html( $wrapper . $borders );

}//end secretum_footer_wrapper()


/**
 * Footer Container Classes
 */
function secretum_footer_container() {
	//$border = secretum_mod( 'footer_container_border_type', 'attr', true ) . secretum_mod( 'footer_container_border_color', 'attr', true );
	$alignment = secretum_mod( 'footer_text_alignment', 'attr', true );
	$container = \Secretum\Container::classes( 'footer' );
	$textuals = \Secretum\Textuals::classes( 'footer' );
	$borders = \Secretum\Borders::classes( 'footer_container' );

	echo esc_html( $alignment . $container . $textuals . $borders );

}//end secretum_footer_container()


/**
 * Font/Text/Link Classes
 *
 * @return string Pre-sanitized string of class names
 */
function secretum_footer_textuals() {
	$alignment = secretum_mod( 'footer_text_alignment', 'attr', true );
	$textuals = \Secretum\Textuals::classes( 'footer' );

	return $alignment . $textuals;

}//end secretum_footer_textuals()
