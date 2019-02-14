<?php
/**
 * Checkout login form
 *
 * @package 	Secretum
 * @subpackage 	Theme\WooCommerce\Checkout
 * @author 		SecretumTheme <author@secretumtheme.com>
 * @copyright 	2018-2019 Secretum
 * @version 	3.4.0
 * @license 	https://github.com/SecretumTheme/secretum/blob/master/license.txt GPL-2.0
 * @link 		https://github.com/SecretumTheme/secretum/blob/master/woocommerce/checkout/form-login.php
 * @since 		1.0.0
 */

namespace Secretum;


if ( true === is_user_logged_in() || 'no' === get_option( 'woocommerce_enable_checkout_login_reminder' ) ) { return; }
?>

<div class="woocommerce-form-login-toggle">
	<?php wc_print_notice( apply_filters( 'woocommerce_checkout_login_message', __( 'Returning customer?', 'secretum' ) ) . ' <a href="#" class="showlogin">' . __( 'Click here to login', 'secretum' ) . '</a>', 'notice' ); ?>
</div>

<?php
if ( true === secretum_is_woobookings() ) {
	// WooCommerce Bookings.
	woocommerce_login_form(
		array(
			'message'  => __( 'If you have booked with us before, please enter your login details below. If you are a new customer, please proceed to the Billing &amp; Shipping section.', 'secretum' ),
			'redirect' => wc_get_page_permalink( 'checkout' ),
			'hidden'   => true,
		 )
	);
} else {
	// WooCommerce Default.
	woocommerce_login_form(
		array(
			'message'  => __( 'If you have shopped with us before, please enter your login details below. If you are a new customer, please proceed to the Billing &amp; Shipping section.', 'secretum' ),
			'redirect' => wc_get_page_permalink( 'checkout' ),
			'hidden'   => true,
		 )
	);
}
