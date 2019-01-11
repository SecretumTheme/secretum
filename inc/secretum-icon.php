<?php
/**
 * Display Icon Markup
 *
 * @package Secretum
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
	// @about Parse args.
	$args = wp_parse_args( $args, [
		'fi' 	=> '',
		'fa' 	=> '',
		'svg' 	=> '',
		'alt' 	=> '',
		'size' 	=> '',
		'echo' 	=> true,
	] );

	// @about Build Alt Tag
	$alt = ( ! empty( $args['alt'] ) ) ? ' alt="' . esc_html( $args['alt'] ) . '"' : '';

	// @about Text Size
	$text_size = ( ! empty( $args['size'] ) ) ? esc_attr( $args['size'] ) : '';

	// @about Default Output
	$html = '';

	// @about Display Font Awesome Icon If Plugin Enabled
	if ( class_exists( 'Better_Font_Awesome_Plugin' ) && ! empty( $args['fa'] ) ) {
		$html .= '<i class="fa ' . esc_attr( $args['fa'] ) . ' ' . $text_size . '" aria-hidden="true"' . $alt . '></i>';
	} elseif ( ! empty( $args['fi'] ) ) {
		// @about Display Foundation Icon
		$html .= '<i class="fi-' . esc_attr( $args['fi'] ) . ' ' . $text_size . '" aria-hidden="true"' . $alt . '></i>';
	} elseif ( ! empty( $args['svg'] ) ) {
		// @about Display SVG Icon
		$html .= '<img src="' . SECRETUM_THEME_URL . '/images/svg/' . esc_attr( $args['svg'] ) . '.svg" class="' . $text_size . '"' . $alt . '/>';
	}

	if ( true === $args['echo'] ) {
		// @about Sanitize Echo
		echo wp_kses_post( $html );
	} else {
		// @about Return String
		return $html;
	}
}
