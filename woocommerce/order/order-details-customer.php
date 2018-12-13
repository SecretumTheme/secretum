<?php
/**
 * Order Customer Details
 *
 * @package 	WooCommerce/Templates
 * @version 	3.4.4
 *
 * @subpackage 	Secretum
 * @version 	0.0.1
 */

$show_shipping = ! wc_ship_to_billing_address_only() && $order->needs_shipping_address();
?>

<hr />

<section class="woocommerce-customer-details">

<?php if ($show_shipping) { ?>

	<section class="woocommerce-columns woocommerce-columns--2 woocommerce-columns--addresses col2-set addresses">

		<div class="woocommerce-column woocommerce-column--1 woocommerce-column--billing-address col-1">

<?php } ?>

	<h2 class="woocommerce-column__title"><?php _e('Billing address', 'secretum'); ?></h2>

	<address>

		<?php echo wp_kses_post($order->get_formatted_billing_address(__('N/A', 'secretum'))); ?>

		<?php if ($order->get_billing_phone()) { ?>

			<p class="woocommerce-customer-details--phone"><?php echo esc_html($order->get_billing_phone()); ?></p>

		<?php } ?>

		<?php if ($order->get_billing_email()) { ?>

			<p class="woocommerce-customer-details--email"><?php echo esc_html($order->get_billing_email()); ?></p>

		<?php } ?>

	</address>

<?php if ($show_shipping) { ?>

		</div><!-- .col-1 -->

		<div class="woocommerce-column woocommerce-column--2 woocommerce-column--shipping-address col-2">

			<h2 class="woocommerce-column__title"><?php _e('Shipping address', 'secretum'); ?></h2>

			<address>

				<?php echo wp_kses_post($order->get_formatted_shipping_address(__('N/A', 'secretum'))); ?>

			</address>

		</div><!-- .col-2 -->

	</section><!-- .col2-set -->

<?php } ?>

<?php do_action( 'woocommerce_order_details_after_customer_details', $order ); ?>

</section>
