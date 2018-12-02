<?php
/**
 * Empty cart page
 *
 * @package 	WooCommerce/Templates
 * @version 	3.5.0
 *
 * @subpackage 	Secretum/WooCommerce
 * @version     0.0.1
 */
if (! defined('ABSPATH')) { exit; }

// WooCommerce Bookings
if (class_exists('WC_Bookings')) {
?>

	<p class="cart-empty text-center">

		<?php echo wp_kses_post(apply_filters('secretum_cart_is_empty_text', __('You currently have no temporarily reserved bookings in your cart.', 'secretum'), 10, 1));?>

	</p>

	<?php if (wc_get_page_id('shop') > 0) { ?>

		<p class="return-to-shop text-center">

			<a class="button wc-backward" href="<?php echo esc_url(apply_filters('woocommerce_return_to_shop_redirect', wc_get_page_permalink('shop'))); ?>">

				<?php echo wp_kses_post(apply_filters('secretum_return_to_shop_text', __('View Our Escape Rooms', 'secretum'), 10, 1)); ?>

			</a>

		</p>

	<?php }

// WooCommerce Default
} else { ?>

	<p class="cart-empty text-center">

		<?php echo wp_kses_post(apply_filters('secretum_cart_is_empty_text', __('Your cart is currently empty.', 'secretum'), 10, 1));?>

	</p>

	<?php if (wc_get_page_id('shop') > 0) { ?>

		<p class="return-to-shop text-center">

			<a class="button wc-backward" href="<?php echo esc_url(apply_filters('woocommerce_return_to_shop_redirect', wc_get_page_permalink('shop'))); ?>">

				<?php echo wp_kses_post(apply_filters('secretum_return_to_shop_text', __('Return to shop', 'secretum'), 10, 1)); ?>

			</a>

		</p>

	<?php }

}
