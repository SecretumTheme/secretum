<?php
/**
 * Secretum Theme: WooCommerce Bookings Settings
 *
 * @package    Secretum
 * @subpackage Core\WooCommerce-Bookings
 * @author     SecretumTheme <author@secretumtheme.com>
 * @copyright  2018-2019 Secretum
 * @license    https://github.com/SecretumTheme/secretum/blob/master/license.txt GPL-2.0
 * @link       https://github.com/SecretumTheme/secretum/blob/master/inc/woocommerce-bookings.php
 * @since      1.0.0
 */

namespace Secretum;

/**
 * Update Booking Expires Time For WooCommerce Bookings In Minutes
 *
 * @since 1.0.0
 *
 * @param int $minutes Expire time in minutes.
 * @return int New time
 *
 * @link https://docs.woocommerce.com/document/bookings-snippets/
 */
function secretum_woocommerce_bookings_remove_inactive_cart_time( $minutes ) {
	return 20;

}//end secretum_woocommerce_bookings_remove_inactive_cart_time()

add_filter( 'woocommerce_bookings_remove_inactive_cart_time', 'Secretum\secretum_woocommerce_bookings_remove_inactive_cart_time' );


/**
 * Update Booking Field Order On Add-To-Cart
 *
 * @since 1.0.0
 *
 * @param array $fields Current booking fields.
 * @return array $new_order Updated booking field order
 *
 * @link https://docs.woocommerce.com/document/bookings-snippets/
 */
function secretum_booking_form_fields( $fields ) {
	$new_order = [];

	// Calendar.
	if ( isset( $fields['wc_bookings_field_start_date'] ) ) {
		$new_order[] = $fields['wc_bookings_field_start_date'];
	}

	// Duration.
	if ( isset( $fields['wc_bookings_field_duration'] ) ) {
		$new_order[] = $fields['wc_bookings_field_duration'];
	}

	// Resource.
	if ( isset( $fields['wc_bookings_field_resource'] ) ) {
		$new_order[] = $fields['wc_bookings_field_resource'];
	}

	// Persons.
	if ( isset( $fields['wc_bookings_field_persons'] ) ) {
		$new_order[] = $fields['wc_bookings_field_persons'];
	}

	return $new_order;

}//end secretum_booking_form_fields()

add_filter( 'booking_form_fields', 'Secretum\secretum_booking_form_fields' );


/**
 * Inject sold-out tag on future sold-out times
 *
 * @since 1.0.0
 *
 * @param  string $block_html Current display times.
 * @param  array  $available_blocks Full and partial blocks.
 * @param  string $blocks All future blocks.
 * @return string $block_html Updated times with sold-out injected.
 */
function secretum_wc_bookings_get_time_slots_html( $block_html, $available_blocks, $blocks ) {
	$booked_blocks = '';

	// Build booking array from all blocks.
	foreach ( $blocks as $key => $id ) {
		if ( false === array_key_exists( $id, $available_blocks ) ) {
			$booked_blocks[ $id ] = [
				'booked'    => 1,
				'available' => 0,
				'resources' => [
					'0' => 1,
				],
			];
		}
	}

	// Maybe Build New Available Blocks.
	$new_available_blocks = ( true !== empty( $booked_blocks ) ) ? $booked_blocks + $available_blocks : '';

	// Put Available Blocks In Proper Order.
	if ( true !== empty( $new_available_blocks ) ) {
		$keys = array_keys( $new_available_blocks );
		natcasesort( $keys );

		foreach ( $keys as $k ) {
			$new_array[ $k ] = $new_available_blocks[ $k ];
		}

		$available_blocks = $new_array;
	}

	// Reset Block HTML.
	$block_html = '';

	// Rebuild Block HTML.
	foreach ( $available_blocks as $block => $quantity ) {
		// Inject Sold-out Marker.
		if ( 0 === $quantity['available'] ) {
			$block_html .= '<li class="block"><a href="#" class="sold-out">' . __( 'booked', 'secretum' ) . '</a></li>';
		}

		// Original Block HTML.
		if ( $quantity['available'] > 0 ) {
			if ( $quantity['booked'] ) {
				/* translators: 1: quantity available */
				$block_html .= '<li class="block" data-block="' . esc_html( date( 'Hi', $block ) ) . '"><a href="#" data-value="' . date( 'G:i', $block ) . '">' . date_i18n( get_option( 'time_format' ), $block ) . ' <small class="booking-spaces-left">( ' . sprintf( __( '%d Remain', 'secretum' ), $quantity['available'] ) . ' )</small></a></li>';
			} else {
				$block_html .= '<li class="block" data-block="' . esc_html( date( 'Hi', $block ) ) . '"><a href="#" data-value="' . date( 'G:i', $block ) . '">' . date_i18n( get_option( 'time_format' ), $block ) . '</a></li>';
			}
		}
	}

	return $block_html;

}//end secretum_wc_bookings_get_time_slots_html()

add_filter( 'wc_bookings_get_time_slots_html', 'Secretum\secretum_wc_bookings_get_time_slots_html', 10, 3 );


/**
 * Update Woo Cart Session Expires Times In Seconds ( 1200s = 20m )
 *
 * @since 1.0.0
 *
 * @link https://docs.woocommerce.com/wc-apidocs/source-class-WC_Session_Handler.html
 *
 * @param int $seconds Time in Seconds.
 */
function secretum_wc_session_expiring( $seconds ) {
	return 1200;

}//end secretum_wc_session_expiring()

add_filter( 'wc_session_expiring', 'Secretum\secretum_wc_session_expiring' );


/**
 * Update Woo Cart Session Expires Times In Seconds ( 1200s = 20m )
 *
 * @since 1.0.0
 *
 * @link https://docs.woocommerce.com/wc-apidocs/source-class-WC_Session_Handler.html
 *
 * @param int $seconds Time in Seconds.
 */
function secretum_wc_session_expiration( $seconds ) {
	return 1200;

}//end secretum_wc_session_expiration()

add_filter( 'wc_session_expiration', 'Secretum\secretum_wc_session_expiration' );


/**
 * Update Book Now Button
 *
 * @since 1.0.0
 *
 * @link https://docs.woocommerce.com/document/bookings-snippets/
 */
function secretum_woocommerce_booking_single_add_to_cart_text() {
	return __( 'Continue', 'secretum' ) . ' <i class="fa fa-long-arrow-right" aria-hidden="true"></i>';

}//end secretum_woocommerce_booking_single_add_to_cart_text()

add_filter( 'woocommerce_booking_single_add_to_cart_text', 'Secretum\secretum_woocommerce_booking_single_add_to_cart_text' );


/**
 * Modify Checkout Page Pay Now Button
 *
 * @since 1.0.0
 *
 * @param string $order_button_text Old Text.
 */
function secretum_woocommerce_order_button_text( $order_button_text ) {
	return __( 'Pay Now To Secure Your Booking! ', 'secretum' );

}//end secretum_woocommerce_order_button_text()

add_filter( 'woocommerce_order_button_text', 'Secretum\secretum_woocommerce_order_button_text' );


/**
 * Modify Add To Cart Message
 *
 * @since 1.0.0
 */
function secretum_wc_add_to_cart_message_html() {
	return sprintf(
		'<a href="%s" class="button wc-forwards">%s</a> %s',
		esc_url( wc_get_page_permalink( 'checkout' ) ),
		__( 'Checkout To Secure Booking! ', 'secretum' ),
		__( 'Booking successfully added to your cart.', 'secretum' )
	);

}

add_filter( 'wc_add_to_cart_message_html', 'Secretum\secretum_wc_add_to_cart_message_html' );


/**
 * Modify Person( s ) to Players( s ) on Cart & Checkout
 *
 * @since 1.0.0
 *
 * @param array $labels Labels array.
 */
function secretum_woocommerce_get_item_data( $labels ) {
	if ( isset( $labels[2]['name'] ) && 'Persons' === $labels[2]['name'] ) {
		$labels[2]['name'] = __( 'Player( s )', 'secretum' );
	}

	return $labels;

}//end secretum_woocommerce_get_item_data()

add_filter( 'woocommerce_get_item_data', 'Secretum\secretum_woocommerce_get_item_data' );


/**
 * Update Return Text
 *
 * @since 1.0.0
 *
 * @param string $translated_text Marker.
 * @param string $text Text to translate.
 * @param string $domain Text domain.
 */
function secretum_get_store_text( $translated_text, $text, $domain ) {
	switch ( $translated_text ) {
		case 'Return to shop':
			$translated_text = __( 'Return to Store', 'secretum' );
			break;
	}

	return $translated_text;

}//end secretum_get_store_text()

add_filter( 'gettext', 'Secretum\secretum_get_store_text', 20, 3 );
