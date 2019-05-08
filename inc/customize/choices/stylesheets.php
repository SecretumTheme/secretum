<?php
/**
 * WordPress Customizer add_control 'choices' Arrays
 *
 * @package    Secretum
 * @subpackage Customizer
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
 * @since 1.0.0
 *
 * @return array Keys & Values For Select Options
 */
function secretum_customizer_stylesheets() {
	return array_merge(
		[
			'' => __( 'Stylesheet Default', 'secretum' ),
		],
		secretum_customizer_stylesheets_blue()
	);

}//end secretum_customizer_stylesheets()


/**
 * Color: Blue
 *
 * @since 1.0.0
 *
 * @return array Keys & Values For Select Options
 */
function secretum_customizer_stylesheets_blue() {
	return [
		'bright-blue_bright-orange'     => __( 'Bright Blue - Bright Orange', 'secretum' ),
		'dark-blue_dark-magenta'        => __( 'Dark Blue - Dark Magenta', 'secretum' ),
		'dodger-blue_dark-grayish-blue' => __( 'Doger Blue 2 - Dark Grayish Blue', 'secretum' ),
		'very-dark-blue_vivid-orange'   => __( 'Very Dark Blue - Vivid Orange', 'secretum' ),
		'vivid-blue-dark-theme'         => __( 'Vivid Blue - Strong Red', 'secretum' ),
	];

}//end secretum_customizer_stylesheets_blue()

