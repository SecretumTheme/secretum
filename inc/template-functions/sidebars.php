<?php
/**
 * Functions related to theme display or manipulation
 *
 * @package    Secretum
 * @subpackage Core\Template-Functions\Sidebars
 * @author     SecretumTheme <author@secretumtheme.com>
 * @copyright  2018-2019 Secretum
 * @license    https://github.com/SecretumTheme/secretum/blob/master/license.txt GPL-2.0
 * @link       https://github.com/SecretumTheme/secretum/blob/master/inc/template-functions/sidebars.php
 * @since      1.0.0
 */

namespace Secretum;

/**
 * Sidebar Wrapper Classes
 *
 * @since 1.0.0
 */
function secretum_sidebar_wrapper() {
	$wrapper = \Secretum\Wrapper::classes( 'sidebar' );
	$borders = \Secretum\Borders::classes( 'sidebar_wrapper' );

	echo esc_html( apply_filters( 'secretum_sidebar_wrapper', $wrapper . $borders, 10, 1 ) );

}//end secretum_sidebar_wrapper()


/**
 * Sidebar Container Classes
 *
 * @since 1.0.0
 *
 * @return string Pre-sanitized string of class names
 */
function secretum_sidebar_container() {
	$container = \Secretum\Container::classes( 'sidebar' );
	$borders = \Secretum\Borders::classes( 'sidebar_container' );

	return apply_filters( 'secretum_sidebar_container', $container . $borders, 10, 1 );

}//end secretum_sidebar_container()


/**
 * Font/Text/Link Classes
 *
 * @since 1.0.0
 *
 * @return string Pre-sanitized string of class names
 */
function secretum_sidebar_textuals() {
	$textuals = \Secretum\Textuals::classes( 'sidebar' );

	return apply_filters( 'secretum_sidebar_textuals', $textuals, 10, 1 );

}//end secretum_sidebar_textuals()


/**
 * Render Sidebar Based On Allowed Location
 *
 * @since 1.0.0
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
	// Global Sidebar Location.
	$global_location = secretum_mod( 'sidebar_location', 'attr' );

	// Local Sidebar Location.
	$local_location = get_post_meta( get_the_ID(), 'secretum_meta_sidebars' );

	// Build Sidebar Location.
	$sidebar_location = ! empty( $local_location[0] ) ? $local_location[0] : $global_location;

	// Default No Sidebars.
	$display = false;

	// Left or both.
	if ( isset( $sidebar_location ) && ( 'both' === $sidebar_location || 'left' === $sidebar_location ) && 'right' === $location_check ) {
		$display = true;
	}

	// Right or both.
	if ( isset( $sidebar_location ) && ( 'both' === $sidebar_location || 'right' === $sidebar_location ) && 'right' === $location_check ) {
		$display = true;
	}

	return ( $display ) ? true : false;

}//end secretum_sidebar_location()
