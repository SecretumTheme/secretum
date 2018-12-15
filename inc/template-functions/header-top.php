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
if (!function_exists('secretum_header_top_wrapper')) {
	function secretum_header_top_wrapper()
	{
		// Classes
		$background = secretum_mod('header_top_wrapper_background_color', 'attr', true);
		$border = secretum_mod('header_top_wrapper_border_type', 'attr', true) . secretum_mod('header_top_wrapper_border_color', 'attr', true);
		$margin_bottom = secretum_mod('header_top_wrapper_margin_bottom', 'attr', true);
		$padding_y = secretum_mod('header_top_wrapper_padding_y', 'attr', true);

		return apply_filters('secretum_header_top_wrapper', $background . $border . $margin_bottom . $padding_y, 10, 1);
	}
}


/**
 * Container Classes
 *
 * @return string Pre-sanitized string of class names
 */
if (!function_exists('secretum_header_top_container')) {
	function secretum_header_top_container()
	{
		// Classes
		$container = secretum_mod('header_top_container', 'attr', false);
		$background = secretum_mod('header_top_container_background_color', 'attr', true);
		$border = secretum_mod('header_top_container_border_type', 'attr', true) . secretum_mod('header_top_container_border_color', 'attr', true);
		$padding = secretum_mod('header_top_container_padding_x', 'attr', true) . secretum_mod('header_top_container_padding_y', 'attr', true);
		$font = secretum_mod('header_top_font_size', 'attr', true) . secretum_mod('header_top_font_family', 'attr', true) . secretum_mod('header_top_font_style', 'attr', true) . secretum_mod('header_top_text_transform', 'attr', true);

		return apply_filters('secretum_header_top_container', $container . $background . $border . $padding . $font, 10, 1);
	}
}


/**
 * Primary Menu Item Classes
 *
 * @source inc/system/header_top/template-parts.php
 *
 * @return string Pre-sanitized string of class names
 */
if (!function_exists('secretum_header_top_divider_classes')) {
	function secretum_header_top_divider_classes()
	{
		// Classes
		$background = secretum_mod('header_top_item_background_color', 'attr', true) . secretum_mod('header_top_item_background_hover_color', 'attr', true);
		$border = secretum_mod('header_top_item_border_type', 'attr', true) . secretum_mod('header_top_item_border_color', 'attr', true);
		$margin = secretum_mod('header_top_item_margin_y', 'attr', true) . secretum_mod('header_top_item_margin_x', 'attr', true);
		$padding = secretum_mod('header_top_item_padding_y', 'attr', true) . secretum_mod('header_top_item_padding_x', 'attr', true);
		$text_color = secretum_mod('header_top_item_text_color', 'attr', true);
		$link_colors = secretum_mod('header_top_item_link_color', 'attr', true) . secretum_mod('header_top_item_link_hover_color', 'attr', true);

		return apply_filters('secretum_header_top_divider_classes', $background . $border . $margin . $padding . $text_color . $link_colors, 10, 1);
	}
}
