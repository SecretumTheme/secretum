<?php
/**
 * Functions related to theme display or manipulation
 *
 * @package WordPress
 * @subpackage Secretum
 */


/**
 * Header Wrapper Classes
 *
 * @return string Pre-sanitized string of class names
 */
if (!function_exists('secretum_header_wrapper')) {
	function secretum_header_wrapper()
	{
		// Classes
		$background = secretum_mod('header_wrapper_background_color', 'attr', true);
		$border = secretum_mod('header_wrapper_border_type', 'attr', true) . secretum_mod('header_wrapper_border_color', 'attr', true);
		$margin = secretum_mod('header_wrapper_margin_top', 'attr', true) . secretum_mod('header_wrapper_margin_bottom', 'attr', true);
		$padding = secretum_mod('header_wrapper_padding_y', 'attr', true);

		return apply_filters('secretum_header_wrapper', $background . $border . $margin . $padding, 10, 1);
	}
}


/**
 * Header Container Classes
 *
 * @return string Pre-sanitized string of class names
 */
if (!function_exists('secretum_header_container')) {
	function secretum_header_container()
	{
		// Classes
		$container = secretum_mod('header_container_type', 'attr', false);
		$background = secretum_mod('header_container_background_color', 'attr', true);
		$border = secretum_mod('header_container_border_type', 'attr', true) . secretum_mod('header_container_border_color', 'attr', true);
		$padding = secretum_mod('header_container_padding_x', 'attr', true) . secretum_mod('header_container_padding_y', 'attr', true);

		return apply_filters('secretum_header_container', $container . $background . $border . $padding, 10, 1);
	}
}
