<?php
/**
 * Functions related to theme display or manipulation
 *
 * @package    Secretum
 * @subpackage Core\Template-Functions\Theme
 * @author     SecretumTheme <author@secretumtheme.com>
 * @copyright  2018-2019 Secretum
 * @license    https://github.com/SecretumTheme/secretum/blob/master/license.txt GPL-2.0
 * @link       https://github.com/SecretumTheme/secretum/blob/master/inc/template-functions/theme.php
 * @since      1.0.0
 */

namespace Secretum;

/**
 * Color Classes
 *
 * @see inc/template-filters.php
 *
 * @return string Pre-sanitized string of class names
 */
function secretum_theme_colors() {
	$background_color 	= secretum_mod( 'theme_background_color', 'attr', true );
	$text_color 		= secretum_mod( 'theme_text_color', 'attr', true );
	$link_color 		= secretum_mod( 'theme_link_color', 'attr', true );
	$link_hover_color 	= secretum_mod( 'theme_link_hover_color', 'attr', true );

	return $background_color . $text_color . $link_color . $link_hover_color;
}


/**
 * Font Classes
 *
 * @see inc/template-filters.php
 *
 * @return string Pre-sanitized string of class names
 */
function secretum_theme_fonts() {
	$font_family 	= secretum_mod( 'theme_font_family', 'attr', true );
	$font_size 		= secretum_mod( 'theme_font_size', 'attr', true );

	return $font_family . $font_size;
}
