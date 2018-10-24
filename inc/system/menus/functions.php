<?php
/**
 * Functions related to theme display or manipulation
 *
 * @package WordPress
 * @subpackage Secretum_Theme
 */


/**
 * Primary Menu Item Classes
 *
 * @source inc/system/header/template-parts.php
 * @return string Pre-sanitized string of class names
 */
if (!function_exists('secretum_primary_menu_divider_classes')) {
	function secretum_primary_menu_divider_classes()
	{
		// Get Mod
		$background_color_mod = secretum_mod('primary_menu_background_color', 'attr', true);

		// Get Mod
		$background_color_hover_mod = secretum_mod('primary_menu_background_color_hover', 'attr', true);

		// Get Mod
		$text_color_mod = secretum_mod('primary_menu_color', 'attr', true);

		// Get Mod
		$text_color_hover_mod = secretum_mod('primary_menu_color_hover', 'attr', true);

		// Get Mod
		$margin_mod = secretum_mod('primary_menu_margin', 'attr', true);

		// Get Mod
		$padding_mod = secretum_mod('primary_menu_padding', 'attr', true);

		// Get Mod
		$border_location_mod = secretum_mod('primary_menu_border_location', 'attr', true);

		// Get Mod
		$border_color_mod = secretum_mod('primary_menu_border_color', 'attr', true);

		// Build Class String
		$class_string = $background_color_mod . $background_color_hover_mod . $text_color_mod . $text_color_hover_mod . $margin_mod . $padding_mod . $border_location_mod . $border_color_mod;

		// Echo Class String
		echo apply_filters('secretum_primary_menu_divider_classes', $class_string, 10, 1);
	}
}


/**
 * Navbar Base Color Theme: navbar-light navbar-dark
 *
 * @source inc/system/header/template-parts.php
 * @return string Pre-sanitized class name
 */
if (!function_exists('secretum_primary_menu_color_theme')) {
	function secretum_primary_menu_color_theme()
	{
		// Get Mod
		$color_mod = secretum_mod('primary_menu_color_theme', 'attr', false);

		// Build Class String
		$class_string = !empty($color_mod) ? ' navbar-' . $color_mod : '';

		// Echo Class String
		echo apply_filters('secretum_primary_menu_color_theme', $class_string, 10, 1);
	}
}
