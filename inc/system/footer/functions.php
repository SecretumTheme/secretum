<?php
/**
 * Functions related to theme display or manipulation
 *
 * @package WordPress
 * @subpackage Secretum_Theme
 */


/**
 * Footer Wrapper Classes
 *
 * @return string Pre-sanitized string of class names
 */
if (!function_exists('secretum_footer_wrapper')) {
	function secretum_footer_wrapper()
	{
		// Get Mod
		$background_color_mod = secretum_mod('footer_background_color', 'attr', true);

		// Get Mod
		$border_color_mod = secretum_mod('footer_border_color') ? ' border-top' . secretum_mod('footer_border_color', 'attr', true) : '';

		// Get Mod
		$margin_mod = secretum_mod('footer_wrapper_margin', 'attr', true);

		// Get Mod
		$padding_mod = secretum_mod('footer_wrapper_padding', 'attr', true);

		// Build Class String
		$class_string = $background_color_mod . $border_color_mod . $margin_mod . (!empty($padding_mod) ? $padding_mod : ' py-5');

		// Echo Class String
		return apply_filters('secretum_footer_wrapper', $class_string, 10, 1);
	}
}


/**
 * Footer Container Classes
 *
 * @return string Pre-sanitized string of class names
 */
if (!function_exists('secretum_footer_container')) {
	function secretum_footer_container()
	{
		// Get Mod
		$padding_mod = secretum_mod('footer_container_padding', 'attr', true);

		// Build Class String
		$class_string = (secretum_mod('footer_container')) ? '-fluid ' . $padding_mod : $padding_mod;

		// Echo Class String
		return apply_filters('secretum_footer_container', $class_string, 10, 1);
	}
}
