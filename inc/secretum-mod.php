<?php
/**
 * Secretum Settings Option
 *
 * @package    Secretum
 * @subpackage Core\Secretum-Mod
 * @author     SecretumTheme <author@secretumtheme.com>
 * @copyright  2018-2019 Secretum
 * @license    https://github.com/SecretumTheme/secretum/blob/master/license.txt GPL-2.0
 * @link       https://github.com/SecretumTheme/secretum/blob/master/inc/secretum-mod.php
 * @since      1.0.0
 */

namespace Secretum;

/**
 * Prepare Theme Mod Setting Value For Display/Use
 *
 * @since 1.0.0
 *
 * @example secretum_mod( 'setting_name' );
 * @example secretum_mod( 'setting_name', false, true );
 * @example secretum_mod( 'setting_name', 'html' );
 * @example secretum_mod( 'setting_name', 'attr', true );
 * @example secretum_mod( 'setting_name', 'int', true );
 * @example secretum_mod( 'setting_name', 'raw' );
 *
 * @param string      $setting_name Valid setting name.
 * @param mixed       $escape html|attr|int|raw default bool.
 * @param bool/string $space True to add space before returned value.
 * @return bool/string Sanitized Class Name
 */
function secretum_mod( $setting_name, $escape = '', $space = '' ) {

	// Build Settings Array.
	$settings_array = wp_parse_args(
		// Remove Blank Values From Setting Option.
		array_filter( get_option( 'secretum', [] ), 'strlen' ),
		// Remove Blank Values From Default Settings.
		array_filter( secretum_customizer_default_settings(), 'strlen' )
	);

	// Get Theme Mod.
	$theme_mod = isset( $settings_array[ $setting_name ] ) ? $settings_array[ $setting_name ] : '';

	// Default Option Result.
	$mod = false;

	// If Mod & Escape Type Set.
	if ( true !== empty( $theme_mod ) && true !== empty( $escape ) ) {
		// Switch on Type.
		switch ( $escape ) {
			// Attribute.
			case 'attr':
				$mod = ( true !== empty( $space ) ? ' ' : '' ) . esc_attr( $theme_mod );
				break;

			// Interger.
			case 'int':
				$mod = ( true !== empty( $space ) ? ' ' : '' ) . absint( $theme_mod );
				break;

			// HTML.
			case 'html':
				$mod = ( true !== empty( $space ) ? ' ' : '' ) . html_entity_decode( $theme_mod );
				break;

			// Script Output.
			case 'script':
				$mod = ( true !== empty( $space ) ? ' ' : '' ) . json_decode( $theme_mod );
				break;

			// Raw Output.
			case 'raw':
				$mod = ( true !== empty( $space ) ? ' ' : '' ) . $theme_mod;
				break;

			// URL.
			case 'url':
				$mod = ( true !== empty( $space ) ? ' ' : '' ) . esc_url( $theme_mod );
				break;
		}
	} elseif ( true !== empty( $theme_mod ) && 'none' === $theme_mod ) {
		// Set No Value.
		$mod = '';
	} elseif ( true !== empty( $theme_mod ) && true === empty( $escape ) ) {
		// Value Found.
		$mod = true;
	}

	return $mod;

}//end secretum_mod()
