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
			'' => __( 'Default: Very Dark Grayish Blue - Grayish Blue', 'secretum' ),
		],
		secretum_customizer_theme_colors()
	);

}//end secretum_customizer_stylesheets()


/**
 * Theme Colors
 *
 * @since 1.0.0
 *
 * @return array Keys & Values For Select Options
 */
function secretum_customizer_theme_colors() {
	return [
		// 'bright-blue_bright-orange'          => __( '--: Bright Blue - Bright Orange', 'secretum' ), Removed Version 1.8.0 - Remove Next Version.
		// 'dark-blue_dark-magenta'             => __( '--: Dark Blue - Dark Magenta', 'secretum' ), Removed Version 1.8.0 - Remove Next Version.
		// 'dodger-blue_dark-grayish-blue'      => __( '--: Doger Blue 2 - Dark Grayish Blue', 'secretum' ), Removed Version 1.8.0 - Remove Next Version.
		// 'very-dark-blue_vivid-orange'        => __( '--: Very Dark Blue - Vivid Orange', 'secretum' ), Removed Version 1.8.0 - Remove Next Version.
		// 'vivid-blue-dark-theme'              => __( '--: Vivid Blue - Strong Red', 'secretum' ), Removed Version 1.8.0 - Remove Next Version.
		'lt_bright-blue_bright-orange'       => __( 'Light: Bright Blue - Bright Orange', 'secretum' ),
		'lt_dark-blue_dark-magenta'          => __( 'Light: Dark Blue - Dark Magenta', 'secretum' ),
		'lt_dodger-blue_dark-grayish-blue'   => __( 'Light: Doger Blue 2 - Dark Grayish Blue', 'secretum' ),
		'lt_very-dark-blue_vivid-orange'     => __( 'Light: Very Dark Blue - Vivid Orange', 'secretum' ),
		'lt_mostly-pure-blue_moderate-green' => __( 'Light: Mostly Pure Blue - Moderate Green', 'secretum' ),
		'dt_vivid-blue_strong-red'           => __( 'Dark: Vivid Blue - Strong Red', 'secretum' ),
		'dt_dark-yellow-olive_vivid-orange'  => __( 'Dark: Dark Yellow Olive - Vivid Orange', 'secretum' ),
	];

}//end secretum_customizer_theme_colors()

