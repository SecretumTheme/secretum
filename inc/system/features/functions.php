<?php
/**
 * Functions related to theme display or manipulation
 *
 * @package WordPress
 * @subpackage Secretum_Theme
 */


/**
 * X Wrapper Classes
 *
 * @return string Pre-sanitized string of class names
 */
if (!function_exists('secretum_X_wrapper')) {
	function secretum_X_wrapper()
	{
		// Build Class String
		$class_string = '';

		// Echo Class String
		echo apply_filters('secretum_X_wrapper', $class_string, 10, 1);
	}
}


/**
 * X Container Classes
 *
 * @return string Pre-sanitized string of class names
 */
if (!function_exists('secretum_X_container')) {
	function secretum_X_container()
	{
		// Build Class String
		$class_string = '';

		// Echo Class String
		echo apply_filters('secretum_X_container', $class_string, 10, 1);
	}
}
