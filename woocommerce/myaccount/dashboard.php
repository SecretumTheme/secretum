<?php
/**
 * My Account Dashboard
 *
 * @package     WooCommerce/Templates
 * @version     2.6.0
 * @subpackage 	Secretum
 */

namespace Secretum;

?>
<p class="font-weight-bold"><?php
	/* Translators: Login hello text 1) Username 2) URL */
	printf( wp_kses_post( __( 'Hello %1$s ( not %1$s? <a href="%2$s">Log out</a> )', 'secretum' ) ),
		esc_html( $current_user->display_name ),
		esc_url( wc_logout_url( wc_get_page_permalink( 'myaccount' ) ) )
	);
?></p>
<p><?php
	/* Translators: Welcome notice 1) url 2) url 3) url 4) woo commerce bookings a href and anchor text */
	printf( wp_kses_post( __( 'From your customer dashboard you can view your recent %4$s<a href="%1$s">orders</a>, manage your <a href="%2$s">shipping and billing addresses</a>, and <a href="%3$s">edit your password and account details</a>.', 'secretum' ) ),
		esc_url( wc_get_endpoint_url( 'orders' ) ),
		esc_url( wc_get_endpoint_url( 'edit-address' ) ),
		esc_url( wc_get_endpoint_url( 'edit-account' ) ),
		( class_exists( 'WC_Bookings' ) ) ? '<a href="' . esc_url( wc_get_endpoint_url( 'bookings' ) ) . '">' . esc_html__( 'bookings','secretum' ) . '</a>, ' : ''
	);
?></p>
<?php
do_action( 'woocommerce_account_dashboard' );
