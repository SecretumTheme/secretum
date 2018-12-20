<?php
/**
 * Functions related to theme display or manipulation
 *
 * @package WordPress
 * @subpackage Secretum
 */


/**
 * Wrapper Classes
 *
 * @return string Pre-sanitized string of class names
 */
if (!function_exists('secretum_body_wrapper')) {
	function secretum_body_wrapper()
	{
		// Classes
		$background = secretum_mod('body_wrapper_background_color', 'attr', true);
		$border = secretum_mod('body_wrapper_border_type', 'attr', true) . secretum_mod('body_wrapper_border_color', 'attr', true);
		$margin = secretum_mod('body_wrapper_margin_top', 'attr', true) . secretum_mod('body_wrapper_margin_bottom', 'attr', true);
		$padding = secretum_mod('body_wrapper_padding_y', 'attr', true);

		return apply_filters('secretum_body_wrapper', $background . $border . $margin . $padding, 10, 1);
	}
}


/**
 * Container Classes
 *
 * @return string Pre-sanitized string of class names
 */
if (!function_exists('secretum_body_container')) {
	function secretum_body_container()
	{
		// Classes
		$container = secretum_mod('body_container_type', 'attr', false);
		$background = secretum_mod('body_container_background_color', 'attr', true);
		$border = secretum_mod('body_container_border_type', 'attr', true) . secretum_mod('body_container_border_color', 'attr', true);
		$padding = secretum_mod('body_container_padding_x', 'attr', true) . secretum_mod('body_container_padding_y', 'attr', true);

		return apply_filters('secretum_body_container', $container . $background . $border . $padding, 10, 1);
	}
}
