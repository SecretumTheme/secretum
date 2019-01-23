<?php
/**
 * WordPress Customizer add_control 'choices' Arrays
 *
 * @package    Secretum
 * @subpackage Customize\Choices\Theme-Colors
 * @author     SecretumTheme <author@secretumtheme.com>
 * @copyright  2018-2019 Secretum
 * @license    https://github.com/SecretumTheme/secretum/blob/master/license.txt GPL-2.0
 * @link       https://github.com/SecretumTheme/secretum/blob/master/inc/customize/choices/theme-colors.php
 */

namespace Secretum;


/**
 * Textual Sizing
 *
 * @return array Keys & Values
 */
function secretum_theme_colors() {
	return array_merge(
		array(
			'' => __( 'Default Stylesheet', 'secretum' ),
		),
		get_option( 'secretum_theme_colors', array() )
	);
}
