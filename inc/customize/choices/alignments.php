<?php
/**
 * WordPress Customizer add_control 'choices' Arrays
 *
 * @package    Secretum
 * @subpackage Core\Customize\Choices\Alignments
 * @author     SecretumTheme <author@secretumtheme.com>
 * @copyright  2018-2019 Secretum
 * @license    https://github.com/SecretumTheme/secretum/blob/master/license.txt GPL-2.0
 * @link       https://github.com/SecretumTheme/secretum/blob/master/inc/customize/choices/alignments.php
 */

namespace Secretum;


/**
 * Object Margin Alignment
 *
 * @return array Keys & Values
 */
function secretum_customizer_margin_alignments() {
	return [
		'' 			=> __( 'Theme Default', 'secretum' ),
		'mx-auto' 	=> __( 'Align Center', 'secretum' ),
		'mr-auto' 	=> __( 'Align Left', 'secretum' ),
		'ml-auto' 	=> __( 'Align Right', 'secretum' ),
	];
}


/**
 * Text Alignment
 *
 * @return array Keys & Values
 */
function secretum_customizer_text_alignments() {
	return [
		'' 				=> __( 'Theme Default', 'secretum' ),
		'text-center' 	=> __( 'Align Center', 'secretum' ),
		'text-left' 	=> __( 'Align Left', 'secretum' ),
		'text-right' 	=> __( 'Align Right', 'secretum' ),
	];
}
