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
function secretum_body_wrapper() {
	$wrapper = \Secretum\Wrapper::classes( 'body' );
	$borders = \Secretum\Borders::classes( 'body_wrapper' );

	echo esc_html( $wrapper . $borders );

}// end secretum_body_wrapper()


/**
 * Container Classes
 */
function secretum_body_container() {
	$container = \Secretum\Container::classes( 'body' );
	$borders = \Secretum\Borders::classes( 'body_container' );

	echo esc_html( $container . $borders );

}// end secretum_body_container()
