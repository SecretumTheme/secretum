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
 * @source inc/system/primary_nav/template-parts.php
 *
 * @return string Pre-sanitized string of class names
 */
if (!function_exists('secretum_primary_nav_wrapper')) {
	function secretum_primary_nav_wrapper()
	{
		// Classes
		$background = secretum_mod('primary_nav_wrapper_background_color', 'attr', true);
		$border = secretum_mod('primary_nav_wrapper_border_type', 'attr', true) . secretum_mod('primary_nav_wrapper_border_color', 'attr', true);
		$margin = secretum_mod('primary_nav_wrapper_margin_bottom', 'attr', true);
		$padding = secretum_mod('primary_nav_wrapper_padding_y', 'attr', true);

		return apply_filters('secretum_primary_nav_wrapper', $background . $border . $margin . $padding, 10, 1);
	}
}


/**
 * Container Classes
 *
 * @source inc/system/primary_nav/template-parts.php
 *
 * @return string Pre-sanitized string of class names
 */
if (!function_exists('secretum_primary_nav_container')) {
	function secretum_primary_nav_container()
	{
		// Classes
		$container = secretum_mod('primary_nav_container', 'attr', false);
		$background = secretum_mod('primary_nav_container_background_color', 'attr', true);
		$border = secretum_mod('primary_nav_container_border_type', 'attr', true) . secretum_mod('primary_nav_container_border_color', 'attr', true);
		$padding = secretum_mod('primary_nav_container_padding_x', 'attr', true) . secretum_mod('primary_nav_container_padding_y', 'attr', true);
		$font = secretum_mod('primary_nav_font_size', 'attr', true) . secretum_mod('primary_nav_font_family', 'attr', true) . secretum_mod('primary_nav_font_style', 'attr', true) . secretum_mod('primary_nav_text_transform', 'attr', true);

		return apply_filters('secretum_primary_nav_container', $container . $background . $border . $padding . $font, 10, 1);
	}
}


/**
 * Alignment
 *
 * @source inc/system/primary_nav/template-parts.php
 *
 * @return string Pre-sanitized class name
 */
if (!function_exists('secretum_primary_nav_alignment')) {
	function secretum_primary_nav_alignment()
	{
		return apply_filters('secretum_primary_nav_alignment', secretum_mod('primary_nav_alignment', 'attr', true), 10, 1);
	}
}


/**
 * Navbar Base Color Theme: navbar-light navbar-dark
 *
 * @source inc/system/primary_nav/template-parts.php
 *
 * @return string Pre-sanitized class name
 */
if (!function_exists('secretum_primary_nav_color_scheme')) {
	function secretum_primary_nav_color_scheme()
	{
		return apply_filters('secretum_primary_nav_color_scheme', secretum_mod('primary_nav_color_theme', 'attr', true), 10, 1);
	}
}


/**
 * Primary Menu Item Classes
 *
 * @source inc/system/primary_nav/template-parts.php
 *
 * @return string Pre-sanitized string of class names
 */
if (!function_exists('secretum_primary_nav_divider_classes')) {
	function secretum_primary_nav_divider_classes()
	{
		// Classes
		$background = secretum_mod('primary_nav_item_background_color', 'attr', true) . secretum_mod('primary_nav_item_background_hover_color', 'attr', true);
		$border = secretum_mod('primary_nav_item_border_type', 'attr', true) . secretum_mod('primary_nav_item_border_color', 'attr', true);
		$margin = secretum_mod('primary_nav_item_margin_y', 'attr', true) . secretum_mod('primary_nav_item_margin_x', 'attr', true);
		$padding = secretum_mod('primary_nav_item_padding_y', 'attr', true) . secretum_mod('primary_nav_item_padding_x', 'attr', true);
		$text_color = secretum_mod('primary_nav_item_text_color', 'attr', true);
		$link_colors = secretum_mod('primary_nav_item_link_color', 'attr', true) . secretum_mod('primary_nav_item_link_hover_color', 'attr', true);

		return apply_filters('secretum_primary_nav_divider_classes', $background . $border . $margin . $padding . $text_color . $link_colors, 10, 1);
	}
}


/**
 * Toggler Icon Wrapper
 *
 * @source inc/system/primary_nav/template-parts.php
 *
 * @return string Pre-sanitized string of class names
 */
if (!function_exists('secretum_primary_nav_toggler_wrapper')) {
	function secretum_primary_nav_toggler_wrapper()
	{
		// Classes
		$background = secretum_mod('primary_nav_toggler_icon_background_color', 'attr', true);
		$border = secretum_mod('primary_nav_toggler_icon_border_radius', 'attr', true) . secretum_mod('primary_nav_toggler_icon_border_color', 'attr', true);
		$margin = secretum_mod('primary_nav_toggler_icon_margin_y', 'attr', true) . secretum_mod('primary_nav_toggler_icon_margin_x', 'attr', true);
		$alignment = secretum_mod('primary_nav_toggler_icon_alignment', 'attr', true);

		return apply_filters('secretum_primary_nav_toggler_wrapper', $background . $border . $margin . $alignment, 10, 1);
	}
}


/**
 * Toggler Icon
 *
 * @source inc/system/primary_nav/template-parts.php
 *
 * @return string Pre-sanitized string of class names
 */
if (!function_exists('secretum_primary_nav_toggler_icon')) {
	function secretum_primary_nav_toggler_icon()
	{
		// Classes
		$background = secretum_mod('primary_nav_toggler_icon_background_color', 'attr', true);
		$size = secretum_mod('primary_nav_toggler_icon_size', 'attr', true);

		return apply_filters('secretum_primary_nav_toggler_icon', $background . $size, 10, 1);
	}
}
