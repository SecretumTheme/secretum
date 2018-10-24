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
 * @source inc/system/copyright/template-parts.php
 * @return string Pre-sanitized string of class names
 */
if (!function_exists('secretum_copyright_nav_item_classes')) {
	function secretum_copyright_nav_item_classes()
	{
		// Get Mod
		$background_color_mod = secretum_mod('copyright_nav_item_background_color', 'attr', true);

		// Get Mod
		$text_color_mod = secretum_mod('copyright_nav_item_text_color', 'attr', true);

		// Get Mod
		$text_color_hover_mod = secretum_mod('copyright_nav_item_text_color_hover', 'attr', true);

		// Get Mod
		$margin_mod = secretum_mod('copyright_nav_item_margin', 'attr', true);

		// Get Mod
		$paddingy_mod = secretum_mod('copyright_nav_item_paddingy', 'attr', true);
		$padding_y_mod = isset($paddingy_mod) ? $paddingy_mod : '';

		// Get Mod
		$paddingx_mod = secretum_mod('copyright_nav_item_paddingx', 'attr', true);
		$padding_x_mod = isset($paddingx_mod) ? $paddingx_mod : '';

		// Set Mod
		$padding_mod = $padding_y_mod . $padding_x_mod;

		// Get Mod
		$border_color_mod = secretum_mod('copyright_nav_item_border_color', 'attr', true);

		// Get Mod
		$border_mod = secretum_mod('copyright_nav_item_border', 'attr', false);

		// Default
		$border_type_mod = '';

		// Full Border
		if (!empty($border_mod) && $border_mod == "all") {
			$border_type_mod = ' border';

		// Top Border
		} elseif (!empty($border_mod) && $border_mod == "top") {
			$border_type_mod = ' border-top';

		// Right Border
		} elseif (!empty($border_mod) && $border_mod == "right") {
			$border_type_mod = ' border-right';

		// Bottom Border
		} elseif (!empty($border_mod) && $border_mod == "bottom") {
			$border_type_mod = ' border-bottom';

		// Left Border
		} elseif (!empty($border_mod) && $border_mod == "left") {
			$border_type_mod = ' border-left';

		// No Border
		} elseif (!empty($border_mod) && $border_mod == "none") {
			$border_type_mod = '';

		// Default border if color set without border mod
		} elseif (empty($border_mod) && !empty($border_color_mod) || !empty($border_mod) && empty($border_color_mod)) {
			$border_type_mod = ' border-bottom border-light';

		}

		// Build Class String
		$class_string = $background_color_mod . $text_color_mod . $text_color_hover_mod . $margin_mod . $padding_mod . $border_type_mod . $border_color_mod;

		// Filter Class String
		return apply_filters('secretum_copyright_nav_item_classes', $class_string, 10, 1);
	}
}


/**
 * Set Alignment Class On Copyright Menu
 *
 * @return string Pre-sanitized class names
 */
if (!function_exists('secretum_copyright_nav_alignment')) {
	function secretum_copyright_nav_alignment()
	{
		$mod_menu_alignment = secretum_mod('copyright_nav_alignment', 'attr', false);

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
		return apply_filters('secretum_copyright_nav_alignment', $class_string, 10, 1);
	}
}
