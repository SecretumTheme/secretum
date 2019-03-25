<?php
/**
 * Functions related to theme display or manipulation
 *
 * @package    Secretum
 * @subpackage Core\Template-Functions\Frontpage
 * @author     SecretumTheme <author@secretumtheme.com>
 * @copyright  2018-2019 Secretum
 * @license    https://github.com/SecretumTheme/secretum/blob/master/license.txt GPL-2.0
 * @link       https://github.com/SecretumTheme/secretum/blob/master/inc/template-functions/frontpage.php
 * @since      1.0.0
 */

namespace Secretum;

/**
 * Inject Frontpage Inline BG Style
 *
 * @since 1.0.0
 */
function secretum_frontpage_bg_style() {
	// Get Background Image ID.
	$image_src_id = secretum_mod( 'frontpage_heading_bg', 'int' );

	// If Background ID Set.
	if ( isset( $image_src_id ) && is_numeric( $image_src_id ) ) {
		// Get Attachment Array.
		$image_src_array = wp_get_attachment_image_src( $image_src_id, 'full', false );

		// Set Img SRC Url.
		if ( isset( $image_src_array ) && isset( $image_src_array[0] ) ) {
			$image_src = esc_url( $image_src_array[0] );
		}
	}

	// Extra CSS.
	$css = 'background-position:center;background-repeat:no-repeat;background-size:cover;height:100%;width:100%;';

	// Build Class String.
	$class_string = ( isset( $image_src ) ) ? ' style="background-image:url( ' . $image_src . ' );' . $css . '"' : '';

	// Return Class String.
	echo wp_kses_post( apply_filters( 'secretum_frontpage_bg_style', $class_string, 10, 1 ) );

}//end secretum_frontpage_bg_style()
