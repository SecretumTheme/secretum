<?php
/**
 * Checkout Form
 *
 * @package 	WooCommerce/Templates
 * @version     2.3.0
 *
 * @subpackage 	Secretum/WooCommerce
 * @version     0.0.1
 */
if (! defined('ABSPATH')) { exit; }

wc_print_notices();
?>

<?php do_action('woocommerce_before_checkout_form', $checkout); ?>

<?php
if (! $checkout->is_registration_enabled() && $checkout->is_registration_required() && ! is_user_logged_in()) {

		echo apply_filters('secretum_logged_in_to_checkout_text', __('You must be logged in to checkout.', 'secretum'));

		return;
	}
?>

<form name="checkout" method="post" class="checkout woocommerce-checkout" action="<?php echo esc_url(wc_get_checkout_url()); ?>" enctype="multipart/form-data">

	<?php if ($checkout->get_checkout_fields()) { ?>

		<?php do_action('woocommerce_checkout_before_customer_details'); ?>

		<div class="row" id="customer_details">

			<div class="col-md">

				<?php do_action('woocommerce_checkout_billing'); ?>

				<hr />

				<?php do_action('woocommerce_checkout_shipping'); ?>

			</div>

			<div class="col-md border">

				<h3 id="order_review_heading">

					<?php if (class_exists('WC_Bookings')) { ?>

						<?php echo apply_filters('secretum_your_order_text', '<i class="fa fa-angle-down"></i> ' . __('Your Booking', 'secretum')); ?>

					<?php } else { ?>

						<?php echo apply_filters('secretum_your_order_text', '<i class="fa fa-angle-down"></i> ' . __('Your Order', 'secretum')); ?>

					<?php } ?>

				</h3>

				<?php do_action('woocommerce_checkout_before_order_review'); ?>

				<div id="order_review" class="woocommerce-checkout-review-order">

					<?php do_action('woocommerce_checkout_order_review'); ?>

				</div>

				<?php do_action('woocommerce_checkout_after_order_review'); ?>

			</div>

		</div>

		<?php do_action('woocommerce_checkout_after_customer_details'); ?>

	<?php } ?>

</form>

<?php do_action('woocommerce_after_checkout_form', $checkout);
