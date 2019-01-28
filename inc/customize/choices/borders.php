<?php
/**
 * WordPress Customizer add_control 'choices' Arrays
 *
 * @package    Secretum
 * @subpackage Core\Customize\Choices\Borders
 * @author     SecretumTheme <author@secretumtheme.com>
 * @copyright  2018-2019 Secretum
 * @license    https://github.com/SecretumTheme/secretum/blob/master/license.txt GPL-2.0
 * @link       https://github.com/SecretumTheme/secretum/blob/master/inc/customize/choices/borders.php
 * @since      1.0.0
 */

namespace Secretum;


/**
 * Border Locations
 *
 * @since 1.0.0
 *
 * @return array Keys & Values For Select Options
 */
function secretum_customizer_border() {
	return [
		'' 				=> __( 'Theme Default', 'secretum' ),
		'border' 		=> __( 'Solid Border', 'secretum' ),
		'border-top' 	=> __( 'Top Border', 'secretum' ),
		'border-right' 	=> __( 'Right Border', 'secretum' ),
		'border-bottom' => __( 'Bottom Border', 'secretum' ),
		'border-left' 	=> __( 'Left Border', 'secretum' ),
		'border-0' 		=> __( 'No Border', 'secretum' ),
	];

}//end secretum_customizer_border()


/**
 * Border Locations
 *
 * @since 1.0.0
 *
 * @return array Keys & Values For Select Options
 */
function secretum_customizer_border_types() {
	return [
		'' 				=> __( 'Theme Default', 'secretum' ),
		'border' 		=> __( 'Solid Border', 'secretum' ),
		'border-top' 	=> __( 'Top Border', 'secretum' ),
		'border-right' 	=> __( 'Right Border', 'secretum' ),
		'border-bottom' => __( 'Bottom Border', 'secretum' ),
		'border-left' 	=> __( 'Left Border', 'secretum' ),
		'border-0' 		=> __( 'No Border', 'secretum' ),
	];

}//end secretum_customizer_border_types()


/**
 * Border Radius
 *
 * @since 1.0.0
 *
 * @return array Keys & Values For Select Options
 */
function secretum_customizer_border_radius() {
	return [
		'' 					=> __( 'Theme Default', 'secretum' ),
		'rounded-circle' 	=> __( 'Circle', 'secretum' ),
		'rounded-0' 		=> __( 'Square Borders', 'secretum' ),
		'rounded' 			=> __( 'Rounded Borders', 'secretum' ),
		'rounded-top' 		=> __( 'Rounded Top Borders', 'secretum' ),
		'rounded-right' 	=> __( 'Rounded Right Borders', 'secretum' ),
		'rounded-bottom' 	=> __( 'Rounded Bottom Borders', 'secretum' ),
		'rounded-left' 		=> __( 'Rounded Left Borders', 'secretum' ),
	];

}//end secretum_customizer_border_radius()


/**
 * Border Colors
 *
 * @since 1.0.0
 *
 * @return array Keys & Values For Select Options
 */
function secretum_customizer_border_colors() {
	return [
		'' 						=> __( 'Theme Default', 'secretum' ),
		'border-light' 			=> __( 'Light Theme Color Base', 'secretum' ),
		'border-dark' 			=> __( 'Dark Theme Color Base', 'secretum' ),
		'border-primary'		=> __( 'Primary Theme Color', 'secretum' ),
		'border-primary-dark' 	=> __( 'Primary "Dark" Theme Color', 'secretum' ),
		'border-primary-light' 	=> __( 'Primary "Light" Theme Color', 'secretum' ),
		'border-secondary' 		=> __( 'Secondary Theme Color', 'secretum' ),
		'border-primary-text' 	=> __( 'Primary Text Color', 'secretum' ),
		'border-secondary-text' => __( 'Secondary Text Color', 'secretum' ),
		'border-white' 			=> __( 'White', 'secretum' ),
		'border-whiteish' 		=> __( 'Whiteish', 'secretum' ),
		'border-black' 			=> __( 'Black', 'secretum' ),
		'border-blackish' 		=> __( 'Blackish', 'secretum' ),
		'border-gray' 			=> __( 'Gray', 'secretum' ),
		'border-gray-dark' 		=> __( 'Gray "Dark"', 'secretum' ),
		'border-gray-100' 		=> __( 'Gray 100', 'secretum' ),
		'border-gray-200' 		=> __( 'Gray 200', 'secretum' ),
		'border-gray-300' 		=> __( 'Gray 300', 'secretum' ),
		'border-gray-400' 		=> __( 'Gray 400', 'secretum' ),
		'border-gray-500' 		=> __( 'Gray 500', 'secretum' ),
		'border-gray-600' 		=> __( 'Gray 600', 'secretum' ),
		'border-gray-700' 		=> __( 'Gray 700', 'secretum' ),
		'border-gray-800' 		=> __( 'Gray 800', 'secretum' ),
		'border-gray-900' 		=> __( 'Gray 900', 'secretum' ),
		'border-blue' 			=> __( 'Blue', 'secretum' ),
		'border-cyan' 			=> __( 'Cyan', 'secretum' ),
		'border-green' 			=> __( 'Green', 'secretum' ),
		'border-indigo' 		=> __( 'Indigo', 'secretum' ),
		'border-orange' 		=> __( 'Orange', 'secretum' ),
		'border-purple' 		=> __( 'Purple', 'secretum' ),
		'border-pink' 			=> __( 'Pink', 'secretum' ),
		'border-red' 			=> __( 'Red', 'secretum' ),
		'border-teal' 			=> __( 'Teal', 'secretum' ),
		'border-yellow' 		=> __( 'Yellow', 'secretum' ),
		'border-danger' 		=> __( 'Danger', 'secretum' ),
		'border-info' 			=> __( 'Info', 'secretum' ),
		'border-success' 		=> __( 'Success', 'secretum' ),
		'border-warning' 		=> __( 'Warning', 'secretum' ),
	];

}//end secretum_customizer_border_colors()
