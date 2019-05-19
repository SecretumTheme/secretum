<?php
/**
 * Functions related to theme display or manipulation
 *
 * @package    Secretum
 * @subpackage Core\Template-Functions\Navbar
 * @author     SecretumTheme <author@secretumtheme.com>
 * @copyright  2018-2019 Secretum
 * @license    https://github.com/SecretumTheme/secretum/blob/master/license.txt GPL-2.0
 * @link       https://github.com/SecretumTheme/secretum/blob/master/inc/template-functions/navbar.php
 * @since      1.0.0
 */

namespace Secretum;

/**
 * Custom Toggler Text
 *
 * @since 1.6.0
 */
function secretum_nav_toggler_text() {
	$secretum_nav_toggler_text = secretum_text( 'primary_nav_toggler_text' );

	if ( true === empty( $secretum_nav_toggler_text ) ) {
		return;
	}

	echo wp_kses_post( '<span class="px-2 text-12 text-light">' . $secretum_nav_toggler_text . '</span>' );
}//end secretum_nav_toggler_text()


/**
 * Display Navbar Location
 *
 * @param string $location Navbar Display Location (below|above|right|left).
 *
 * @since 1.6.0
 */
function secretum_navbar_display_location( $location ) {
	$secretum_primary_nav_location = secretum_mod( 'primary_nav_location', 'raw' );

	// Default.
	if ( 'below' === $location && (
		false === has_nav_menu( 'secretum-navbar-primary' ) || false === has_nav_menu( 'secretum-navbar-primary-below' )
	) && (
		empty( $secretum_primary_nav_location ) || false === $secretum_primary_nav_location )
	) {
		return true;
	}

	if ( $location === $secretum_primary_nav_location ) {
		return true;
	}

	return false;
}//end secretum_navbar_display_location()


/**
 * Add or Remove Navbar Collapse ID
 *
 * @param string $type size|class.
 *
 * @since 1.0.0
 */
function secretum_navbar_toggler_display( $type ) {
	$secretum_toggler_status = secretum_mod( 'primary_nav_toggler_status' );

	if ( 'size' === $type ) {
		if ( false === $secretum_toggler_status ) {
			echo 'navbar-expand';
		} else {
			echo 'navbar-expand-lg';
		}
	}

	if ( 'class' === $type ) {
		if ( false === $secretum_toggler_status ) {
			return '';
		} else {
			return 'collapse navbar-collapse';
		}
	}

}//end secretum_navbar_toggler_display()
