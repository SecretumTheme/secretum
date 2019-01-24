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
 */

namespace Secretum;

/**
 * Update Booking Expires Time For WooCommerce Bookings In Minutes
 *
 * @param int $minutes Expire time in minutes.
 * @return int New time
 *
 * @link https://docs.woocommerce.com/document/bookings-snippets/
 */
add_filter( 'woocommerce_bookings_remove_inactive_cart_time', function( $minutes ) {
	return 20;
} );


/**
 * Update Booking Field Order On Add-To-Cart
 *
 * @param array $fields Current booking fields.
 * @return array $new_order Updated booking field order
 *
 * @link https://docs.woocommerce.com/document/bookings-snippets/
 */
add_filter( 'booking_form_fields', function( $fields ) {
	$new_order = array();

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
} );


/**
 * Inject sold-out tag on future sold-out times
 *
 * @param string  $block_html Current display times.
 * @param array   $available_blocks Full and partial blocks.
 * @param string  $blocks All future blocks.
 * @return string $block_html Updated times with sold-out injected.
 */
add_filter( 'wc_bookings_get_time_slots_html', function( $block_html, $available_blocks, $blocks ) {
	$booked_blocks  = '';

	// Build booking array from all blocks.
	foreach ( $blocks as $key => $id ) {
		if ( ! array_key_exists( $id, $available_blocks ) ) {
			$booked_blocks[ $id ] = array(
				'booked'	=> 1,
				'available' => 0,
				'resources' => array(
					'0'	 => 1,
				),
			);
		}
	}

	// Maybe Build New Available Blocks.
	$new_available_blocks = ( ! empty( $booked_blocks ) ) ? $booked_blocks + $available_blocks : '';

	// Put Available Blocks In Proper Order.
	if ( ! empty( $new_available_blocks ) ) {
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
			$block_html .= '<li class="block"><a href="#" class="sold-out">' . __( 'booked','secretum' ) . '</a></li>';
		}

		// Original Block HTML.
		if ( $quantity['available'] > 0 ) {
			if ( $quantity['booked'] ) {
				/* translators: 1: quantity available */
				$block_html .= '<li class="block" data-block="' . esc_attr( date( 'Hi', $block ) ) . '"><a href="#" data-value="' . date( 'G:i', $block ) . '">' . date_i18n( get_option( 'time_format' ), $block ) . ' <small class="booking-spaces-left">( ' . sprintf( __( '%d Remain', 'secretum' ), $quantity['available'] ) . ' )</small></a></li>';
			} else {
				$block_html .= '<li class="block" data-block="' . esc_attr( date( 'Hi', $block ) ) . '"><a href="#" data-value="' . date( 'G:i', $block ) . '">' . date_i18n( get_option( 'time_format' ), $block ) . '</a></li>';
			}
		}
	}

	return $block_html;
}, 10, 3 );


/**
 * Update Woo Cart Session Expires Times In Seconds ( 1200s = 20m )
 *
 * @link https://docs.woocommerce.com/wc-apidocs/source-class-WC_Session_Handler.html
 *
 * @param int $seconds Time in Seconds.
 */
add_filter( 'wc_session_expiring', function( $seconds ) {
	return 1200;
} );


/**
 * Update Woo Cart Session Expires Times In Seconds ( 1200s = 20m )
 *
 * @link https://docs.woocommerce.com/wc-apidocs/source-class-WC_Session_Handler.html
 *
 * @param int $seconds Time in Seconds.
 */
add_filter( 'wc_session_expiration' , function( $seconds ) {
	return 1200;
} );


/**
 * Update Book Now Button
 *
 * @link https://docs.woocommerce.com/document/bookings-snippets/
 */
add_filter( 'woocommerce_booking_single_add_to_cart_text', function() {
	return __( 'Continue', 'secretum' ) . ' <i class="fa fa-long-arrow-right" aria-hidden="true"></i>';
} );


/**
 * Modify Checkout Page Pay Now Button
 *
 * @param string $order_button_text Old Text.
 */
add_filter( 'woocommerce_order_button_text', function( $order_button_text ) {
	return __( 'Pay Now To Secure Your Booking! ', 'secretum' );
} );


/**
 * Modify Add To Cart Message
 */
add_filter( 'wc_add_to_cart_message_html', '__return_null' );


/**
 * Modify Add To Cart Message
 */
add_filter( 'wc_add_to_cart_message_html', function() {
	return sprintf(
		'<a href="%s" class="button wc-forwards">%s</a> %s',
		esc_url( wc_get_page_permalink( 'checkout' ) ),
		__( 'Checkout To Secure Booking! ', 'secretum' ),
		__( 'Booking successfully added to your cart.', 'secretum' )
	);
} );


/**
 * Modify Person( s ) to Players( s ) on Cart & Checkout
 *
 * @param array $labels Labels array.
 */
add_filter( 'woocommerce_get_item_data', function( $labels ) {
	if ( isset( $labels[2]['name'] ) && 'Persons' === $labels[2]['name'] ) {
		$labels[2]['name'] = __( 'Player( s )', 'secretum' );
	}

	return $labels;
} );


/**
 * Update Return Text
 *
 * @param string $translated_text Marker.
 * @param string $text Text to translate.
 * @param string $domain Text domain.
 */
add_filter( 'gettext', function( $translated_text, $text, $domain ) {
	switch ( $translated_text ) {
		case 'Return to shop' :
			$translated_text = __( 'Return to Store', 'secretum' );
		break;
	}

	return $translated_text;
}, 20, 3 );
