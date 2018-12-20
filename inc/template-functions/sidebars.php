<?php
/**
 * Functions related to theme display or manipulation
 *
 * @package WordPress
 * @subpackage Secretum
 */


/**
 * Sidebar Wrapper Classes
 *
 * @return string Pre-sanitized string of class names
 */
if (!function_exists('secretum_sidebar_wrapper')) {
	function secretum_sidebar_wrapper()
	{
		// Classes
		$background = secretum_mod('sidebar_wrapper_background_color', 'attr', true);
		$border = secretum_mod('sidebar_wrapper_border_type', 'attr', true) . secretum_mod('sidebar_wrapper_border_color', 'attr', true);
		$margin = secretum_mod('sidebar_wrapper_margin_top', 'attr', true) . secretum_mod('sidebar_wrapper_margin_bottom', 'attr', true);
		$padding = secretum_mod('sidebar_wrapper_padding_y', 'attr', true);

		return apply_filters('secretum_sidebar_wrapper', $background . $border . $margin . $padding, 10, 1);
	}
}


/**
 * Sidebar Container Classes
 *
 * @return string Pre-sanitized string of class names
 */
if (!function_exists('secretum_sidebar_container')) {
	function secretum_sidebar_container()
	{
		// Classes
		$background = secretum_mod('sidebar_container_background_color', 'attr', true);
		$border = secretum_mod('sidebar_container_border_type', 'attr', true) . secretum_mod('sidebar_container_border_color', 'attr', true);
		$padding = secretum_mod('sidebar_container_padding_x', 'attr', true) . secretum_mod('sidebar_container_padding_y', 'attr', true);

		return apply_filters('secretum_sidebar_container', $background . $border . $padding, 10, 1);
	}
}


/**
 * Font/Text/Link Classes
 *
 * @return string Pre-sanitized string of class names
 */
if (!function_exists('secretum_sidebar_textuals')) {
	function secretum_sidebar_textuals()
	{
		// Classes
		$font_size = secretum_mod('sidebar_font_size', 'attr', true);
		$font_family = secretum_mod('sidebar_font_family', 'attr', true);
		$font_style = secretum_mod('sidebar_font_style', 'attr', true);
		$text_transform = secretum_mod('sidebar_text_transform', 'attr', true);
		$text_color = secretum_mod('sidebar_text_color', 'attr', true);
		$link_color = secretum_mod('sidebar_link_color', 'attr', true);
		$link_hover_color = secretum_mod('sidebar_link_hover_color', 'attr', true);

		return apply_filters('secretum_sidebar_text_fonts', $font_size . $font_family . $font_style . $text_transform . $text_color . $link_color . $link_hover_color, 10, 1);
	}
}


/**
 * Render Sidebar Based On Allowed Location
 *
 * @example secretum_sidebar_location('right');
 * @example secretum_sidebar_location('left');
 * @see /template-parts/sidebar/sidebar-left.php
 * @see /template-parts/sidebar/sidebar-right-blog.php
 * @see /template-parts/sidebar/sidebar-right.php
 *
 * @param string $location_check Sidebar display location
 * @return bool Defaults to false
 */
if (!function_exists('secretum_sidebar_location')) {
	function secretum_sidebar_location($location_check)
	{
		// Global Sidebar Location
		$global_location = secretum_mod('sidebar_location', 'attr');

		// Local Sidebar Location
		$local_location = get_post_meta(get_the_ID(), 'secretum_meta_sidebars');

		// Build Sidebar Location
		$sidebar_location = !empty($local_location[0]) ? $local_location[0] : $global_location;

		// Default No Sidebars
		$display = false;

		// Left or both
		if (isset($sidebar_location) && ($sidebar_location == 'both' || $sidebar_location == 'left') && $location_check == 'left') {
			$display = true;
		}

		// Right or both
		if (isset($sidebar_location) && ($sidebar_location == 'both' || $sidebar_location == 'right') && $location_check == 'right') {
			$display = true;
		}

		return ($display) ? true : false;
	}
}
