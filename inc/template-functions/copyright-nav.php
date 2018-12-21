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
if (!function_exists('secretum_copyright_nav_wrapper')) {
	function secretum_copyright_nav_wrapper()
	{
		// Classes
		$background = secretum_mod('copyright_nav_wrapper_background_color', 'attr', true);
		$border = secretum_mod('copyright_nav_wrapper_border_type', 'attr', true) . secretum_mod('copyright_nav_wrapper_border_color', 'attr', true);
		$margin = secretum_mod('copyright_nav_wrapper_margin_top', 'attr', true) . secretum_mod('copyright_nav_wrapper_margin_bottom', 'attr', true);
		$padding = secretum_mod('copyright_nav_wrapper_padding_x', 'attr', true) . secretum_mod('copyright_nav_wrapper_padding_y', 'attr', true);
		$textuals = secretum_mod('copyright_nav_textual_text_transform', 'attr', true) . secretum_mod('copyright_nav_textual_font_family', 'attr', true) . secretum_mod('copyright_nav_textual_font_size', 'attr', true) . secretum_mod('copyright_nav_textual_font_style', 'attr', true);
		$text_color = secretum_mod('copyright_nav_textual_text_color', 'attr', true);
		$link_colors = secretum_mod('copyright_nav_textual_link_color', 'attr', true) . secretum_mod('copyright_nav_textual_link_hover_color', 'attr', true);

		return apply_filters('secretum_copyright_nav_wrapper', $background . $border . $margin . $padding . $textuals . $text_color . $link_colors, 10, 1);
	}
}


/**
 * Alignment
 *
 * @return string Pre-sanitized class name
 */
if (!function_exists('secretum_copyright_nav_alignment')) {
	function secretum_copyright_nav_alignment()
	{
		return apply_filters('secretum_copyright_nav_alignment', secretum_mod('copyright_nav_alignment', 'attr', true), 10, 1);
	}
}


/**
 * Menu Item Classes
 *
 * @return string Pre-sanitized string of class names
 */
if (!function_exists('secretum_copyright_nav_divider_classes')) {
	function secretum_copyright_nav_divider_classes()
	{
		// Classes
		$background = secretum_mod('copyright_nav_items_background_color', 'attr', true) . secretum_mod('copyright_nav_items_background_hover_color', 'attr', true);
		$border = secretum_mod('copyright_nav_items_border_type', 'attr', true) . secretum_mod('copyright_nav_items_border_color', 'attr', true);
		$margin = secretum_mod('copyright_nav_items_margin_y', 'attr', true) . secretum_mod('copyright_nav_items_margin_x', 'attr', true);
		$padding = secretum_mod('copyright_nav_items_padding_y', 'attr', true) . secretum_mod('copyright_nav_items_padding_x', 'attr', true);

		return apply_filters('secretum_copyright_nav_divider_classes', $background . $border . $margin . $padding, 10, 1);
	}
}
