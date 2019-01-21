<?php
/**
 * Functions related to theme display or manipulation
 *
 * @package    Secretum
 * @subpackage Secretum\TemplateFunctions
 * @author     SecretumTheme <author@secretumtheme.com>
 * @copyright  2018-2019 Secretum
 * @license    https://github.com/SecretumTheme/secretum/blob/master/license.txt GPL-2.0
 * @link       https://github.com/SecretumTheme/secretum/blob/master/inc/template-functions/header-top.php
 */

namespace Secretum;

/**
 * Wrapper Classes
 */
function secretum_header_top_wrapper() {
	$wrapper = \Secretum\Wrapper::classes( 'header_top' );
	$borders = \Secretum\Borders::classes( 'header_top_wrapper' );

	echo esc_html( $wrapper . $borders );

}//end secretum_header_top_wrapper()


/**
 * Text Alignment Class
 */
function secretum_header_top_text_alignment() {
	echo esc_html( apply_filters( 'secretum_header_top_text_alignment', secretum_mod( 'header_top_text_alignment', 'attr', true ) ) );

}//end secretum_header_top_text_alignment()


/**
 * Container Classes
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
 * @return string Classes.
 */
function secretum_header_top_divider_classes() {
	$background = secretum_mod( 'header_top_items_background_color', 'attr', true ) . secretum_mod( 'header_top_items_background_hover_color', 'attr', true );
	$border = secretum_mod( 'header_top_items_border_type', 'attr', true ) . secretum_mod( 'header_top_items_border_color', 'attr', true );
	$margin = secretum_mod( 'header_top_items_margin_y', 'attr', true ) . secretum_mod( 'header_top_items_margin_x', 'attr', true );
	$padding = secretum_mod( 'header_top_items_padding_y', 'attr', true ) . secretum_mod( 'header_top_items_padding_x', 'attr', true );

	return apply_filters( 'secretum_header_top_divider_classes', $background . $border . $margin . $padding, 10, 1 );

}//end secretum_header_top_divider_classes()
