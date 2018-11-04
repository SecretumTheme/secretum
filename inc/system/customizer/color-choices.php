<?php
/**
 * WordPress Customizer add_control 'choices' Arrays
 *
 * @package WordPress
 * @subpackage Secretum_Theme
 */


/**
 * Text Colors
 *
 * @source inc/system/entry/customize/colors.php
 *
 * @return array Color key and values
 */
if (!function_exists('secretum_customizer_text_colors')) {
	function secretum_customizer_text_colors()
	{
		return array(
			'' 						=> __('Theme Default', 'secretum'),
			'color-primary-text' 	=> __('Primary Text Color', 'secretum'),
			'color-secondary-text' 	=> __('Secondary Text Color', 'secretum'),
			'color-light' 			=> __('Light Theme Color Base', 'secretum'),
			'color-dark' 			=> __('Dark Theme Color Base', 'secretum'),
			'color-primary'			=> __('Primary Theme Color', 'secretum'),
			'color-primary-dark' 	=> __('Primary "Dark" Theme Color', 'secretum'),
			'color-primary-light' 	=> __('Primary "Light" Theme Color', 'secretum'),
			'color-secondary' 		=> __('Secondary Theme Color', 'secretum'),
			'color-white' 			=> __('White', 'secretum'),
			'color-whiteish' 		=> __('Whiteish', 'secretum'),
			'color-black' 			=> __('Black', 'secretum'),
			'color-blackish' 		=> __('Blackish', 'secretum'),
			'color-gray' 			=> __('Gray', 'secretum'),
			'color-gray-dark' 		=> __('Gray "Dark"', 'secretum'),
			'color-gray-100' 		=> __('Gray 100', 'secretum'),
			'color-gray-200' 		=> __('Gray 200', 'secretum'),
			'color-gray-300' 		=> __('Gray 300', 'secretum'),
			'color-gray-400' 		=> __('Gray 400', 'secretum'),
			'color-gray-500' 		=> __('Gray 500', 'secretum'),
			'color-gray-600' 		=> __('Gray 600', 'secretum'),
			'color-gray-700' 		=> __('Gray 700', 'secretum'),
			'color-gray-800' 		=> __('Gray 800', 'secretum'),
			'color-gray-900' 		=> __('Gray 900', 'secretum'),
			'color-blue' 			=> __('Blue', 'secretum'),
			'color-cyan' 			=> __('Cyan', 'secretum'),
			'color-green' 			=> __('Green', 'secretum'),
			'color-indigo' 			=> __('Indigo', 'secretum'),
			'color-orange' 			=> __('Orange', 'secretum'),
			'color-purple' 			=> __('Purple', 'secretum'),
			'color-pink' 			=> __('Pink', 'secretum'),
			'color-red' 			=> __('Red', 'secretum'),
			'color-teal' 			=> __('Teal', 'secretum'),
			'color-yellow' 			=> __('Yellow', 'secretum'),
			'color-danger' 			=> __('Danger', 'secretum'),
			'color-info' 			=> __('Info', 'secretum'),
			'color-success' 		=> __('Success', 'secretum'),
			'color-warning' 		=> __('Warning', 'secretum')
		);
	}
}


/**
 * Link Colors
 *
 * @source inc/system/copyright/customize/colors.php
 * @source inc/system/copyright-nav/customize/colors.php
 * @source inc/system/entry/customize/colors.php
 *
 * @return array Color key and values
 */
if (!function_exists('secretum_customizer_link_colors')) {
	function secretum_customizer_link_colors()
	{
		return array(
			'' 							=> __('Theme Default', 'secretum'),
			'color-linkcolor' 			=> __('Theme Link Color', 'secretum'),
			'color-light-link' 			=> __('Light Theme Color Base', 'secretum'),
			'color-dark-link' 			=> __('Dark Theme Color Base', 'secretum'),
			'color-primary-link'		=> __('Primary Theme Color', 'secretum'),
			'color-primary-dark-link' 	=> __('Primary "Dark" Theme Color', 'secretum'),
			'color-primary-light-link' 	=> __('Primary "Light" Theme Color', 'secretum'),
			'color-secondary-link' 		=> __('Secondary Theme Color', 'secretum'),
			'color-primary-text-link' 	=> __('Primary Text Color', 'secretum'),
			'color-secondary-text-link' => __('Secondary Text Color', 'secretum'),
			'color-white-link' 			=> __('White', 'secretum'),
			'color-whiteish-link' 		=> __('Whiteish', 'secretum'),
			'color-black-link' 			=> __('Black', 'secretum'),
			'color-blackish-link' 		=> __('Blackish', 'secretum'),
			'color-gray-link' 			=> __('Gray', 'secretum'),
			'color-gray-dark-link' 		=> __('Gray "Dark"', 'secretum'),
			'color-gray-100-link' 		=> __('Gray 100', 'secretum'),
			'color-gray-200-link' 		=> __('Gray 200', 'secretum'),
			'color-gray-300-link' 		=> __('Gray 300', 'secretum'),
			'color-gray-400-link' 		=> __('Gray 400', 'secretum'),
			'color-gray-500-link' 		=> __('Gray 500', 'secretum'),
			'color-gray-600-link' 		=> __('Gray 600', 'secretum'),
			'color-gray-700-link' 		=> __('Gray 700', 'secretum'),
			'color-gray-800-link' 		=> __('Gray 800', 'secretum'),
			'color-gray-900-link' 		=> __('Gray 900', 'secretum'),
			'color-blue-link' 			=> __('Blue', 'secretum'),
			'color-cyan-link' 			=> __('Cyan', 'secretum'),
			'color-green-link' 			=> __('Green', 'secretum'),
			'color-indigo-link' 		=> __('Indigo', 'secretum'),
			'color-orange-link' 		=> __('Orange', 'secretum'),
			'color-purple-link' 		=> __('Purple', 'secretum'),
			'color-pink-link' 			=> __('Pink', 'secretum'),
			'color-red-link' 			=> __('Red', 'secretum'),
			'color-teal-link' 			=> __('Teal', 'secretum'),
			'color-yellow-link' 		=> __('Yellow', 'secretum'),
			'color-danger-link' 		=> __('Danger', 'secretum'),
			'color-info-link' 			=> __('Info', 'secretum'),
			'color-success-link' 		=> __('Success', 'secretum'),
			'color-warning-link' 		=> __('Warning', 'secretum')
		);
	}
}


/**
 * Link Hover Colors
 *
 * @source inc/system/copyright/customize/colors.php
 * @source inc/system/copyright-nav/customize/colors.php
 * @source inc/system/entry/customize/colors.php
 *
 * @return array Color key and values
 */
if (!function_exists('secretum_customizer_link_hover_colors')) {
	function secretum_customizer_link_hover_colors()
	{
		return array(
			'' 							=> __('Theme Default', 'secretum'),
			'color-linkhover' 			=> __('Theme Link Hover Color', 'secretum'),
			'color-light-hover' 		=> __('Light Theme Color Base', 'secretum'),
			'color-dark-hover' 			=> __('Dark Theme Color Base', 'secretum'),
			'color-primary-hover'		=> __('Primary Theme Color', 'secretum'),
			'color-primary-dark-hover' 	=> __('Primary "Dark" Theme Color', 'secretum'),
			'color-primary-light-hover' => __('Primary "Light" Theme Color', 'secretum'),
			'color-secondary-hover' 	=> __('Secondary Theme Color', 'secretum'),
			'color-primary-text-hover' 	=> __('Primary Text Color', 'secretum'),
			'color-secondary-text-hover'=> __('Secondary Text Color', 'secretum'),
			'color-white-hover' 		=> __('White', 'secretum'),
			'color-whiteish-hover' 		=> __('Whiteish', 'secretum'),
			'color-black-hover' 		=> __('Black', 'secretum'),
			'color-blackish-hover' 		=> __('Blackish', 'secretum'),
			'color-gray-hover' 			=> __('Gray', 'secretum'),
			'color-gray-dark-hover' 	=> __('Gray "Dark"', 'secretum'),
			'color-gray-100-hover' 		=> __('Gray 100', 'secretum'),
			'color-gray-200-hover' 		=> __('Gray 200', 'secretum'),
			'color-gray-300-hover' 		=> __('Gray 300', 'secretum'),
			'color-gray-400-hover' 		=> __('Gray 400', 'secretum'),
			'color-gray-500-hover' 		=> __('Gray 500', 'secretum'),
			'color-gray-600-hover' 		=> __('Gray 600', 'secretum'),
			'color-gray-700-hover' 		=> __('Gray 700', 'secretum'),
			'color-gray-800-hover' 		=> __('Gray 800', 'secretum'),
			'color-gray-900-hover' 		=> __('Gray 900', 'secretum'),
			'color-blue-hover' 			=> __('Blue', 'secretum'),
			'color-cyan-hover' 			=> __('Cyan', 'secretum'),
			'color-green-hover' 		=> __('Green', 'secretum'),
			'color-indigo-hover' 		=> __('Indigo', 'secretum'),
			'color-orange-hover' 		=> __('Orange', 'secretum'),
			'color-purple-hover' 		=> __('Purple', 'secretum'),
			'color-pink-hover' 			=> __('Pink', 'secretum'),
			'color-red-hover' 			=> __('Red', 'secretum'),
			'color-teal-hover' 			=> __('Teal', 'secretum'),
			'color-yellow-hover' 		=> __('Yellow', 'secretum'),
			'color-danger-hover' 		=> __('Danger', 'secretum'),
			'color-info-hover' 			=> __('Info', 'secretum'),
			'color-success-hover' 		=> __('Success', 'secretum'),
			'color-warning-hover' 		=> __('Warning', 'secretum')
		);
	}
}


/**
 * Background Colors
 *
 * @source inc/system/body/customize/colors.php
 * @source inc/system/copyright/customize/colors.php
 * @source inc/system/copyright-nav/customize/colors.php
 * @source inc/system/entry/customize/colors.php
 * @source inc/system/footer/customize/colors.php
 * @source inc/system/header/customize/colors.php
 * @source inc/system/sidebars/customize/colors.php
 *
 * @return array Color key and values
 */
if (!function_exists('secretum_customizer_background_colors')) {
	function secretum_customizer_background_colors()
	{
		return array(
			'' 					=> __('Theme Default', 'secretum'),
			'bg-transparent' 	=> __('Transparent Background', 'secretum'),
			'content-bg' 		=> __('Default Content Background', 'secretum'),
			'body-bg' 			=> __('Default Body Background', 'secretum'),
			'bg-light' 			=> __('Light Theme Color Base', 'secretum'),
			'bg-dark' 			=> __('Dark Theme Color Base', 'secretum'),
			'bg-primary'		=> __('Primary Theme Color', 'secretum'),
			'bg-primary-dark' 	=> __('Primary "Dark" Theme Color', 'secretum'),
			'bg-primary-light' 	=> __('Primary "Light" Theme Color', 'secretum'),
			'bg-secondary' 		=> __('Secondary Theme Color', 'secretum'),
			'bg-primary-text' 	=> __('Primary Text Color', 'secretum'),
			'bg-secondary-text' => __('Secondary Text Color', 'secretum'),
			'bg-white' 			=> __('White', 'secretum'),
			'bg-whiteish' 		=> __('Whiteish', 'secretum'),
			'bg-black' 			=> __('Black', 'secretum'),
			'bg-blackish' 		=> __('Blackish', 'secretum'),
			'bg-gray' 			=> __('Gray', 'secretum'),
			'bg-gray-dark' 		=> __('Gray "Dark"', 'secretum'),
			'bg-gray-100' 		=> __('Gray 100', 'secretum'),
			'bg-gray-200' 		=> __('Gray 200', 'secretum'),
			'bg-gray-300' 		=> __('Gray 300', 'secretum'),
			'bg-gray-400' 		=> __('Gray 400', 'secretum'),
			'bg-gray-500' 		=> __('Gray 500', 'secretum'),
			'bg-gray-600' 		=> __('Gray 600', 'secretum'),
			'bg-gray-700' 		=> __('Gray 700', 'secretum'),
			'bg-gray-800' 		=> __('Gray 800', 'secretum'),
			'bg-gray-900' 		=> __('Gray 900', 'secretum'),
			'bg-blue' 			=> __('Blue', 'secretum'),
			'bg-cyan' 			=> __('Cyan', 'secretum'),
			'bg-green' 			=> __('Green', 'secretum'),
			'bg-indigo' 		=> __('Indigo', 'secretum'),
			'bg-orange' 		=> __('Orange', 'secretum'),
			'bg-purple' 		=> __('Purple', 'secretum'),
			'bg-pink' 			=> __('Pink', 'secretum'),
			'bg-red' 			=> __('Red', 'secretum'),
			'bg-teal' 			=> __('Teal', 'secretum'),
			'bg-yellow' 		=> __('Yellow', 'secretum'),
			'bg-danger' 		=> __('Danger', 'secretum'),
			'bg-info' 			=> __('Info', 'secretum'),
			'bg-success' 		=> __('Success', 'secretum'),
			'bg-warning' 		=> __('Warning', 'secretum')
		);
	}
}


/**
 * Background Hover Colors
 *
 * @return array Color key and values
 */
if (!function_exists('secretum_customizer_background_hover_colors')) {
	function secretum_customizer_background_hover_colors()
	{
		return array(
			'' 							=> __('Theme Default', 'secretum'),
			'bg-transparent-hover' 		=> __('Transparent Background', 'secretum'),
			'content-bg-hover' 			=> __('Default Content Background', 'secretum'),
			'body-bg-hover' 			=> __('Default Body Background', 'secretum'),
			'bg-light-hover' 			=> __('Light Theme Color Base', 'secretum'),
			'bg-dark-hover' 			=> __('Dark Theme Color Base', 'secretum'),
			'bg-primary-hover'			=> __('Primary Theme Color', 'secretum'),
			'bg-primary-dark-hover' 	=> __('Primary "Dark" Theme Color', 'secretum'),
			'bg-primary-light-hover' 	=> __('Primary "Light" Theme Color', 'secretum'),
			'bg-secondary-hover' 		=> __('Secondary Theme Color', 'secretum'),
			'bg-primary-text-hover' 	=> __('Primary Text Color', 'secretum'),
			'bg-secondary-text-hover' 	=> __('Secondary Text Color', 'secretum'),
			'bg-white-hover' 			=> __('White', 'secretum'),
			'bg-whiteish-hover' 		=> __('Whiteish', 'secretum'),
			'bg-black-hover' 			=> __('Black', 'secretum'),
			'bg-blackish-hover' 		=> __('Blackish', 'secretum'),
			'bg-gray-hover' 			=> __('Gray', 'secretum'),
			'bg-gray-dark-hover' 		=> __('Gray "Dark"', 'secretum'),
			'bg-gray-100-hover' 		=> __('Gray 100', 'secretum'),
			'bg-gray-200-hover' 		=> __('Gray 200', 'secretum'),
			'bg-gray-300-hover' 		=> __('Gray 300', 'secretum'),
			'bg-gray-400-hover' 		=> __('Gray 400', 'secretum'),
			'bg-gray-500-hover' 		=> __('Gray 500', 'secretum'),
			'bg-gray-600-hover' 		=> __('Gray 600', 'secretum'),
			'bg-gray-700-hover' 		=> __('Gray 700', 'secretum'),
			'bg-gray-800-hover' 		=> __('Gray 800', 'secretum'),
			'bg-gray-900-hover' 		=> __('Gray 900', 'secretum'),
			'bg-blue-hover' 			=> __('Blue', 'secretum'),
			'bg-cyan-hover' 			=> __('Cyan', 'secretum'),
			'bg-green-hover' 			=> __('Green', 'secretum'),
			'bg-indigo-hover' 			=> __('Indigo', 'secretum'),
			'bg-orange-hover' 			=> __('Orange', 'secretum'),
			'bg-purple-hover' 			=> __('Purple', 'secretum'),
			'bg-pink-hover' 			=> __('Pink', 'secretum'),
			'bg-red-hover' 				=> __('Red', 'secretum'),
			'bg-teal-hover' 			=> __('Teal', 'secretum'),
			'bg-yellow-hover' 			=> __('Yellow', 'secretum'),
			'bg-danger-hover' 			=> __('Danger', 'secretum'),
			'bg-info-hover' 			=> __('Info', 'secretum'),
			'bg-success-hover' 			=> __('Success', 'secretum'),
			'bg-warning-hover' 			=> __('Warning', 'secretum')
		);
	}
}


/**
 * Border Colors
 *
 * @source inc/system/copyright/customize/colors.php
 * @source inc/system/copyright-nav/customize/colors.php
 * @source inc/system/footer/customize/colors.php
 * @source inc/system/header/customize/colors.php
 *
 * @return array Color key and values
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
