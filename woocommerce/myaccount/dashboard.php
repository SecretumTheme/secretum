<?php
/**
 * My Account Dashboard
 *
 * @package 	Secretum
 * @subpackage 	Theme\WooCommerce\MyAccount
 * @author 		SecretumTheme <author@secretumtheme.com>
 * @copyright 	2018-2019 Secretum
 * @version     2.6.0
 * @license 	https://github.com/SecretumTheme/secretum/blob/master/license.txt GPL-2.0
 * @link 		https://github.com/SecretumTheme/secretum/blob/master/woocommerce/myaccount/dashboard.php
 * @since 		1.0.0
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
		( true === secretum_is_woobookings() ) ? '<a href="' . esc_url( wc_get_endpoint_url( 'bookings' ) ) . '">' . esc_html__( 'bookings','secretum' ) . '</a>, ' : ''
	);
?></p>
<?php
do_action( 'woocommerce_account_dashboard' );
