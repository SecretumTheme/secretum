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
 */

namespace Secretum;

/**
 * Returns either Foundation icon icon/svg or Font Awesome Icon if Better Font Awesome Plugin installed
 *
 * @example echo secretum_icon( [ 'fi' => 'icon-name', ] );
 * @example echo secretum_icon( [ 'fa' => 'icon-name', ] );
 * @example echo secretum_icon( [ 'png' => 'icon-name', ] );
 * @example echo secretum_icon( [ 'svg' => 'icon-name', ] );
 * @example echo secretum_icon( [ fi' => 'icon-name', 'fa' => 'icon-name', 'alt' => 'Text', 'size' => 'text-14', ], false );
 *
 * @param array $args [fi( string ), fa( string ), svg( string ), alt( string ), size( string ), echo( bool )].
 * @return string HTML
 */
function secretum_icon( $args = [] ) {
	// Parse args.
	$args = wp_parse_args( $args, [
		'fi' 	=> '',
		'fa' 	=> '',
		'svg' 	=> '',
		'alt' 	=> '',
		'size' 	=> '',
		'echo' 	=> true,
	] );

	// Build Alt Tag.
	$alt = ( ! empty( $args['alt'] ) ) ? ' alt="' . esc_html( $args['alt'] ) . '"' : '';

	// Text Size.
	$text_size = ( ! empty( $args['size'] ) ) ? esc_attr( $args['size'] ) : '';

	// Default Output.
	$html = '';

	// Display Font Awesome Icon If Plugin Enabled.
	if ( class_exists( 'Better_Font_Awesome_Plugin' ) && ! empty( $args['fa'] ) ) {
		$html .= '<i class="fa ' . esc_attr( $args['fa'] ) . ' ' . $text_size . '" aria-hidden="true"' . $alt . '></i>';
	} elseif ( ! empty( $args['fi'] ) ) {
		// Display Foundation Icon.
		$html .= '<i class="fi-' . esc_attr( $args['fi'] ) . ' ' . $text_size . '" aria-hidden="true"' . $alt . '></i>';
	} elseif ( ! empty( $args['svg'] ) ) {
		// Display SVG Icon.
		$html .= '<img src="' . SECRETUM_THEME_URL . '/images/svg/' . esc_attr( $args['svg'] ) . '.svg" class="' . $text_size . '"' . $alt . '/>';
	}

	if ( true === $args['echo'] ) {
		// Sanitize Echo.
		echo wp_kses_post( $html );
	} else {
		// Return String.
		return $html;
	}
}
