<?php
/**
 * Customizer Fallback & Sanitize Functions
 *
 * @package    Secretum
 * @subpackage Customizer
 * @author     SecretumTheme <author@secretumtheme.com>
 * @copyright  2018-2019 Secretum
 * @license    https://github.com/SecretumTheme/secretum/blob/master/license.txt GPL-2.0
 * @link       https://github.com/SecretumTheme/secretum/blob/master/inc/customize/customizer-functions.php
 * @since      1.0.0
 */

namespace Secretum;

/**
 * Reset Customzer Settings
 *
 * @since 1.0.0
 *
 * @param string $value Must equal reset to delete option.
 *
 * @return false
 */
function secretum_customizer_reset( $value = '' ) {
	if ( false === empty( $value ) && 'RESET' === $value ) {
		// Delete Settings.
		remove_theme_mod( 'secretum' );
	}

	return '';

}//end secretum_customizer_reset()


/**
 * Get Blog Name
 *
 * @since 1.0.0
 */
function secretum_customizer_blog_name() {
	bloginfo( 'name' );

}//end secretum_customizer_blog_name()


/**
 * Get Blog Description
 *
 * @since 1.0.0
 */
function secretum_customizer_blog_desc() {
	bloginfo( 'description' );

}//end secretum_customizer_blog_desc()


/**
 * Sanitize Everything From String
 * Strip all HTML tags including script and style
 * Convert all applicable characters to HTML entities
 *
 * @since 1.0.0
 *
 * @param string $string HTML String.
 *
 * @return string Cleaned HTML
 */
function secretum_customizer_sanitize_all( $string ) {
	return htmlentities( wp_strip_all_tags( $string, true ) );

}//end secretum_customizer_sanitize_all()


/**
 * Sanitize Checkbox Value
 *
 * @since 1.0.0
 *
 * @param bool $checked If value is selected.
 *
 * @return bool Return true if selected
 */
function secretum_customizer_sanitize_checkbox( $checked ) {
	if ( true === isset( $checked ) && ( 1 === $checked || true === $checked ) ) {
		return true;
	}
	return 0;

}//end secretum_customizer_sanitize_checkbox()


/**
 * Sanitize HTML For Display
 * Sanitize content for allowed HTML tags
 * Convert HTML entities to corresponding characters
 *
 * @since 1.0.0
 *
 * @param string $string HTML String.
 *
 * @return string Cleaned HTML
 */
function secretum_customizer_sanitize_html( $string ) {
	return html_entity_decode( wp_kses_post( $string ) );

}//end secretum_customizer_sanitize_html()


/**
 * Sanitize Interger
 *
 * @since 1.0.0
 *
 * @param int $int Interger Value.
 *
 * @return int Numeric Value
 */
function secretum_customizer_sanitize_int( $int ) {
	if ( is_numeric( $int ) === true ) {
		return $int;
	} else {
		return '';
	}

}//end secretum_customizer_sanitize_int()


/**
 * Encode Script For Database
 *
 * @since 1.0.0
 *
 * @param string $string Script String.
 *
 * @return string Encoded Script
 */
function secretum_customizer_sanitize_script( $string ) {
	return wp_json_encode( $string );

}//end secretum_customizer_sanitize_script()


/**
 * Decode Script For Textarea
 *
 * @since 1.0.0
 *
 * @param string $string Script String.
 *
 * @return string Decoded Script
 */
function secretum_customizer_decode_script( $string ) {
	return json_decode( $string );

}//end secretum_customizer_decode_script()
