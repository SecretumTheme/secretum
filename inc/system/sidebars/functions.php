<?php
/**
 * Functions related to theme display or manipulation
 *
 * @package WordPress
 * @subpackage Secretum_Theme
 */


/**
 * Sidebar Wrapper Classes
 *
 * @return string Pre-sanitized string of class names
 */
if (!function_exists('secretum_sidebar_wrapper')) {
	function secretum_sidebar_wrapper()
	{
		// Get Mod
		$background_color_mod = secretum_mod('sidebar_background_color', 'attr', true);

		// Get Mod
		$margin_bottom_mod = secretum_mod('sidebar_wrapper_margin_bottom', 'attr', true);

		// Get Mod
		$margin_top_mod = secretum_mod('sidebar_wrapper_margin_top', 'attr', true);

		// Get Mod
		$padding_mod = secretum_mod('sidebar_wrapper_padding', 'attr', true);

		// Build Class String
		$class_string = $background_color_mod . $margin_bottom_mod . $margin_top_mod . (!empty($padding_mod) ? $padding_mod : '');

		return apply_filters('secretum_sidebar_wrapper', $class_string, 10, 1);
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
