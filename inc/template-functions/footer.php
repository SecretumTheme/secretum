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
		$padding = secretum_mod('footer_wrapper_padding_x', 'attr', true) . secretum_mod('footer_wrapper_padding_y', 'attr', true);

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
		$margin = secretum_mod('footer_container_margin_x', 'attr', true) . secretum_mod('footer_container_margin_y', 'attr', true);
		$padding = secretum_mod('footer_container_padding_x', 'attr', true) . secretum_mod('footer_container_padding_y', 'attr', true);
		$textuals = secretum_footer_textuals();
		$alignment = secretum_footer_text_alignment();

		return apply_filters('secretum_footer_container', $container . $background . $border . $margin . $padding . $textuals . $alignment, 10, 1);
	}
}


/**
 * Alignment
 *
 * @return string Pre-sanitized class name
 */
if (!function_exists('secretum_footer_text_alignment')) {
	function secretum_footer_text_alignment()
	{
		return apply_filters('secretum_footer_text_alignment', secretum_mod('footer_text_alignment', 'attr', true), 10, 1);
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
		$textuals = secretum_mod('footer_textual_font_family', 'attr', true) . secretum_mod('footer_textual_font_size', 'attr', true) . secretum_mod('footer_textual_font_style', 'attr', true) . secretum_mod('footer_textual_transform', 'attr', true);
		$text_color = secretum_mod('footer_textual_text_color', 'attr', true);
		$link_colors = secretum_mod('footer_textual_link_color', 'attr', true) . secretum_mod('footer_textual_link_hover_color', 'attr', true);

		return apply_filters('secretum_footer_fonts', $textuals . $text_color . $link_colors, 10, 1);
	}
}

