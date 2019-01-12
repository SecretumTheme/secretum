<?php
/**
 * WordPress Customizer add_control 'choices' Arrays
 *
 * @package Secretum
 */

namespace Secretum;


/**
 * Textual Sizing
 *
 * @return array Keys & Values
 */
function secretum_theme_colors() {
	return array_merge(
		array(
			'' => __( 'Default Stylesheet', 'secretum' ),
		),
		get_option( 'secretum_theme_colors', array() )
	);
}
