<?php
/**
 * Functions related to theme display or manipulation
 *
 * @package    Secretum
 * @subpackage Core\Template-Functions\Footer
 * @author     SecretumTheme <author@secretumtheme.com>
 * @copyright  2018-2019 Secretum
 * @license    https://github.com/SecretumTheme/secretum/blob/master/license.txt GPL-2.0
 * @link       https://github.com/SecretumTheme/secretum/blob/master/inc/template-functions/footer.php
 * @since      1.0.0
 */

namespace Secretum;

/**
 * Footer Wrapper Classes
 *
 * @since 1.0.0
 */
function secretum_footer_wrapper() {
	$wrapper = \Secretum\Wrapper::classes( 'footer' );
	$borders = \Secretum\Borders::classes( 'footer_wrapper' );

	echo esc_html( apply_filters( 'secretum_footer_wrapper', $wrapper . $borders, 10, 1 ) );

}//end secretum_footer_wrapper()


/**
 * Footer Container Classes
 *
 * @since 1.0.0
 */
function secretum_footer_container() {
	$alignment = secretum_mod( 'footer_text_alignment', 'attr', true );
	$container = \Secretum\Container::classes( 'footer' );
	$textuals = \Secretum\Textuals::classes( 'footer' );
	$borders = \Secretum\Borders::classes( 'footer_container' );

	echo esc_html( apply_filters( 'secretum_footer_container', $alignment . $container . $textuals . $borders, 10, 1 ) );

}//end secretum_footer_container()


/**
 * Font/Text/Link Classes
 *
 * @since 1.0.0
 *
 * @return string Pre-sanitized string of class names
 */
function secretum_footer_textuals() {
	$alignment = secretum_mod( 'footer_text_alignment', 'attr', true );
	$textuals = \Secretum\Textuals::classes( 'footer' );

	return apply_filters( 'secretum_footer_textuals', $alignment . $textuals, 10, 1 );

}//end secretum_footer_textuals()
