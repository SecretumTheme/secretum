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
		$padding = secretum_mod('copyright_nav_wrapper_padding_y', 'attr', true);
		$font = secretum_mod('copyright_nav_font_size', 'attr', true) . secretum_mod('copyright_nav_font_family', 'attr', true) . secretum_mod('copyright_nav_font_style', 'attr', true) . secretum_mod('copyright_nav_text_transform', 'attr', true);

		return apply_filters('secretum_copyright_nav_wrapper', $background . $border . $padding . $font, 10, 1);
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
		$background = secretum_mod('copyright_nav_item_background_color', 'attr', true) . secretum_mod('copyright_nav_item_background_hover_color', 'attr', true);
		$border = secretum_mod('copyright_nav_item_border_type', 'attr', true) . secretum_mod('copyright_nav_item_border_color', 'attr', true);
		$margin = secretum_mod('copyright_nav_item_margin_y', 'attr', true) . secretum_mod('copyright_nav_item_margin_x', 'attr', true);
		$padding = secretum_mod('copyright_nav_item_padding_y', 'attr', true) . secretum_mod('copyright_nav_item_padding_x', 'attr', true);
		$text_color = secretum_mod('copyright_nav_item_text_color', 'attr', true);
		$link_colors = secretum_mod('copyright_nav_item_link_color', 'attr', true) . secretum_mod('copyright_nav_item_link_hover_color', 'attr', true);

		return apply_filters('secretum_copyright_nav_divider_classes', $background . $border . $margin . $padding . $text_color . $link_colors, 10, 1);
	}
}
