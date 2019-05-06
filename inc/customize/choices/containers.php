<?php
/**
 * WordPress Customizer add_control 'choices' Arrays
 *
 * @package    Secretum
 * @subpackage Customizer
 * @author     SecretumTheme <author@secretumtheme.com>
 * @copyright  2018-2019 Secretum
 * @license    https://github.com/SecretumTheme/secretum/blob/master/license.txt GPL-2.0
 * @link       https://github.com/SecretumTheme/secretum/blob/master/inc/customize/choices/containers.php
 * @since      1.0.0
 */

namespace Secretum;

/**
 * Container Types
 *
 * @since 1.0.0
 *
 * @return array Keys & Values For Select Options
 */
function secretum_customizer_container_types() {
	return [
		''       => __( 'Responsive, fixed-width', 'secretum' ),
		'-fluid' => __( 'Fluid, full-width', 'secretum' ),
	];

}//end secretum_customizer_container_types()
