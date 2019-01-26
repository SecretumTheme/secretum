<?php
/**
 * Functions related to theme display or manipulation
 *
 * @package    Secretum
 * @subpackage Core\Template-Functions\Header-Top
 * @author     SecretumTheme <author@secretumtheme.com>
 * @copyright  2018-2019 Secretum
 * @license    https://github.com/SecretumTheme/secretum/blob/master/license.txt GPL-2.0
 * @link       https://github.com/SecretumTheme/secretum/blob/master/inc/template-functions/header-top.php
 * @since      1.0.0
 */

namespace Secretum;

/**
 * Wrapper Classes
 *
 * @since 1.0.0
 */
function secretum_header_top_wrapper() {
	$wrapper = \Secretum\Wrapper::classes( 'header_top' );
	$borders = \Secretum\Borders::classes( 'header_top_wrapper' );

	echo esc_html( $wrapper . $borders );

}//end secretum_header_top_wrapper()


/**
 * Text Alignment Class
 *
 * @since 1.0.0
 */
function secretum_header_top_text_alignment() {
	$alignment = secretum_mod( 'header_top_text_alignment', 'attr', true );

	echo esc_html( $alignment );

}//end secretum_header_top_text_alignment()


/**
 * Container Classes
 *
 * @since 1.0.0
 */
function secretum_header_top_container() {
	$container 	= \Secretum\Container::classes( 'header_top' );
	$borders 	= \Secretum\Borders::classes( 'header_top_container' );
	$textuals 	= \Secretum\Textuals::classes( 'header_top' );

	echo esc_html( $container . $borders . $textuals );

}//end secretum_header_top_container()


/**
 * Primary Menu Item Classes
 *
 * @since 1.0.0
 *
 * @return string Classes.
 */
function secretum_header_top_items() {
	$nav_items = \Secretum\NavItems::classes( 'header_top' );

	return $nav_items;

}//end secretum_header_top_items()
