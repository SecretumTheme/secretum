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
 * Add or Remove Navbar Collapse ID
 *
 * @param string $type size|class|id.
 *
 * @since 1.0.0
 */
function secretum_navbar_display( $type ) {
	$secretum_toggler_status = secretum_mod( 'primary_nav_toggler_status' );

	if ( 'size' === $type ) {
		if ( true !== $secretum_toggler_status ) {
			echo 'navbar-expand';
		} else {
			echo 'navbar-expand-lg';
		}
	}

	if ( 'class' === $type) {
		if ( true !== $secretum_toggler_status ) {
			return '';
		} else {
			return 'collapse navbar-collapse';
		}
	}

	if ( 'id' === $type) {
		if ( true !== $secretum_toggler_status ) {
			return '';
		} else {
			return 'navbarNavDropdown';
		}
	}

}//end secretum_navbar_display()
