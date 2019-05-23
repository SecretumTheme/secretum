<?php
/**
 * Secretum Post Meta Data
 *
 * @package    Secretum
 * @subpackage Core\Secretum-Mod
 * @author     SecretumTheme <author@secretumtheme.com>
 * @copyright  2018-2019 Secretum
 * @license    https://github.com/SecretumTheme/secretum/blob/master/license.txt GPL-2.0
 * @link       https://github.com/SecretumTheme/secretum/blob/master/inc/secretum-meta.php
 * @since      1.7.0
 */

namespace Secretum;

/**
 * Prepare Theme Post Meta Data Value For Display/Use
 *
 * @example secretum_meta( 'setting_name' );
 * @example secretum_meta( 'setting_name' 'section_name' );
 * @example secretum_meta( 'setting_name', '', false, true );
 * @example secretum_meta( 'setting_name', '', 'html' );
 * @example secretum_meta( 'setting_name', '', 'attr', true );
 * @example secretum_meta( 'setting_name', '', 'int', true );
 * @example secretum_meta( 'setting_name', '', 'raw' );
 *
 * @param string      $setting_name Post Meta Setting Name Within Array.
 * @param string      $section_name Customizer Section Key From Meta Array.
 * @param bool/string $escape html|attr|int|raw default bool.
 * @param bool/string $space True to add space before returned value.
 *
 * @since 1.7.0
 *
 * @return bool/string Sanitized Class Name
 */
function secretum_meta( $setting_name, $section_name = '', $escape = '', $space = '' ) {
	$theme_meta_class = new \Secretum\Theme_Meta();
	$theme_meta       = $theme_meta_class->settings( $setting_name, $section_name );

	$spacer = '';
	if ( true !== empty( $space ) ) {
		$spacer = ' ';
	}

	// Default Option Result.
	$mod = false;

	// If Mod & Escape Type Set.
	if ( true !== empty( $theme_meta ) && true !== empty( $escape ) ) {
		// Switch on Type.
		switch ( $escape ) {
			// Attribute.
			case 'attr':
				$mod = $spacer . esc_attr( $theme_meta );
				break;

			// Interger.
			case 'int':
				$mod = $spacer . absint( $theme_meta );
				break;

			// HTML.
			case 'html':
				$mod = $spacer . html_entity_decode( $theme_meta );
				break;

			// Script Output.
			case 'script':
				$mod = $spacer . json_decode( $theme_meta );
				break;

			// Raw Output.
			case 'raw':
				$mod = $spacer . $theme_meta;
				break;

			// URL.
			case 'url':
				$mod = $spacer . esc_url( $theme_meta );
				break;
		}
	} elseif ( true !== empty( $theme_meta ) && '' === $theme_meta ) {
		// Set No Value.
		$mod = '';
	} elseif ( true !== empty( $theme_meta ) && true === empty( $escape ) ) {
		// Value Found.
		$mod = true;
	}

	return $mod;

}//end secretum_meta()
