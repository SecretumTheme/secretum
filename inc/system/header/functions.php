<?php
/**
 * Functions related to theme display or manipulation
 *
 * @package WordPress
 * @subpackage Secretum_Theme
 */


/**
 * Header Top Wrapper Classes
 *
 * @return string Pre-sanitized string of class names
 */
if (!function_exists('secretum_header_top_wrapper')) {
	function secretum_header_top_wrapper()
	{
		// Get Mod
		//$background_color_mod = secretum_mod('header_top_background_color');
		$background_color_mod = secretum_mod('header_top_background_color', 'attr', true);

		// Get Mod
		//$text_color_mod = secretum_mod('header_top_text_color');
		$text_color_mod = secretum_mod('header_top_text_color', 'attr', true);

		// Get Mod
		//$padding_mod = secretum_mod('header_top_wrapper_padding');
		$padding_mod = secretum_mod('header_top_wrapper_padding', 'attr', true);

		// Build Class String
		$class_string = $text_color_mod . $background_color_mod . ((!empty($padding_mod)) ? $padding_mod : ' py-0');

		// Return Class String
		return apply_filters('secretum_header_top_wrapper', $class_string, 10, 1);
	}
}


/**
 * Header Top Container Classes
 *
 * @return string Pre-sanitized string of class names
 */
if (!function_exists('secretum_header_top_container')) {
	function secretum_header_top_container()
	{
		// Get Mod
		$container_mod = secretum_mod('header_top_container');

		// Get Mod
		$padding_mod = secretum_mod('header_top_container_padding', 'attr', true);

		// Build Class String
		$class_string = (!empty($container_mod)) ? '-fluid' . $padding_mod : $padding_mod;

		// Return Class String
		return apply_filters('secretum_header_top_container', $class_string, 10, 1);
	}
}


/**
 * Header Wrapper Classes
 *
 * @return string Pre-sanitized string of class names
 */
if (!function_exists('secretum_header_wrapper')) {
	function secretum_header_wrapper()
	{
		// Get Mod
		$background_color_mod = secretum_mod('header_background_color', 'attr', true);

		// Get Mod
		$border_color_mod = secretum_mod('header_border_color') ? ' border-bottom' . secretum_mod('header_border_color', 'attr', true) : '';

		// Get Mod
		$margin_mod = secretum_mod('header_wrapper_margin', 'attr', true);

		// Get Mod
		$padding_mod = secretum_mod('header_wrapper_padding', 'attr', true);

		// Build Class String
		$class_string = $background_color_mod . $border_color_mod . $margin_mod . ((!empty($padding_mod)) ? $padding_mod : ' py-3');

		// Echo Class String
		return apply_filters('secretum_header_wrapper', $class_string, 10, 1);
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
		// Get Mod
		$padding_mod = secretum_mod('header_container_padding', 'attr', true);

		// Build Class String
		$class_string = (secretum_mod('header_container')) ? '-fluid' . $padding_mod : $padding_mod;

		// Echo Class String
		return apply_filters('secretum_header_container', $class_string, 10, 1);
	}
}


/**
 * Header Menu Wrapper Classes
 *
 * @return string Pre-sanitized string of class names
 */
if (!function_exists('secretum_header_menu_wrapper')) {
	function secretum_header_menu_wrapper()
	{
		// Get Mod
		$background_color_mod = secretum_mod('header_menu_background_color', 'attr', true);

		// Get Mod
		$border_color_mod = secretum_mod('header_menu_border_color') ? ' border' . secretum_mod('header_menu_border_color', 'attr', true) : '';

		// Get Mod
		$margin_mod = secretum_mod('header_menu_wrapper_margin', 'attr', true);

		// Get Mod
		$padding_mod = secretum_mod('header_menu_wrapper_padding', 'attr', true);

		// Build Class String
		$class_string = $background_color_mod . $border_color_mod . $margin_mod . ((!empty($padding_mod)) ? $padding_mod : ' p-0');

		// Return Class String
		return apply_filters('secretum_header_menu_wrapper', $class_string, 10, 1);
	}
}


/**
 * Header Menu Wrapper Classes
 *
 * @return string Pre-sanitized string of class names
 */
if (!function_exists('secretum_header_menu_container')) {
	function secretum_header_menu_container()
	{
		// Get Mod
		$container_mod = secretum_mod('header_menu_container');

		// Get Mod
		$padding_mod = secretum_mod('header_menu_container_padding', 'attr', true);

		// Build Class String
		$class_string = (!empty($container_mod)) ? '-fluid' . $padding_mod : $padding_mod;

		// Echo Class String
		return apply_filters('secretum_header_menu_container', $class_string, 10, 1);
	}
}


/**
 * Set Alignment Class On Primary Menu
 *
 * @return string Pre-sanitized string of class names
 */
if (!function_exists('secretum_header_menu_alignment')) {
	function secretum_header_menu_alignment()
	{
		$mod_menu_alignment = secretum_mod('header_menu_alignment', 'attr', false);

		// Menu Left, Auto Right Margin
		if ($mod_menu_alignment == "left") {
			$menu_alignment = " mr-auto";

		// Menu Right, Auto Left Margin
		} elseif($mod_menu_alignment == "right") {
			$menu_alignment = " ml-auto";

		// Menu Center, Auto Left/Right Margins
		} elseif($mod_menu_alignment == "center") {
			$menu_alignment = " mx-auto";

		}

		// Build Class String
		$class_string = !empty($menu_alignment) ? $menu_alignment : '';

		// Return Class String
		return apply_filters('secretum_header_menu_alignment', $class_string, 10, 1);
	}
}
