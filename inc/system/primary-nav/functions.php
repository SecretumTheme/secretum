<?php
/**
 * Functions related to theme display or manipulation
 *
 * @package WordPress
 * @subpackage Secretum_Theme
 */


/**
 * Header Menu Wrapper Classes
 *
 * @return string Pre-sanitized string of class names
 */
if (!function_exists('secretum_primary_nav_wrapper')) {
	function secretum_primary_nav_wrapper()
	{
		// Get Mod
		$background_color_mod = secretum_mod('primary_nav_wrapper_background_color', 'attr', true);

		// Get Mod
		$border_type_mod = secretum_mod('primary_nav_wrapper_border_type', 'attr', false);

		// Get Mod
		$border_color_mod = secretum_mod('primary_nav_wrapper_border_color') ? secretum_mod('primary_nav_wrapper_border_color', 'attr', true) : '';

		// Clear Setting
		$border_setting = '';

		// Border Type Set
		if (!empty($border_type_mod)) {
			// Full Border
			if ($border_type_mod == "all") {
				$border_setting = ' border' . $border_color_mod;

			// Top Border
			} elseif ($border_type_mod == "top") {
				$border_setting = ' border-top' . $border_color_mod;

			// Right Border
			} elseif ($border_type_mod == "right") {
				$border_setting = ' border-right' . $border_color_mod;

			// Bottom Border
			} elseif ($border_type_mod == "bottom") {
				$border_setting = ' border-bottom' . $border_color_mod;

			// Left Border
			} elseif ($border_type_mod == "left") {
				$border_setting = ' border-left' . $border_color_mod;
			}
		}

		// Default If Color Set
		if (empty($border_setting) && !empty($border_color_mod)) {
			$border_setting = ' border-bottom' . $border_color_mod;
		}

		// Get Mod
		$margin_mod = secretum_mod('primary_nav_wrapper_margin', 'attr', true);

		// Get Mod
		$padding_mod = secretum_mod('primary_nav_wrapper_padding', 'attr', true);

		// Build Class String
		$class_string = $background_color_mod . $border_setting . $margin_mod . ((!empty($padding_mod)) ? $padding_mod : ' p-0');

		// Return Class String
		return apply_filters('secretum_primary_nav_wrapper', $class_string, 10, 1);
	}
}


/**
 * Header Menu Wrapper Classes
 *
 * @return string Pre-sanitized string of class names
 */
if (!function_exists('secretum_primary_nav_container')) {
	function secretum_primary_nav_container()
	{
		// Get Mod
		$background_color_mod = secretum_mod('primary_nav_container_background_color', 'attr', true);

		// Get Mod
		$container_mod = secretum_mod('primary_nav_container');

		// Get Mod
		$padding_mod = secretum_mod('primary_nav_container_padding', 'attr', true);

		// Get Mod
		$border_type_mod = secretum_mod('primary_nav_container_border_type', 'attr', false);

		// Get Mod
		$border_color_mod = secretum_mod('primary_nav_container_border_color') ? secretum_mod('primary_nav_container_border_color', 'attr', true) : '';

		// Clear Setting
		$border_setting = '';

		// Border Type Set
		if (!empty($border_type_mod)) {
			// Full Border
			if ($border_type_mod == "all") {
				$border_setting = ' border' . $border_color_mod;

			// Top Border
			} elseif ($border_type_mod == "top") {
				$border_setting = ' border-top' . $border_color_mod;

			// Right Border
			} elseif ($border_type_mod == "right") {
				$border_setting = ' border-right' . $border_color_mod;

			// Bottom Border
			} elseif ($border_type_mod == "bottom") {
				$border_setting = ' border-bottom' . $border_color_mod;

			// Left Border
			} elseif ($border_type_mod == "left") {
				$border_setting = ' border-left' . $border_color_mod;
			}
		}

		// Default If Color Set
		if (empty($border_setting) && !empty($border_color_mod)) {
			$border_setting = ' border-bottom' . $border_color_mod;
		}

		// Build Class String
		$class_string = (!empty($container_mod)) ? '-fluid' : '' . $background_color_mod . $border_setting . $padding_mod;

		// Echo Class String
		return apply_filters('secretum_primary_nav_container', $class_string, 10, 1);
	}
}


/**
 * Navbar Base Color Theme: navbar-light navbar-dark
 *
 * @source inc/system/primary_nav/template-parts.php
 * @return string Pre-sanitized class name
 */
if (!function_exists('secretum_primary_nav_color_theme')) {
	function secretum_primary_nav_color_theme()
	{
		// Get Mod
		$color_mod = secretum_mod('primary_nav_color_theme', 'attr', false);

		// Build Class String
		$class_string = !empty($color_mod) ? ' navbar-' . $color_mod : '';

		// Echo Class String
		echo apply_filters('secretum_primary_nav_color_theme', $class_string, 10, 1);
	}
}


/**
 * Primary Menu Item Classes
 *
 * @source inc/system/primary_nav/template-parts.php
 * @return string Pre-sanitized string of class names
 */
if (!function_exists('secretum_primary_nav_divider_classes')) {
	function secretum_primary_nav_divider_classes()
	{
		// Get Mod
		$background_color_mod = secretum_mod('primary_nav_item_background_color', 'attr', true);

		// Get Mod
		$background_color_hover_mod = secretum_mod('primary_nav_item_background_hover_color', 'attr', true);

		// Get Mod
		$border_type_mod = secretum_mod('primary_nav_item_border_type', 'attr', false);

		// Get Mod
		$border_color_mod = secretum_mod('primary_nav_item_border_color') ? secretum_mod('primary_nav_item_border_color', 'attr', true) : '';

		// Clear Setting
		$border_setting = '';

		// Border Type Set
		if (!empty($border_type_mod)) {
			// Full Border
			if ($border_type_mod == "all") {
				$border_setting = ' border' . $border_color_mod;

			// Top Border
			} elseif ($border_type_mod == "top") {
				$border_setting = ' border-top' . $border_color_mod;

			// Right Border
			} elseif ($border_type_mod == "right") {
				$border_setting = ' border-right' . $border_color_mod;

			// Bottom Border
			} elseif ($border_type_mod == "bottom") {
				$border_setting = ' border-bottom' . $border_color_mod;

			// Left Border
			} elseif ($border_type_mod == "left") {
				$border_setting = ' border-left' . $border_color_mod;
			}
		}

		// Default If Color Set
		if (empty($border_setting) && !empty($border_color_mod)) {
			$border_setting = ' border-left' . $border_color_mod;
		}

		// Get Mod
		$padding_mod_py = secretum_mod('primary_nav_item_padding_y', 'attr', true);

		// Get Mod
		$padding_mod_px = secretum_mod('primary_nav_item_padding_x', 'attr', true);

		// Get Mod
		$text_color_mod = secretum_mod('primary_nav_item_text_color', 'attr', true);

		// Get Mod
		$link_color_mod = secretum_mod('primary_nav_item_link_color', 'attr', true);

		// Get Mod
		$link_hover_color_mod = secretum_mod('primary_nav_item_link_hover_color', 'attr', true);

		// Build Class String
		$class_string = $background_color_mod . $background_color_hover_mod . $border_setting . $padding_mod_py . $padding_mod_px . $text_color_mod . $link_color_mod . $link_hover_color_mod;

		// Echo Class String
		return apply_filters('secretum_primary_nav_divider_classes', $class_string, 10, 1);
	}
}


/**
 * Set Alignment Class On Primary Menu
 *
 * @return string Pre-sanitized string of class names
 */
if (!function_exists('secretum_primary_nav_alignment')) {
	function secretum_primary_nav_alignment()
	{
		$mod_menu_alignment = secretum_mod('primary_nav_alignment', 'attr', false);

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
		return apply_filters('secretum_primary_nav_alignment', $class_string, 10, 1);
	}
}
