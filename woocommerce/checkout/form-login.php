<?php
/**
 * Checkout login form
 *
 * @package    WooCommerce
 * @subpackage Secretum
 * @author     SecretumTheme <author@secretumtheme.com>
 * @copyright  2018-2019 Secretum
 * @version    3.8.0
 * @license    https://github.com/SecretumTheme/secretum/blob/master/license.txt GPL-2.0
 * @link       https://github.com/SecretumTheme/secretum/blob/master/woocommerce/checkout/form-login.php
 * @since      1.0.0
 */

namespace Secretum;

if ( true !== defined( 'ABSPATH' ) ) {
	exit;
}

if ( true === is_user_logged_in() || 'no' === get_option( 'woocommerce_enable_checkout_login_reminder' ) ) {
	return;
}
?>

<div class="woocommerce-form-login-toggle">
	<?php wc_print_notice( apply_filters( 'woocommerce_checkout_login_message', __( 'Returning customer?', 'secretum' ) ) . ' <a href="#" class="showlogin">' . __( 'Click here to login', 'secretum' ) . '</a>', 'notice' ); ?>
</div>

<?php
if ( true === secretum_is_woobookings() ) {
	// WooCommerce Bookings.
	$secretum_shopping_message = __( 'If you have booked with us before, please enter your login details below. If you are a new customer, please proceed to the Billing &amp; Shipping section.', 'secretum' );
} else {
	// WooCommerce Modified.
	$secretum_shopping_message = __( 'If you have shopped with us before, please enter your login details below. If you are a new customer, please proceed to the Billing &amp; Shipping section.', 'secretum' );
}

woocommerce_login_form(
	array(
		'message'  => $secretum_shopping_message,
		'redirect' => wc_get_checkout_url(),
		'hidden'   => true,
	)
);
