<?php
/**
 * WordPress Customizer add_control 'choices' Arrays
 *
 * @package    Secretum
 * @subpackage Customizer
 * @author     SecretumTheme <author@secretumtheme.com>
 * @copyright  2018-2019 Secretum
 * @license    https://github.com/SecretumTheme/secretum/blob/master/license.txt GPL-2.0
 * @link       https://github.com/SecretumTheme/secretum/blob/master/inc/customize/choices/alignments.php
 * @since      1.0.0
 */

namespace Secretum;

/**
 * Object Margin Alignment
 *
 * @since 1.0.0
 *
 * @return array Keys & Values For Select Options
 */
function secretum_customizer_margin_alignments() {
	return [
		''        => __( 'Stylesheet Default', 'secretum' ),
		'mx-auto' => __( 'Align Center', 'secretum' ),
		'mr-auto' => __( 'Align Left', 'secretum' ),
		'ml-auto' => __( 'Align Right', 'secretum' ),
	];

}//end secretum_customizer_margin_alignments()


/**
 * Text Alignment
 *
 * @since 1.0.0
 *
 * @return array Keys & Values For Select Options
 */
function secretum_customizer_text_alignments() {
	return [
		''            => __( 'Stylesheet Default', 'secretum' ),
		'text-center' => __( 'Align Center', 'secretum' ),
		'text-left'   => __( 'Align Left', 'secretum' ),
		'text-right'  => __( 'Align Right', 'secretum' ),
	];

}//end secretum_customizer_text_alignments()
