<?php
/**
 * Functions related to theme display or manipulation
 *
 * @package    Secretum
 * @subpackage Core\Template-Functions\Scrolltop
 * @author     SecretumTheme <author@secretumtheme.com>
 * @copyright  2018-2019 Secretum
 * @license    https://github.com/SecretumTheme/secretum/blob/master/license.txt GPL-2.0
 * @link       https://github.com/SecretumTheme/secretum/blob/master/inc/template-functions/scrolltop.php
 * @since      1.0.0
 */

namespace Secretum;

/**
 * Container Classes
 *
 * @since 1.0.0
 */
function secretum_scrolltop_container() {
	$background = secretum_mod( 'scrolltop_background_color', 'attr', true ) . secretum_mod( 'scrolltop_background_hover_color', 'attr', true );
	$border = secretum_mod( 'scrolltop_border_type', 'attr', true ) . secretum_mod( 'scrolltop_border_radius', 'attr', true ) . secretum_mod( 'scrolltop_border_color', 'attr', true );
	$margin = secretum_mod( 'scrolltop_margin_right', 'attr', true ) . secretum_mod( 'scrolltop_margin_bottom', 'attr', true );
	$padding = secretum_mod( 'scrolltop_padding_x', 'attr', true ) . secretum_mod( 'scrolltop_padding_y', 'attr', true );

	echo esc_html( apply_filters( 'secretum_scrolltop_container', $background . $border . $margin . $padding, 10, 1 ) );

}//end secretum_scrolltop_container()


/**
 * Text/Front Classes
 *
 * @since 1.0.0
 */
function secretum_scrolltop_textuals() {
	$text_color = secretum_mod( 'scrolltop_text_color', 'attr', true );
	$font_size = secretum_mod( 'scrolltop_icon_size', 'attr', true );

	echo esc_html( apply_filters( 'secretum_scrolltop_textuals', $text_color . $font_size, 10, 1 ) );

}//end secretum_scrolltop_textuals()
