<?php
/**
 * Display Icon Markup
 *
 * @package    Secretum
 * @subpackage Core\Secretum-Icon
 * @author     SecretumTheme <author@secretumtheme.com>
 * @copyright  2018-2019 Secretum
 * @license    https://github.com/SecretumTheme/secretum/blob/master/license.txt GPL-2.0
 * @link       https://github.com/SecretumTheme/secretum/blob/master/inc/secretum-icon.php
 * @since      1.0.0
 */

namespace Secretum;

/**
 * Returns either Foundation icon icon/svg or Font Awesome Icon if Better Font Awesome Plugin installed
 *
 * @since 1.0.0
 *
 * @example echo secretum_icon( array( 'fi' => 'play', 'fa' => 'fa-play', ) );
 *
 * @param array $args [fi( string ), fa( string ), svg( string ), alt( string ), size( string ), echo( bool )].
 * @return string HTML
 */
function secretum_icon( $args = [] ) {
	// Parse args.
	$args = wp_parse_args(
		$args,
		[
			'fi'   => '',
			'fa'   => '',
			'svg'  => '',
			'alt'  => '',
			'size' => '',
			'echo' => true,
		]
	);

	// Build Alt Tag.
	$alt = ( true !== empty( $args['alt'] ) ) ? ' alt="' . esc_html( $args['alt'] ) . '"' : '';

	// Text Size Class Name.
	$text_size_class = ( true !== empty( $args['size'] ) ) ? esc_attr( $args['size'] ) : '';

	// Default Output.
	$html = '';

	// Display Font Awesome Icon If Plugin Enabled.
	if ( true === class_exists( 'Better_Font_Awesome_Plugin' ) && true !== empty( $args['fa'] ) ) {
		$html .= '<i class="fa ' . esc_attr( $args['fa'] ) . ' ' . $text_size_class . '" aria-hidden="true"' . $alt . '></i>';
	} elseif ( true !== empty( $args['fi'] ) ) {
		// Display Foundation Icon.
		$html .= '<i class="fi-' . esc_attr( $args['fi'] ) . ' ' . $text_size_class . '" aria-hidden="true"' . $alt . '></i>';
	} elseif ( true !== empty( $args['svg'] ) ) {
		// Display SVG Icon.
		$html .= '<img src="' . SECRETUM_THEME_URL . '/images/svg/' . esc_attr( $args['svg'] ) . '.svg" class="' . $text_size_class . '"' . $alt . '/>';
	}

	if ( true === $args['echo'] ) {
		// Sanitize Echo.
		echo wp_kses_post( $html );
	} else {
		// Return String.
		return $html;
	}

}//end secretum_icon()
