<?php
/**
 * WordPress Customizer add_control 'choices' Arrays
 *
 * @package    Secretum
 * @subpackage Customizer
 * @author     SecretumTheme <author@secretumtheme.com>
 * @copyright  2018-2019 Secretum
 * @license    https://github.com/SecretumTheme/secretum/blob/master/license.txt GPL-2.0
 * @link       https://github.com/SecretumTheme/secretum/blob/master/inc/customize/choices/locations.php
 * @since      1.5.1
 */

namespace Secretum;

/**
 * Primary Menu Display Location
 *
 * @since 1.5.1
 *
 * @return array Keys & Values For Select Options
 */
function secretum_customizer_primary_nav_location() {
	return [
		''      => __( 'Below Header (default)', 'secretum' ),
		'above' => __( 'Above Header', 'secretum' ),
		'left'  => __( 'Left Of Logo', 'secretum' ),
		'right' => __( 'Right Of Logo', 'secretum' ),
	];

}//end secretum_customizer_primary_nav_location()
