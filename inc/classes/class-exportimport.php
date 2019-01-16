<?php
/**
 * Export & Import Secretum Customizer Settings
 *
 * @package    Secretum
 * @subpackage Secretum\ExportImport
 * @author     SecretumTheme <author@secretumtheme.com>
 * @copyright  2018-2019 Secretum
 * @license    https://github.com/SecretumTheme/secretum/blob/master/license.txt GPL-2.0
 * @link       https://github.com/SecretumTheme/secretum/blob/master/inc/classes/class-exportimport.php
 */

namespace Secretum;

/**
 * Export & Import Manager Class
 */
class ExportImport {
	/**
	 * Export Settings
	 *
	 * @param string $location Panel/Section Location.
	 * @return string $data
	 */
	final public function export( $location ) {
		// Capability Required.
		if ( current_user_can( 'edit_theme_options' ) === false ) {
			return;
		}

		// Build Location Var.
		if ( 'all_settings' === $location ) {
			$location = 'default';
		}

		// Build Function Name.
		$function_name = 'Secretum\secretum_customizer_' . sanitize_key( $location ) . '_settings';

		$settings = array();

		// Assing Function.
		if ( function_exists( $function_name ) === true ) {
			$settings = $function_name();
		}

		// Get Saved Option.
		if ( isset( $settings ) === true ) {
			// Get Set Pairs.
			$option = array_filter( get_option( 'secretum', array() ) );

			// Clean To Unique Keys.
			$cleaned_array = array_intersect_key( $option, $settings );
		}

		// Return Data.
		if ( empty( $cleaned_array ) === false ) {
			$data = htmlentities( wp_json_encode( $cleaned_array, ( JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES | JSON_NUMERIC_CHECK ) ) );
		} else {
			// No Data To Export.
			$data = __( 'No Settings To Export', 'secretum' );
		}

		return $data;
	}//end export()


	/**
	 * Import Settings
	 *
	 * @param string $string JSON Encoded Settings String.
	 */
	final public function import( $string ) {
		// Capability Required.
		if ( current_user_can( 'edit_theme_options' ) === false ) {
			return;
		}

		$json_array = '';

		// Decode & Trim String.
		if ( empty( $string ) === false && is_string( $string ) === true ) {
			$json_array = json_decode( html_entity_decode( trim( $string ) ), true );
		}

		// If Valid.
		if ( is_string( $string ) === true && is_array( $json_array ) === true && ( json_last_error() === JSON_ERROR_NONE ) ) {
			// Clear.
			$array = [];

			// Get Default Setting Keys.
			$search_array = secretum_customizer_default_settings();

			// Simple Sanitize.
			foreach ( $json_array as $key => $value ) {
				if ( array_key_exists( $key, $search_array ) === true ) {
					// Strings.
					if ( isset( $value ) === true && is_string( $value ) === true ) {
						$array[ $key ] = wp_kses_post( $value );
					} elseif ( isset( $value ) === true && is_int( $value ) === true ) {
						// Intergers.
						$array[ $key ] = absint( $value );
					} else {
						// Strip All.
						$array[ wp_strip_all_tags( $value, true ) ];
					}
				}
			}

			// If Array Set, Merge New Values Into Option.
			if ( empty( $array ) === false ) {
				// Merge new value into array, and filter empty values.
				$settings = array_filter( array_replace( get_option( 'secretum', array() ), $array ) );

				// Update Settings Option.
				update_option( 'secretum', $settings );

				// Success Message.
				add_action( 'admin_notices', array( $this, 'admin_notice_success' ) );
			} else {
				// Error Message.
				add_action( 'admin_notices', array( $this, 'admin_notice_error' ) );
			}
		}// End if().
	}//end import()


	/**
	 * Admin Notice: Success
	 */
	final public function admin_notice_success() {
		echo '<div class="notice notice-success is-dismissible"><p>' . esc_html__( 'Import Completed', 'secretum' ) . '</p></div>';
	}//end admin_notice_success()


	/**
	 * Admin Notice: Error
	 */
	final public function admin_notice_error() {
		echo '<div class="notice notice-error is-dismissible"><p>' . esc_html__( 'Error: Import Failed', 'secretum' ) . '</p></div>';
	}//end admin_notice_error()
}//end class
