<?php
/**
 * WordPress Customizer add_control 'choices' Arrays
 *
 * @method secretum_customizer_alignment()
 *
 * @package WordPress
 * @subpackage Secretum_Theme
 */


/**
 * Object Margin Alignment
 *
 * @source inc/system/primary-nav/customize/items.php
 * @source inc/system/primary-nav/customize/toggler.php
 *
 * @return array Keys & Values
 */
if (!function_exists('secretum_customizer_margin_alignments')) {
	function secretum_customizer_margin_alignments()
	{
		return array(
			'' 			=> __('Theme Default', 'secretum'),
			'mx-auto' 	=> __('Align Center', 'secretum'),
			'mr-auto' 	=> __('Align Left', 'secretum'),
			'ml-auto' 	=> __('Align Right', 'secretum')
		);
	}
}
