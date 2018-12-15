<?php
/**
 * Functions related to theme display or manipulation
 *
 * @package WordPress
 * @subpackage Secretum
 */


/**
 * Copyright Wrapper Classes
 *
 * @return string Pre-sanitized string of class names
 */
if (!function_exists('secretum_copyright_wrapper')) {
	function secretum_copyright_wrapper()
	{
		// Classes
		$background = secretum_mod('copyright_wrapper_background_color', 'attr', true);
		$border = secretum_mod('copyright_wrapper_border_type', 'attr', true) . secretum_mod('copyright_wrapper_border_color', 'attr', true);
		$margin = secretum_mod('copyright_wrapper_margin_top', 'attr', true) . secretum_mod('copyright_wrapper_margin_bottom', 'attr', true);
		$padding = secretum_mod('copyright_wrapper_padding_y', 'attr', true);

		return apply_filters('secretum_copyright_wrapper', $background . $border . $margin . $padding, 10, 1);
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
		// Classes
		$container = secretum_mod('copyright_container_type', 'attr', false);
		$background = secretum_mod('copyright_container_background_color', 'attr', true);
		$border = secretum_mod('copyright_container_border_type', 'attr', true) . secretum_mod('copyright_container_border_color', 'attr', true);
		$padding = secretum_mod('copyright_container_padding_x', 'attr', true) . secretum_mod('copyright_container_padding_y', 'attr', true);

		return apply_filters('secretum_copyright_container', $container . $background . $border . $padding, 10, 1);
	}
}


/**
 * Alignment
 *
 * @return string Pre-sanitized class name
 */
if (!function_exists('secretum_copyright_text_alignment')) {
	function secretum_copyright_text_alignment()
	{
		return apply_filters('secretum_text_alignment', secretum_mod('copyright_text_alignment', 'attr', true), 10, 1);
	}
}


/**
 * Copyright Text/Front Classes
 *
 * @return string Pre-sanitized string of class names
 */
if (!function_exists('secretum_copyright_textuals')) {
	function secretum_copyright_textuals()
	{
		// Classes
		$font_size = secretum_mod('copyright_text_font_size', 'attr', true);
		$font_family = secretum_mod('copyright_text_font_family', 'attr', true);
		$font_style = secretum_mod('copyright_text_font_style', 'attr', true);
		$text_transform = secretum_mod('copyright_text_transform', 'attr', true);
		$text_color = secretum_mod('copyright_text_text_color', 'attr', true);
		$link_color = secretum_mod('copyright_text_link_color', 'attr', true);
		$link_hover_color = secretum_mod('copyright_text_link_hover_color', 'attr', true);

		return apply_filters('secretum_copyright_text_fonts', $font_size . $font_family . $font_style . $text_transform . $text_color . $link_color . $link_hover_color, 10, 1);
	}
}
