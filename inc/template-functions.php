<?php
/**
 * Global Template Styling Functions
 *
 * @package    Secretum
 * @subpackage Core\Template-Functions
 * @author     SecretumTheme <author@secretumtheme.com>
 * @copyright  2018-2019 Secretum
 * @license    https://github.com/SecretumTheme/secretum/blob/master/license.txt GPL-2.0
 * @link       https://github.com/SecretumTheme/secretum/blob/master/inc/template-functions.php
 * @since      1.0.0
 */

namespace Secretum;

/**
 * Translation Text Display
 *
 * @param string $key Array Key To Get Value Of.
 * @param bool   $echo True to return.
 *
 * @see class/customizer/class-translate.php
 * @see class/customizer/class-translations.php
 * @see class/customizer/class-trait-translations.php
 *
 * @example (echo) secretum_text( 'read_more_text', true );
 * @example (return) secretum_text( 'read_more_text' );
 *
 * @return string Text String
 *
 * @since 1.0.0
 */
function secretum_text( $key = '', $echo = false ) {
	$translate = \Secretum\Translate::instance();

	// Required.
	if ( false === empty( $key ) ) {
		if ( false === $echo ) {
			// Return Text.
			return $translate->get( $key, false );
		} else {
			// Echo Text.
			$translate->get( $key, true );
		}
	}

}//end secretum_text()


/**
 * Customizer Refresh Icon
 *
 * @since 1.0.0
 */
function secretum_customizer_refresh() {
	echo wp_kses(
		'<a href="javascript:void(0);" onclick="document.location.reload(true)" title="' . __( 'Refresh Preview', 'secretum' ) . '"><i class="secretum-customizer-icon fi-refresh" aria-hidden="true"></i></a>',
		[
			'a' => [
				'href'    => true,
				'onclick' => true,
				'title'   => true,
			],
			'i' => [
				'class'       => true,
				'aria-hidden' => true,
			],
		],
		'javascript'
	);

}//end secretum_customizer_refresh()


/**
 * Check if WooCommerce is Active
 *
 * @since 1.0.0
 *
 * @return bool
 */
function secretum_is_woocomerce() {
	if ( true === class_exists( 'woocommerce' ) ) {
		return true;
	}

	return false;

}//end secretum_is_woocomerce()


/**
 * Check if WooCommerce Product Exists
 *
 * @since 1.0.0
 *
 * @return bool
 */
function secretum_is_wooproduct() {
	if ( true === class_exists( 'woocommerce' ) && true === function_exists( 'is_product' ) ) {
		return true;
	}

	return false;

}//end secretum_is_wooproduct()


/**
 * Check if Woo Bookings is Active
 *
 * @since 1.0.0
 *
 * @return bool
 */
function secretum_is_woobookings() {
	if ( true === class_exists( 'WC_Bookings' ) ) {
		return true;
	}

	return false;

}//end secretum_is_woobookings()
