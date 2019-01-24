<?php
/**
 * Customizer Fallback & Sanitize Functions
 *
 * @package    Secretum
 * @subpackage Customize\Customizer-Functions
 * @author     SecretumTheme <author@secretumtheme.com>
 * @copyright  2018-2019 Secretum
 * @license    https://github.com/SecretumTheme/secretum/blob/master/license.txt GPL-2.0
 * @link       https://github.com/SecretumTheme/secretum/blob/master/inc/customize/customizer-functions.php
 */

namespace Secretum;


/**
 * Customizer Refresh Icon
 */
function secretum_customizer_refresh() {
	echo wp_kses(
		'<a href="javascript:void(0);" onclick="document.location.reload(true)" title="' . __( 'Refresh Preview', 'secretum' ) . '"><i class="secretum-customizer-icon fi-refresh" aria-hidden="true"></i></a>',
		[
			'a' => [
				'href' 			=> true,
				'onclick' 		=> true,
				'title' 		=> true,
			],
			'i' => [
				'class' 		=> true,
				'aria-hidden' 	=> true,
			],
		],
		'javascript'
	);
}//end secretum_customizer_refresh()


/**
 * Reset Customzer Settings
 *
 * @param string $value Must equal reset to delete option.
 *
 * @return false
 */
function secretum_customizer_reset( $value = '' ) {
	if ( empty( $value ) === false && 'RESET' === $value ) {
		// Delete Settings.
		delete_option( 'secretum' );
	}
	return '';
}//end secretum_customizer_reset()


/**
 * Get Blog Name
 */
function secretum_customizer_blog_name() {
	bloginfo( 'name' );
}//end secretum_customizer_blog_name()


/**
 * Get Blog Description
 */
function secretum_customizer_blog_desc() {
	bloginfo( 'description' );
}//end secretum_customizer_blog_desc()


/**
 * Sanitize Everything From String
 * Strip all HTML tags including script and style
 * Convert all applicable characters to HTML entities
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
 * @param bool $checked If value is selected.
 *
 * @return bool Return true if selected
 */
function secretum_customizer_sanitize_checkbox( $checked ) {
	if ( ( isset( $checked ) === true ) ) {
		if ( true === $checked ) {
			return true;
		}

		if ( false === $checked ) {
			return false;
		}
	}
}//end secretum_customizer_sanitize_checkbox()


/**
 * Sanitize HTML For Display
 * Sanitize content for allowed HTML tags
 * Convert HTML entities to corresponding characters
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
 * @param string $string Script String.
 *
 * @return string Decoded Script
 */
function secretum_customizer_decode_script( $string ) {
	return json_decode( $string );
}//end secretum_customizer_decode_script()
