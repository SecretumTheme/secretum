<?php
/**
 * Customizer Fallback & Sanitize Functions
 *
 * @package Secretum
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
}


/**
 * Stop Customizer From Saving A Setting
 *
 * @param string $string Script String.
 * @return string Cleaned Script
 */
function secretum_customizer_import( $string ) {
	if ( ! is_customize_preview() ) { die(); }

	$json_array = json_decode( htmlspecialchars_decode( $string ), true );

	// @about String to Array
	if ( is_string( $string ) && is_array( $json_array ) && ( json_last_error() === JSON_ERROR_NONE ) ) {
		// @about Clear
		$array = [];

		// @about Simple Sanitize
		foreach ( $json_array as $key => $value ) {
			// @about Strings
			if ( isset( $value ) && is_string( $value ) ) {
				$array[ $key ] = htmlentities( wp_kses_post( $value ) );
			} elseif ( isset( $value ) && is_int( $value ) ) {
				// @about Intergers
				$array[ $key ] = absint( $value );
			} else {
				// @about Strip All
				$array[ htmlentities( wp_strip_all_tags( $value, true ) ) ];
			}
		}

		// @about If Array Set
		if ( ! empty( $array ) ) {
			// @about Merge Arrays & Filter Empty Values
			$clean_array = array_filter( array_merge( $array, secretum_customizer_global_settings() ) );

			// @about Merge Arrays & Filter Empty Values
			$settings = array_filter( array_intersect_key( $clean_array, get_option( 'secretum', array() ) ) );

			// @about Update Settings Option
			update_option( 'secretum', $settings );
		}

		return '';
	}
}


/**
 * Export Settings
 *
 * @param string $location Panel location.
 * @return string $data
 */
function secretum_customizer_export( $location ) {
	$settings = array();

	// @about Allowed Settings
	if ( 'default' === $location ) {
		$settings = secretum_customizer_default_settings();
	}

	// @about Allowed Settings
	if ( 'copyright' === $location ) {
		$settings = secretum_customizer_copyright_settings();
	}

	// @about Get Saved Option
	if ( isset( $settings ) ) {
		// @about Get Set Pairs
		$option = array_filter( get_option( 'secretum', array() ) );

		// @about Clean To Unique Keys
		$cleaned_array = array_intersect_key( $option, $settings );
	}

	// @about Return Data
	if ( ! empty( $cleaned_array ) ) {
		$data = wp_json_encode( $cleaned_array );
	} else {
		// @about No Data To Export
		$data = __( 'No Settings To Export', 'secretum' );
	}

	return $data;
}


/**
 * Reset Customzer Settings
 *
 * @param string $value Must equal reset to delete option.
 * @return false
 */
function secretum_customizer_reset( $value = '' ) {
	if ( ! empty( $value ) && 'RESET' === $value ) {
		// @about Delete Settings
		delete_option( 'secretum' );
	}
	return '';
}


/**
 * Sanitize Everything From String
 * Strip all HTML tags including script and style
 * Convert all applicable characters to HTML entities
 *
 * @param string $string HTML String.
 * @return string Cleaned HTML
 */
function secretum_customizer_sanitize_all( $string ) {
	return htmlentities( wp_strip_all_tags( $string, true ) );
}


/**
 * Sanitize Checkbox Value
 *
 * @param bool $checked If value is selected.
 * @return bool Return true if selected
 */
function secretum_customizer_sanitize_checkbox( $checked ) {
	return ( ( isset( $checked ) && true === $checked ) ? true : false );
}


/**
 * Sanitize HTML For Display
 * Sanitize content for allowed HTML tags
 * Convert HTML entities to corresponding characters
 *
 * @param string $string HTML String.
 * @return string Cleaned HTML
 */
function secretum_customizer_sanitize_html( $string ) {
	return html_entity_decode( wp_kses_post( $string ) );
}


/**
 * Sanitize Interger
 *
 * @param int $int Interger Value.
 * @return int Numeric Value
 */
function secretum_customizer_sanitize_int( $int ) {
	return is_numeric( $int ) ? $int : '';
}


/**
 * Encode Script For Database
 *
 * @param string $string Script String.
 * @return string Cleaned Script
 */
function secretum_customizer_sanitize_script( $string ) {
	return wp_json_encode( $string );
}


/**
 * Sanitize Text Translation String
 * Return a blank space if a space was provided
 * Strip all HTML tags including script and style
 * Convert all applicable characters to HTML entities
 *
 * @param string $string HTML String.
 * @return string Cleaned HTML
 */
function secretum_customizer_sanitize_translate( $string ) {
	return ( ctype_space( $string ) ) ? ' ' : htmlentities( wp_strip_all_tags( $string, true ) );
}
