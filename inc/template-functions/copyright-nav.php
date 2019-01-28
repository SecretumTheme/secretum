<?php
/**
 * Functions related to theme display or manipulation
 *
 * @package    Secretum
 * @subpackage Core\Template-Functions\Copyright-Nav
 * @author     SecretumTheme <author@secretumtheme.com>
 * @copyright  2018-2019 Secretum
 * @license    https://github.com/SecretumTheme/secretum/blob/master/license.txt GPL-2.0
 * @link       https://github.com/SecretumTheme/secretum/blob/master/inc/template-functions/copyright-nav.php
 * @since      1.0.0
 */

namespace Secretum;

/**
 * Wrapper Classes
 *
 * @since 1.0.0
 */
function secretum_copyright_nav_wrapper() {
	$wrapper 	= \Secretum\Wrapper::classes( 'copyright_nav' );
	$borders 	= \Secretum\Borders::classes( 'copyright_nav_wrapper' );
	$textuals 	= \Secretum\Textuals::classes( 'copyright_nav' );

	echo esc_html( apply_filters( 'secretum_copyright_nav_wrapper', $wrapper . $textuals . $borders, 10, 1 ) );

}//end secretum_copyright_nav_wrapper()


/**
 * Alignment
 *
 * @since 1.0.0
 *
 * @return string Classe Name.
 */
function secretum_copyright_nav_alignment() {
	$alignment = secretum_mod( 'copyright_nav_items_alignment', 'attr', true );

	return apply_filters( 'secretum_copyright_nav_alignment', $alignment, 10, 1 );

}//end secretum_copyright_nav_alignment()


/**
 * Menu Item Classes
 *
 * @since 1.0.0
 *
 * @return string Classes.
 */
function secretum_copyright_nav_items() {
	$nav_items = \Secretum\NavItems::classes( 'copyright_nav' );

	return apply_filters( 'secretum_copyright_nav_items', $nav_items, 10, 1 );

}//end secretum_copyright_nav_items()
