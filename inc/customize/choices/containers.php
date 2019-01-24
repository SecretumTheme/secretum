<?php
/**
 * WordPress Customizer add_control 'choices' Arrays
 *
 * @package    Secretum
 * @subpackage Core\Customize\Choices\Containers
 * @author     SecretumTheme <author@secretumtheme.com>
 * @copyright  2018-2019 Secretum
 * @license    https://github.com/SecretumTheme/secretum/blob/master/license.txt GPL-2.0
 * @link       https://github.com/SecretumTheme/secretum/blob/master/inc/customize/choices/containers.php
 */

namespace Secretum;


/**
 * Container Types
 *
 * @return array Keys & Values
 */
function secretum_customizer_container_types() {
	return [
		'' 			=> __( 'Responsive, fixed-width', 'secretum' ),
		'-fluid' 	=> __( 'Fluid, full-width', 'secretum' ),
	];
}
