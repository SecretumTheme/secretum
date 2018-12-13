<?php
/**
 * WordPress Customizer add_control 'choices' Arrays
 *
 * @method secretum_customizer_margin_top_bottom()
 * @method secretum_customizer_margin_top()
 * @method secretum_customizer_margin_bottom()
 * @method secretum_customizer_margin_left_right()
 * @method secretum_customizer_margin_left()
 * @method secretum_customizer_margin_right()
 *
 * @package WordPress
 * @subpackage Secretum
 */


/**
 * Margins Top & Bottom
 *
 * @source inc/system/primary-nav/customize/toggler.php
 *
 * @return array Keys & Values
 */
if (!function_exists('secretum_customizer_margin_top_bottom')) {
	function secretum_customizer_margin_top_bottom()
	{
		return array(
			'' 		=> __('Theme Default', 'secretum'),
			'my-0' 	=> __('No Margins', 'secretum'),
			'my-1' 	=> __('4px or .25em Margins', 'secretum'),
			'my-2' 	=> __('8px or .5em Margins', 'secretum'),
			'my-3' 	=> __('16px or 1em Margins', 'secretum'),
			'my-4' 	=> __('24px or 1.5em Margins', 'secretum'),
			'my-5' 	=> __('48px or 3em Margins', 'secretum'),
		);
	}
}


/**
 * Margin Top
 *
 * @source 
 *
 * @return array Keys & Values
 */
if (!function_exists('secretum_customizer_margin_top')) {
	function secretum_customizer_margin_top()
	{
		return array(
			'' 					=> __('Theme Default', 'secretum'),
			'mt-0' 				=> __('No Margin', 'secretum'),
			'mt-1' 				=> __('4px or .25em Margin', 'secretum'),
			'mt-2' 				=> __('8px or .5em Margin', 'secretum'),
			'mt-3' 				=> __('16px or 1em Margin', 'secretum'),
			'mt-4' 				=> __('24px or 1.5em Margin', 'secretum'),
			'mt-5' 				=> __('48px or 3em Margin', 'secretum'),
			'mx-auto d-block' 	=> __('Auto Margins', 'secretum'),
		);
	}
}


/**
 * Margin Bottom
 *
 * @source inc/system/primary-nav/customize/wrapper.php
 *
 * @return array Keys & Values
 */
if (!function_exists('secretum_customizer_margin_bottom')) {
	function secretum_customizer_margin_bottom()
	{
		return array(
			'' 		=> __('Theme Default', 'secretum'),
			'mb-0' 	=> __('No Margin', 'secretum'),
			'mb-1' 	=> __('4px or .25em Margin', 'secretum'),
			'mb-2' 	=> __('8px or .5em Margin', 'secretum'),
			'mb-3' 	=> __('16px or 1em Margin', 'secretum'),
			'mb-4' 	=> __('24px or 1.5em Margin', 'secretum'),
			'mb-5' 	=> __('48px or 3em Margin', 'secretum'),
		);
	}
}


/**
 * Margins Left & Right
 *
 * @source inc/system/primary-nav/customize/toggler.php
 *
 * @return array Keys & Values
 */
if (!function_exists('secretum_customizer_margin_left_right')) {
	function secretum_customizer_margin_left_right()
	{
		return array(
			'' 					=> __('Theme Default', 'secretum'),
			'mx-0' 				=> __('No Margins', 'secretum'),
			'mx-1' 				=> __('4px or .25em Margins', 'secretum'),
			'mx-2' 				=> __('8px or .5em Margins', 'secretum'),
			'mx-3' 				=> __('16px or 1em Margins', 'secretum'),
			'mx-4' 				=> __('24px or 1.5em Margins', 'secretum'),
			'mx-5' 				=> __('48px or 3em Margins', 'secretum'),
			'mx-auto d-block' 	=> __('Auto Margins', 'secretum'),
		);
	}
}


/**
 * Margin Left
 *
 * @source 
 *
 * @return array Keys & Values
 */
if (!function_exists('secretum_customizer_margin_left')) {
	function secretum_customizer_margin_left()
	{
		return array(
			'' 			=> __('Theme Default', 'secretum'),
			'ml-0' 		=> __('No Margin', 'secretum'),
			'ml-1' 		=> __('4px or .25em Margin', 'secretum'),
			'ml-2' 		=> __('8px or .5em Margin', 'secretum'),
			'ml-3' 		=> __('16px or 1em Margin', 'secretum'),
			'ml-4' 		=> __('24px or 1.5em Margin', 'secretum'),
			'ml-5' 		=> __('48px or 3em Margin', 'secretum'),
			'ml-auto' 	=> __('Auto Left Margin', 'secretum'),
		);
	}
}


/**
 * Margin Right
 *
 * @source 
 *
 * @return array Keys & Values
 */
if (!function_exists('secretum_customizer_margin_right')) {
	function secretum_customizer_margin_right()
	{
		return array(
			'' 			=> __('Theme Default', 'secretum'),
			'mr-0' 		=> __('No Margin', 'secretum'),
			'mr-1' 		=> __('4px or .25em Margin', 'secretum'),
			'mr-2' 		=> __('8px or .5em Margin', 'secretum'),
			'mr-3' 		=> __('16px or 1em Margin', 'secretum'),
			'mr-4' 		=> __('24px or 1.5em Margin', 'secretum'),
			'mr-5' 		=> __('48px or 3em Margin', 'secretum'),
			'mr-auto' 	=> __('Auto Right Margin', 'secretum'),
		);
	}
}
