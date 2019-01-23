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
	$wrapper = \Secretum\Wrapper::classes( 'sidebar' );
	$borders = \Secretum\Borders::classes( 'sidebar_wrapper' );

	echo esc_html( $wrapper . $borders );
}


/**
 * Sidebar Container Classes
 *
 * @return string Pre-sanitized string of class names
 */
function secretum_sidebar_container() {
	$container = \Secretum\Container::classes( 'sidebar' );
	$borders = \Secretum\Borders::classes( 'sidebar_container' );

	return $container . $borders;
}


/**
 * Font/Text/Link Classes
 *
 * @return string Pre-sanitized string of class names
 */
function secretum_sidebar_textuals() {
	$textuals = \Secretum\Textuals::classes( 'sidebar' );

	return $textuals;
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
