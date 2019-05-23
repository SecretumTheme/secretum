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
 * Render Sidebar Metaboxes
 *
 * @since 1.0.0
 */
function secretum_metaboxes() {
	new \Secretum\Metaboxes();
}

add_action( 'admin_init', 'Secretum\secretum_metaboxes' );


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
 *
 * @since 1.0.0
 */
function secretum_sidebar_location( $location_check ) {
	$sidebar_location = secretum_meta( 'meta_sidebars', '', 'attr' );

	// Build Sidebar Location.
	if ( true === empty( $sidebar_location ) ) {
		// Global Sidebar Location.
		$global_location = secretum_mod( 'sidebar_location', 'attr' );

		$sidebar_location = $global_location;
	}

	// No Sidebars Setup, Default To Right Location.
	if ( true === empty( $sidebar_location ) && 'right' === $location_check ) {
		return true;
	}

	// No Sidebars Selected.
	if ( true === isset( $sidebar_location ) && 'none' === $sidebar_location ) {
		return false;
	}

	// Left or Both.
	if ( true === isset( $sidebar_location ) && ( 'both' === $sidebar_location || 'left' === $sidebar_location ) && 'left' === $location_check ) {
		return true;
	}

	// Right or Both.
	if ( true === isset( $sidebar_location ) && ( 'both' === $sidebar_location || 'right' === $sidebar_location ) && 'right' === $location_check ) {
		return true;
	}

}//end secretum_sidebar_location()
