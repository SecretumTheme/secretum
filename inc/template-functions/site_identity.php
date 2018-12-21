<?php
/**
 * Functions related to theme display or manipulation
 *
 * @package WordPress
 * @subpackage Secretum
 */


/**
 * Title/Desc Alignment
 *
 * @return string Pre-sanitized class name
 */
if (!function_exists('secretum_site_identity_alignment')) {
	function secretum_site_identity_alignment()
	{
		return apply_filters('secretum_site_identity_alignment', secretum_mod('site_identity_alignment', 'attr', true), 10, 1);
	}
}


/**
 * Container Classes
 *
 * @return string Pre-sanitized string of class names
 */
if (!function_exists('secretum_site_identity_title_container')) {
	function secretum_site_identity_title_container()
	{
		// Classes
		$background = secretum_mod('site_identity_title_container_background_color', 'attr', true);
		$border = secretum_mod('site_identity_title_container_border_type', 'attr', true) . secretum_mod('site_identity_title_container_border_color', 'attr', true);
		$margin = secretum_mod('site_identity_title_container_margin_x', 'attr', true) . secretum_mod('site_identity_title_container_margin_y', 'attr', true);
		$padding = secretum_mod('site_identity_title_container_padding_x', 'attr', true) . secretum_mod('site_identity_title_container_padding_y', 'attr', true);

		return apply_filters('secretum_site_identity_title_container', $background . $border . $margin . $padding, 10, 1);
	}
}


/**
 * Text/Front Classes
 *
 * @return string Pre-sanitized string of class names
 */
if (!function_exists('secretum_site_identity_title_textuals')) {
	function secretum_site_identity_title_textuals()
	{
		// Classes
		$fonts = secretum_mod('site_identity_title_textual_font_family', 'attr', true) . secretum_mod('site_identity_title_textual_font_size', 'attr', true) . secretum_mod('site_identity_title_textual_font_style', 'attr', true);
		$texts = secretum_mod('site_identity_title_textual_text_transform', 'attr', true) . secretum_mod('site_identity_title_textual_text_color', 'attr', true);
		$links = secretum_mod('site_identity_title_textual_link_color', 'attr', true) . secretum_mod('site_identity_title_textual_link_hover_color', 'attr', true);

		return apply_filters('secretum_site_identity_title_textuals', $fonts . $texts . $links, 10, 1);
	}
}


/**
 * Container Classes
 *
 * @return string Pre-sanitized string of class names
 */
if (!function_exists('secretum_site_identity_desc_container')) {
	function secretum_site_identity_desc_container()
	{
		// Classes
		$background = secretum_mod('site_identity_desc_container_background_color', 'attr', true);
		$border = secretum_mod('site_identity_desc_container_border_type', 'attr', true) . secretum_mod('site_identity_desc_container_border_color', 'attr', true);
		$margin = secretum_mod('site_identity_desc_container_margin_x', 'attr', true) . secretum_mod('site_identity_desc_container_margin_y', 'attr', true);
		$padding = secretum_mod('site_identity_desc_container_padding_x', 'attr', true) . secretum_mod('site_identity_desc_container_padding_y', 'attr', true);

		return apply_filters('secretum_site_identity_desc_container', $background . $border . $margin . $padding, 10, 1);
	}
}


/**
 * Text/Front Classes
 *
 * @return string Pre-sanitized string of class names
 */
if (!function_exists('secretum_site_identity_desc_textuals')) {
	function secretum_site_identity_desc_textuals()
	{
		// Classes
		$fonts = secretum_mod('site_identity_desc_textual_font_family', 'attr', true) . secretum_mod('site_identity_desc_textual_font_size', 'attr', true) . secretum_mod('site_identity_desc_textual_font_style', 'attr', true);
		$texts = secretum_mod('site_identity_desc_textual_text_transform', 'attr', true) . secretum_mod('site_identity_desc_textual_text_color', 'attr', true);
		$links = secretum_mod('site_identity_desc_textual_link_color', 'attr', true) . secretum_mod('site_identity_desc_textual_link_hover_color', 'attr', true);

		return apply_filters('secretum_site_identity_desc_textuals', $fonts . $texts . $links, 10, 1);
	}
}