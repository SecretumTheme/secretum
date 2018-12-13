<?php
/**
 * Functions related to theme display or manipulation
 *
 * @package WordPress
 * @subpackage Secretum
 */


/**
 * Inject Frontpage Inline BG Style
 *
 * @return string Pre-sanitized string of class names
 */
if (!function_exists('secretum_frontpage_bg_style')) {
	function secretum_frontpage_bg_style()
	{
		// Get Background Image ID
		$image_src_id = secretum_mod('frontpage_heading_bg', 'int');

		// If Background ID Set
		if (isset($image_src_id) && is_numeric($image_src_id)) {
			// Get Attachment Array
			$image_src_array = wp_get_attachment_image_src($image_src_id, 'full', false);

			// Set Img SRC Url
			if (isset($image_src_array) && isset($image_src_array[0])) {
				$image_src = esc_url($image_src_array[0]);
			}
		}

		// Extra CSS
		$css = 'background-position:center;background-repeat:no-repeat;background-size:cover;height:100%;width:100%;';

		// Build Class String
		$class_string = (isset($image_src)) ? ' style="background-image:url(' . $image_src . ');' . $css . '"' : '';

		// Return Class String
		return apply_filters('secretum_frontpage_bg_style', $class_string, 10, 1);
	}
}