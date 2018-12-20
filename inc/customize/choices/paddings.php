<?php
/**
 * WordPress Customizer add_control 'choices' Arrays
 *
 * @method secretum_customizer_padding_top_bottom()
 * @method secretum_customizer_padding_top()
 * @method secretum_customizer_padding_bottom()
 * @method secretum_customizer_padding_left_right()
 * @method secretum_customizer_padding_left()
 * @method secretum_customizer_padding_right()
 *
 * @package WordPress
 * @subpackage Secretum
 */


/**
 * Paddings Top & Bottom
 *
 * @source inc/system/primary-nav/customize/wrapper.php
 * @source inc/system/primary-nav/customize/items.php
 *
 * @return array Keys & Values
 */
if (!function_exists('secretum_customizer_padding_top_bottom')) {
	function secretum_customizer_padding_top_bottom()
	{
		return array(
			'' 		=> __('Theme Default', 'secretum'),
			'py-0' 	=> __('No Paddings', 'secretum'),
			'py-1' 	=> __('4px or .25em Paddings', 'secretum'),
			'py-2' 	=> __('8px or .5em Paddings', 'secretum'),
			'py-3' 	=> __('16px or 1em Paddings', 'secretum'),
			'py-4' 	=> __('24px or 1.5em Paddings', 'secretum'),
			'py-5' 	=> __('48px or 3em Paddings', 'secretum')
		);
	}
}


/**
 * Padding Top
 *
 * @source 
 *
 * @return array Keys & Values
 */
if (!function_exists('secretum_customizer_padding_top')) {
	function secretum_customizer_padding_top()
	{
		return array(
			'' 		=> __('Theme Default', 'secretum'),
			'pt-0' 	=> __('No Padding', 'secretum'),
			'pt-1' 	=> __('4px or .25em Padding', 'secretum'),
			'pt-2' 	=> __('8px or .5em Padding', 'secretum'),
			'pt-3' 	=> __('16px or 1em Padding', 'secretum'),
			'pt-4' 	=> __('24px or 1.5em Padding', 'secretum'),
			'pt-5' 	=> __('48px or 3em Padding', 'secretum')
		);
	}
}


/**
 * Padding Bottom
 *
 * @source 
 *
 * @return array Keys & Values
 */
if (!function_exists('secretum_customizer_padding_bottom')) {
	function secretum_customizer_padding_bottom()
	{
		return array(
			'' 		=> __('Theme Default', 'secretum'),
			'pb-0' 	=> __('No Padding', 'secretum'),
			'pb-1' 	=> __('4px or .25em Padding', 'secretum'),
			'pb-2' 	=> __('8px or .5em Padding', 'secretum'),
			'pb-3' 	=> __('16px or 1em Padding', 'secretum'),
			'pb-4' 	=> __('24px or 1.5em Padding', 'secretum'),
			'pb-5' 	=> __('48px or 3em Padding', 'secretum')
		);
	}
}


/**
 * Paddings Left & Right
 *
 * @source inc/system/primary-nav/customize/container.php
 * @source inc/system/primary-nav/customize/items.php
 *
 * @return array Keys & Values
 */
if (!function_exists('secretum_customizer_padding_left_right')) {
	function secretum_customizer_padding_left_right()
	{
		return array(
			'' 		=> __('Theme Default', 'secretum'),
			'px-0' 	=> __('No Paddings', 'secretum'),
			'px-1' 	=> __('4px or .25em Paddings', 'secretum'),
			'px-2' 	=> __('8px or .5em Paddings', 'secretum'),
			'px-3' 	=> __('16px or 1em Paddings', 'secretum'),
			'px-4' 	=> __('24px or 1.5em Paddings', 'secretum'),
			'px-5' 	=> __('48px or 3em Paddings', 'secretum')
		);
	}
}


/**
 * Padding Left
 *
 * @source 
 *
 * @return array Keys & Values
 */
if (!function_exists('secretum_customizer_padding_left')) {
	function secretum_customizer_padding_left()
	{
		return array(
			'' 		=> __('Theme Default', 'secretum'),
			'pl-0' 	=> __('No Padding', 'secretum'),
			'pl-1' 	=> __('4px or .25em Padding', 'secretum'),
			'pl-2' 	=> __('8px or .5em Padding', 'secretum'),
			'pl-3' 	=> __('16px or 1em Padding', 'secretum'),
			'pl-4' 	=> __('24px or 1.5em Padding', 'secretum'),
			'pl-5' 	=> __('48px or 3em Padding', 'secretum')
		);
	}
}


/**
 * Padding Right
 *
 * @source 
 *
 * @return array Keys & Values
 */
if (!function_exists('secretum_customizer_padding_right')) {
	function secretum_customizer_padding_right()
	{
		return array(
			'' 		=> __('Theme Default', 'secretum'),
			'pr-0' 	=> __('No Padding', 'secretum'),
			'pr-1' 	=> __('4px or .25em Padding', 'secretum'),
			'pr-2' 	=> __('8px or .5em Padding', 'secretum'),
			'pr-3' 	=> __('16px or 1em Padding', 'secretum'),
			'pr-4' 	=> __('24px or 1.5em Padding', 'secretum'),
			'pr-5' 	=> __('48px or 3em Padding', 'secretum')
		);
	}
}
