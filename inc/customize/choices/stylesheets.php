<?php
/**
 * WordPress Customizer add_control 'choices' Arrays
 *
 * @package    Secretum
 * @subpackage Core\Customize\Choices\Stylesheets
 * @author     SecretumTheme <author@secretumtheme.com>
 * @copyright  2018-2019 Secretum
 * @license    https://github.com/SecretumTheme/secretum/blob/master/license.txt GPL-2.0
 * @link       https://github.com/SecretumTheme/secretum/blob/master/inc/customize/choices/stylesheets.php
 * @since      1.0.0
 */

namespace Secretum;

/**
 * Customizer Stylesheet Color Schemes Combined
 *
 * @return array Merged Stylesheet Color Schemes
 */
function secretum_customizer_stylesheets() {
	return array_merge(
		[
			'' => __( 'Theme Default', 'secretum' ),
		],
		secretum_customizer_stylesheets_blue()
	);
}//end secretum_customizer_stylesheets()


/**
 * Color: Blue
 *
 * @return array Stylesheet Name (key) & Values
 */
function secretum_customizer_stylesheets_blue() {
	return [
		'bright-blue_bright-orange'	=> __( 'Bright Blue - Bright Orange', 'secretum' ),
		'dark-blue_dark-magenta'	=> __( 'Dark Blue - Dark Magenta', 'secretum' ),
	];
}//end secretum_customizer_stylesheets_blue()

