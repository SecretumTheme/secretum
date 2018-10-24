<?php
/**
 * Booking product add to cart.
 *
 * @package 	WooCommerce-Bookings/Templates
 * @version 	1.10.0
 *
 * @subpackage 	Secretum/WooCommerce
 * @version     0.0.1
 */
if (! defined('ABSPATH')) { exit; }

global $product;

if (! $product->is_purchasable()) { return; }

$nonce = wp_create_nonce('find-booked-day-blocks');

do_action('woocommerce_before_add_to_cart_form');
?>

<noscript><?php _e('Your browser must support JavaScript in order to make a booking.', 'secretum'); ?></noscript>

<form class="cart" method="post" enctype='multipart/form-data'data-nonce="<?php echo esc_attr($nonce); ?>">

	<div class="form-group">

		<div id="wc-bookings-booking-form" class="wc-bookings-booking-form" style="display:none">

			<h3 class="widget-title"><?php echo apply_filters('secretum_text', 'booking_cart_title'); ?></h3>

			<?php do_action('woocommerce_before_booking_form'); ?>

			<?php $booking_form->output(); ?>

			<div class="wc-bookings-booking-cost" style="display:none"></div>

		</div>

		<?php do_action('woocommerce_before_add_to_cart_button'); ?>

		<input type="hidden" name="add-to-cart" value="<?php echo esc_attr(is_callable(array($product, 'get_id')) ? $product->get_id() : $product->id); ?>" class="wc-booking-product-id" />

		<button type="submit" class="wc-bookings-booking-form-button single_add_to_cart_button button alt disabled" style="display:none"><?php echo $product->single_add_to_cart_text(); ?></button>

		<?php do_action('woocommerce_after_add_to_cart_button'); ?>

	</div><!-- .form-group -->

</form>

<?php do_action('woocommerce_after_add_to_cart_form');
