<?php
/**
 * WordPress Customizer add_control 'choices' Arrays
 *
 * @package Secretum
 */

namespace Secretum;


/**
 * Container Types
 *
 * @return array Keys & Values
 */
function secretum_customizer_container_types() {
	return array(
		'' 			=> __( 'Responsive, fixed-width', 'secretum' ),
		'-fluid' 	=> __( 'Fluid, full-width', 'secretum' ),
	);
}
