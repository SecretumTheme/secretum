<?php
/**
 * Functions related to theme display or manipulation
 *
 * @package WordPress
 * @subpackage Secretum
 */


/**
 * Footer Wrapper Classes
 *
 * @return string Pre-sanitized string of class names
 */
if (!function_exists('secretum_footer_wrapper')) {
	function secretum_footer_wrapper()
	{
		// Classes
		$background = secretum_mod('footer_wrapper_background_color', 'attr', true);
		$border = secretum_mod('footer_wrapper_border_type', 'attr', true) . secretum_mod('footer_wrapper_border_color', 'attr', true);
		$margin = secretum_mod('footer_wrapper_margin_top', 'attr', true) . secretum_mod('footer_wrapper_margin_bottom', 'attr', true);
		$padding = secretum_mod('footer_wrapper_padding_y', 'attr', true);

		return apply_filters('secretum_footer_wrapper', $background . $border . $margin . $padding, 10, 1);
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
		// Classes
		$container = secretum_mod('footer_container_type', 'attr', false);
		$background = secretum_mod('footer_container_background_color', 'attr', true);
		$border = secretum_mod('footer_container_border_type', 'attr', true) . secretum_mod('footer_container_border_color', 'attr', true);
		$padding = secretum_mod('footer_container_padding_x', 'attr', true) . secretum_mod('footer_container_padding_y', 'attr', true);

		return apply_filters('secretum_footer_container', $container . $background . $border . $padding, 10, 1);
	}
}


/**
 * Font/Text/Link Classes
 *
 * @return string Pre-sanitized string of class names
 */
if (!function_exists('secretum_footer_textuals')) {
	function secretum_footer_textuals()
	{
		// Classes
		$font_size = secretum_mod('footer_font_size', 'attr', true);
		$font_family = secretum_mod('footer_font_family', 'attr', true);
		$font_style = secretum_mod('footer_font_style', 'attr', true);
		$text_transform = secretum_mod('footer_transform', 'attr', true);
		$text_color = secretum_mod('footer_text_color', 'attr', true);
		$link_color = secretum_mod('footer_link_color', 'attr', true);
		$link_hover_color = secretum_mod('footer_link_hover_color', 'attr', true);

		return apply_filters('secretum_footer_fonts', $font_size . $font_family . $font_style . $text_transform . $text_color . $link_color . $link_hover_color, 10, 1);
	}
}

