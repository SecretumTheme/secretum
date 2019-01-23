<?php
/**
 * Functions related to theme display or manipulation
 *
 * @package    Secretum
 * @subpackage Secretum\TemplateFunctions
 * @author     SecretumTheme <author@secretumtheme.com>
 * @copyright  2018-2019 Secretum
 * @license    https://github.com/SecretumTheme/secretum/blob/master/license.txt GPL-2.0
 * @link       https://github.com/SecretumTheme/secretum/blob/master/inc/template-functions/copyright-nav.php
 */

namespace Secretum;

/**
 * Wrapper Classes
 */
function secretum_copyright_nav_wrapper() {
	$wrapper 	= \Secretum\Wrapper::classes( 'copyright_nav' );
	$borders 	= \Secretum\Borders::classes( 'copyright_nav_wrapper' );
	$textuals 	= \Secretum\Textuals::classes( 'copyright_nav' );

	echo esc_html( $wrapper . $textuals . $borders );

}//end secretum_copyright_nav_wrapper()


/**
 * Alignment
 *
 * @return string Classe Name.
 */
function secretum_copyright_nav_alignment() {
	$alignment = secretum_mod( 'copyright_nav_items_alignment', 'attr', true );

	return $alignment;

}//end secretum_copyright_nav_alignment()


/**
 * Menu Item Classes
 *
 * @return string Classes.
 */
function secretum_copyright_nav_items() {
	$nav_items = \Secretum\NavItems::classes( 'copyright_nav' );

	return $nav_items;

}//end secretum_copyright_nav_items()
