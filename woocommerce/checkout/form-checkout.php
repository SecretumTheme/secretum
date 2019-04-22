<?php
/**
 * Checkout Form
 *
 * @package    WooCommerce
 * @subpackage Secretum
 * @author     SecretumTheme <author@secretumtheme.com>
 * @copyright  2018-2019 Secretum
 * @version    3.5.0
 * @license    https://github.com/SecretumTheme/secretum/blob/master/license.txt GPL-2.0
 * @link       https://github.com/SecretumTheme/secretum/blob/master/woocommerce/checkout/form-checkout.php
 * @since      1.0.0
 */

namespace Secretum;

if ( true !== defined( 'ABSPATH' ) ) {
	exit;
}

wc_print_notices();

do_action( 'woocommerce_before_checkout_form', $checkout );

if ( ! $checkout->is_registration_enabled() && $checkout->is_registration_required() && ! is_user_logged_in() ) {
	echo esc_html( apply_filters( 'secretum_logged_in_to_checkout_text', __( 'You must be logged in to checkout.', 'secretum' ) ) );
	return;
}
?>
<form name="checkout" method="post" class="checkout woocommerce-checkout" action="<?php echo esc_url( wc_get_checkout_url() ); ?>" enctype="multipart/form-data">
	<?php if ( $checkout->get_checkout_fields() ) { ?>
		<?php do_action( 'woocommerce_checkout_before_customer_details' ); ?>
		<div class="row" id="customer_details">
			<div class="col-md">
				<?php do_action( 'woocommerce_checkout_billing' ); ?>
				<hr />
				<?php do_action( 'woocommerce_checkout_shipping' ); ?>
			</div>

			<div class="col-md border">
				<h3 id="order_review_heading">
					<?php
					$secretum_checkout_lock_icon = [
						'fi' => 'lock',
						'fa' => 'fa-lock',
					];
					?>

					<?php if ( true === secretum_is_woobookings() ) { ?>
						<?php secretum_icon( $secretum_checkout_lock_icon ); ?> <?php esc_html_e( 'Your Booking', 'secretum' ); ?>
					<?php } else { ?>
						<?php secretum_icon( $secretum_checkout_lock_icon ); ?> <?php esc_html_e( 'Your Order', 'secretum' ); ?>
					<?php } ?>
				</h3>

				<?php do_action( 'woocommerce_checkout_before_order_review' ); ?>

				<div id="order_review" class="woocommerce-checkout-review-order">
					<?php do_action( 'woocommerce_checkout_order_review' ); ?>
				</div>

				<?php do_action( 'woocommerce_checkout_after_order_review' ); ?>

			</div>
		</div>

		<?php do_action( 'woocommerce_checkout_after_customer_details' ); ?>

	<?php } ?>
</form>

<?php
do_action( 'woocommerce_after_checkout_form', $checkout );
