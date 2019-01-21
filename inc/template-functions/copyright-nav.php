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
	$textuals 	= \Secretum\Textuals::classes( 'copyright_nav' );
	$borders 	= \Secretum\Borders::classes( 'copyright_nav_wrapper' );

	echo esc_html( $wrapper . $textuals . $borders );

}//end secretum_copyright_nav_wrapper()


/**
 * Alignment
 *
 * @return string Classes.
 */
function secretum_copyright_nav_alignment() {
	return apply_filters( 'secretum_copyright_nav_alignment', secretum_mod( 'copyright_nav_alignment', 'attr', true ), 10, 1 );

}//end secretum_copyright_nav_alignment()


/**
 * Menu Item Classes
 *
 * @return string Classes.
 */
function secretum_copyright_nav_divider_classes() {
	$background = secretum_mod( 'copyright_nav_items_background_color', 'attr', true ) . secretum_mod( 'copyright_nav_items_background_hover_color', 'attr', true );
	$border = secretum_mod( 'copyright_nav_items_border_type', 'attr', true ) . secretum_mod( 'copyright_nav_items_border_color', 'attr', true );
	$margin = secretum_mod( 'copyright_nav_items_margin_y', 'attr', true ) . secretum_mod( 'copyright_nav_items_margin_x', 'attr', true );
	$padding = secretum_mod( 'copyright_nav_items_padding_y', 'attr', true ) . secretum_mod( 'copyright_nav_items_padding_x', 'attr', true );

	return apply_filters( 'secretum_copyright_nav_divider_classes', $background . $border . $margin . $padding, 10, 1 );

}//end secretum_copyright_nav_divider_classes()
