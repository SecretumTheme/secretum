<?php
/**
 * Functions related to theme display or manipulation
 *
 * @package WordPress
 * @subpackage Secretum_Theme
 */


/**
 * Copyright Wrapper Classes
 *
 * @return string Pre-sanitized string of class names
 */
if (!function_exists('secretum_copyright_wrapper')) {
	function secretum_copyright_wrapper()
	{
		// Get Mod
		$background_color_mod = secretum_mod('copyright_background_color', 'attr', true);

		// Get Mod
		$margin_mod = secretum_mod('copyright_wrapper_margin', 'attr', true);

		// Get Mod
		$padding_mod = secretum_mod('copyright_wrapper_padding', 'attr', true);

		// Build Class String
		$class_string = $background_color_mod . $margin_mod . (!empty($padding_mod) ? $padding_mod : ' py-5');

		// Return Class String
		return apply_filters('secretum_copyright_wrapper', $class_string, 10, 1);
	}
}


/**
 * Copyright Container Classes
 *
 * @return string Pre-sanitized string of class names
 */
if (!function_exists('secretum_copyright_container')) {
	function secretum_copyright_container()
	{
		// Get Mod
		$padding_mod = secretum_mod('copyright_container_padding', 'attr', true);

		// Build Class String
		$class_string = (secretum_mod('copyright_container')) ? '-fluid ' . $padding_mod : $padding_mod;

		// Return Class String
		return apply_filters('secretum_copyright_container', $class_string, 10, 1);
	}
}
