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
if (!function_exists('secretum_featured_image_wrapper')) {
	function secretum_featured_image_wrapper()
	{
		// Classes
		$background = secretum_mod('featured_image_wrapper_background_color', 'attr', true);
		$border = secretum_mod('featured_image_wrapper_border_type', 'attr', true) . secretum_mod('featured_image_wrapper_border_color', 'attr', true);
		$margin = secretum_mod('featured_image_wrapper_margin_top', 'attr', true) . secretum_mod('featured_image_wrapper_margin_bottom', 'attr', true);
		$padding = secretum_mod('featured_image_wrapper_padding_x', 'attr', true) . secretum_mod('featured_image_wrapper_padding_y', 'attr', true);

		return apply_filters('secretum_featured_image_wrapper', $background . $border . $margin . $padding, 10, 1);
	}
}


/**
 * Container Classes
 *
 * @return string Pre-sanitized string of class names
 */
if (!function_exists('secretum_featured_image_container')) {
	function secretum_featured_image_container()
	{
		// Classes
		$container = secretum_mod('featured_image_container_type', 'attr', false);
		$background = secretum_mod('featured_image_container_background_color', 'attr', true);
		$border = secretum_mod('featured_image_container_border_type', 'attr', true) . secretum_mod('featured_image_container_border_color', 'attr', true);
		$margin = secretum_mod('featured_image_container_margin_x', 'attr', true) . secretum_mod('featured_image_container_margin_y', 'attr', true);
		$padding = secretum_mod('featured_image_container_padding_x', 'attr', true) . secretum_mod('featured_image_container_padding_y', 'attr', true);

		return apply_filters('secretum_featured_image_container', $container . $background . $border . $margin . $padding, 10, 1);
	}
}
