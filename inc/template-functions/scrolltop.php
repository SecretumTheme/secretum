<?php
/**
 * Functions related to theme display or manipulation
 *
 * @package WordPress
 * @subpackage Secretum
 */


/**
 * Container Classes
 *
 * @return string Pre-sanitized string of class names
 */
if (!function_exists('secretum_scrolltop_container')) {
	function secretum_scrolltop_container()
	{
		// Classes
		$background = secretum_mod('scrolltop_background_color', 'attr', true) . secretum_mod('scrolltop_background_hover_color', 'attr', true);
		$border = secretum_mod('scrolltop_border_type', 'attr', true) . secretum_mod('scrolltop_border_radius', 'attr', true) . secretum_mod('scrolltop_border_color', 'attr', true);
		$margin = secretum_mod('scrolltop_margin_right', 'attr', true) . secretum_mod('scrolltop_margin_bottom', 'attr', true);
		$padding = secretum_mod('scrolltop_padding_x', 'attr', true) . secretum_mod('scrolltop_padding_y', 'attr', true);

		return apply_filters('secretum_scrolltop_container', $background . $border . $margin . $padding, 10, 1);
	}
}


/**
 * Text/Front Classes
 *
 * @return string Pre-sanitized string of class names
 */
if (!function_exists('secretum_scrolltop_textuals')) {
	function secretum_scrolltop_textuals()
	{
		// Classes
		$text_color = secretum_mod('scrolltop_text_color', 'attr', true);

		return apply_filters('secretum_scrolltop_textuals', $text_color, 10, 1);
	}
}
