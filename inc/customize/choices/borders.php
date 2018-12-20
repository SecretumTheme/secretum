<?php
/**
 * WordPress Customizer add_control 'choices' Arrays
 *
 * @method secretum_customizer_border_locations()
 * @method secretum_customizer_border_colors()
 *
 * @package WordPress
 * @subpackage Secretum
 */


/**
 * Border Locations
 *
 * @return array Keys & Values
 */
if (!function_exists('secretum_customizer_border')) {
	function secretum_customizer_border()
	{
		return array(
			'' 				=> __('Theme Default', 'secretum'),
			'border' 		=> __('Solid Border', 'secretum'),
			'border-top' 	=> __('Top Border', 'secretum'),
			'border-right' 	=> __('Right Border', 'secretum'),
			'border-bottom' => __('Bottom Border', 'secretum'),
			'border-left' 	=> __('Left Border', 'secretum'),
			'border-0' 		=> __('No Border', 'secretum')
		);
	}
}


/**
 * Border Locations
 *
 * @return array Keys & Values
 */
if (!function_exists('secretum_customizer_border_types')) {
	function secretum_customizer_border_types()
	{
		return array(
			'' 				=> __('Theme Default', 'secretum'),
			'border' 		=> __('Solid Border', 'secretum'),
			'border-top' 	=> __('Top Border', 'secretum'),
			'border-right' 	=> __('Right Border', 'secretum'),
			'border-bottom' => __('Bottom Border', 'secretum'),
			'border-left' 	=> __('Left Border', 'secretum'),
			'border-0' 		=> __('No Border', 'secretum')
		);
	}
}


/**
 * Border Radius
 *
 * @return array Keys & Values
 */
if (!function_exists('secretum_customizer_border_radius')) {
	function secretum_customizer_border_radius()
	{
		return array(
			'' 					=> __('Theme Default', 'secretum'),
			'rounded-circle' 	=> __('Circle', 'secretum'),
			'rounded-0' 		=> __('Square Borders', 'secretum'),
			'rounded' 			=> __('Rounded Borders', 'secretum'),
			'rounded-top' 		=> __('Rounded Top Borders', 'secretum'),
			'rounded-right' 	=> __('Rounded Right Borders', 'secretum'),
			'rounded-bottom' 	=> __('Rounded Bottom Borders', 'secretum'),
			'rounded-left' 		=> __('Rounded Left Borders', 'secretum'),
		);
	}
}


/**
 * Border Colors
 *
 * @return array Keys & Values
 */
if (!function_exists('secretum_customizer_border_colors')) {
	function secretum_customizer_border_colors()
	{
		return array(
			'' 						=> __('Theme Default', 'secretum'),
			'border-light' 			=> __('Light Theme Color Base', 'secretum'),
			'border-dark' 			=> __('Dark Theme Color Base', 'secretum'),
			'border-primary'		=> __('Primary Theme Color', 'secretum'),
			'border-primary-dark' 	=> __('Primary "Dark" Theme Color', 'secretum'),
			'border-primary-light' 	=> __('Primary "Light" Theme Color', 'secretum'),
			'border-secondary' 		=> __('Secondary Theme Color', 'secretum'),
			'border-primary-text' 	=> __('Primary Text Color', 'secretum'),
			'border-secondary-text' => __('Secondary Text Color', 'secretum'),
			'border-white' 			=> __('White', 'secretum'),
			'border-whiteish' 		=> __('Whiteish', 'secretum'),
			'border-black' 			=> __('Black', 'secretum'),
			'border-blackish' 		=> __('Blackish', 'secretum'),
			'border-gray' 			=> __('Gray', 'secretum'),
			'border-gray-dark' 		=> __('Gray "Dark"', 'secretum'),
			'border-gray-100' 		=> __('Gray 100', 'secretum'),
			'border-gray-200' 		=> __('Gray 200', 'secretum'),
			'border-gray-300' 		=> __('Gray 300', 'secretum'),
			'border-gray-400' 		=> __('Gray 400', 'secretum'),
			'border-gray-500' 		=> __('Gray 500', 'secretum'),
			'border-gray-600' 		=> __('Gray 600', 'secretum'),
			'border-gray-700' 		=> __('Gray 700', 'secretum'),
			'border-gray-800' 		=> __('Gray 800', 'secretum'),
			'border-gray-900' 		=> __('Gray 900', 'secretum'),
			'border-blue' 			=> __('Blue', 'secretum'),
			'border-cyan' 			=> __('Cyan', 'secretum'),
			'border-green' 			=> __('Green', 'secretum'),
			'border-indigo' 		=> __('Indigo', 'secretum'),
			'border-orange' 		=> __('Orange', 'secretum'),
			'border-purple' 		=> __('Purple', 'secretum'),
			'border-pink' 			=> __('Pink', 'secretum'),
			'border-red' 			=> __('Red', 'secretum'),
			'border-teal' 			=> __('Teal', 'secretum'),
			'border-yellow' 		=> __('Yellow', 'secretum'),
			'border-danger' 		=> __('Danger', 'secretum'),
			'border-info' 			=> __('Info', 'secretum'),
			'border-success' 		=> __('Success', 'secretum'),
			'border-warning' 		=> __('Warning', 'secretum')
		);
	}
}