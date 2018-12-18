<?php
/**
 * WordPress Customizer add_control 'choices' Arrays
 *
 * @method secretum_theme_colors()
 *
 * @package WordPress
 * @subpackage Secretum
 */


/**
 * Textual Sizing
 *
 * @return array Keys & Values
 */
if (!function_exists('secretum_theme_colors')) {
	function secretum_theme_colors()
	{
		return array_merge(
			array('' => __('Default Stylesheet', 'secretum')),
			get_option('secretum_theme_colors')
		);
	}
}
