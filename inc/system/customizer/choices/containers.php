<?php
/**
 * WordPress Customizer add_control 'choices' Arrays
 *
 * @method secretum_customizer_font_families()
 *
 * @package WordPress
 * @subpackage Secretum_Theme
 */


/**
 * Container Types
 *
 * @source inc/system/primary-nav/customize/container.php
 *
 * @return array Keys & Values
 */
if (!function_exists('secretum_customizer_container_types')) {
	function secretum_customizer_container_types()
	{
		return array(
			'' 			=> __('Responsive, fixed-width', 'secretum'),
			'-fluid' 	=> __('Fluid, full-width', 'secretum')
		);
	}
}
