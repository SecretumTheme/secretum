<?php
/**
 * Functions related to theme display or manipulation
 *
 * @package WordPress
 * @subpackage Secretum
 */


/**
 * Color Classes
 *
 * @see inc/template-filters.php
 *
 * @return string Pre-sanitized string of class names
 */
if (!function_exists('secretum_globals_colors')) {
	function secretum_globals_colors()
	{
		// Classes
		$background_color = secretum_mod('globals_background_color', 'attr', true);
		$text_color = secretum_mod('globals_text_color', 'attr', true);
		$link_color = secretum_mod('globals_link_color', 'attr', true);
		$link_hover_color = secretum_mod('globals_link_hover_color', 'attr', true);

		return apply_filters('secretum_globals_colors', $background_color . $text_color . $link_color . $link_hover_color, 10, 1);
	}
}


/**
 * Font Classes
 *
 * @see inc/template-filters.php
 *
 * @return string Pre-sanitized string of class names
 */
if (!function_exists('secretum_globals_fonts')) {
	function secretum_globals_fonts()
	{
		// Classes
		$font_size = secretum_mod('globals_font_size', 'attr', true);
		$font_family = secretum_mod('globals_font_family', 'attr', true);
		$font_style = secretum_mod('globals_font_style', 'attr', true);
		$text_transform = secretum_mod('globals_transform', 'attr', true);

		return apply_filters('secretum_globals_fonts', $font_size . $font_family . $font_style . $text_transform, 10, 1);
	}
}
