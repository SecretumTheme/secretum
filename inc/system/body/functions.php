<?php
/**
 * Functions related to theme display or manipulation
 *
 * @package WordPress
 * @subpackage Secretum_Theme
 */


/**
 * Body Wrapper Classes
 *
 * @return string Pre-sanitized string of class names
 */
if (!function_exists('secretum_body_wrapper')) {
	function secretum_body_wrapper()
	{
		// Get Mod
		$background_color_mod = secretum_mod('body_background_color', 'attr', true);

		// Get Mod
		$margin_bottom_mod = secretum_mod('body_wrapper_margin_bottom', 'attr', true);

		// Get Mod
		$margin_top_mod = secretum_mod('body_wrapper_margin_top', 'attr', true);

		// Get Mod
		$padding_mod = secretum_mod('body_wrapper_padding', 'attr', true);

		// Build Class String
		$class_string = ' cover' . $background_color_mod . $margin_bottom_mod . $margin_top_mod . (!empty($padding_mod) ? $padding_mod : ' py-5');

		// Return Class String
		return apply_filters('secretum_body_wrapper', $class_string, 10, 1);
	}
}


/**
 * Body Container Classes
 *
 * @return string Pre-sanitized string of class names
 */
if (!function_exists('secretum_body_container')) {
	function secretum_body_container()
	{
		// Get Mod
		$container_mod = secretum_mod('body_container', 'attr', true);

		// Get Mod
		$padding_mod = secretum_mod('body_container_padding', 'attr', true);

		// Build Class String
		$class_string = (!empty($container_mod)) ? '-fluid' . $padding_mod : $padding_mod;

		// Return Class String
		return apply_filters('secretum_body_container', $class_string, 10, 1);
	}
}
