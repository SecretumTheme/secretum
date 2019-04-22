<?php
/**
 * Order Customer Details
 *
 * @package    WooCommerce
 * @subpackage Secretum
 * @author     SecretumTheme <author@secretumtheme.com>
 * @copyright  2018-2019 Secretum
 * @version    3.4.4
 * @license    https://github.com/SecretumTheme/secretum/blob/master/license.txt GPL-2.0
 * @link       https://github.com/SecretumTheme/secretum/blob/master/woocommerce/order/order-details-customer.php
 * @since      1.0.0
 */

namespace Secretum;

if ( true !== defined( 'ABSPATH' ) ) {
	exit;
}

$secretum_show_shipping = ! wc_ship_to_billing_address_only() && $order->needs_shipping_address();
?>

<hr />

<section class="woocommerce-customer-details">
<?php if ( $secretum_show_shipping ) { ?>
	<section class="woocommerce-columns woocommerce-columns--2 woocommerce-columns--addresses col2-set addresses">
		<div class="woocommerce-column woocommerce-column--1 woocommerce-column--billing-address col-1">
<?php } ?>

	<h2 class="woocommerce-column__title"><?php esc_html_e( 'Billing address', 'secretum' ); ?></h2>

	<address>
		<?php echo wp_kses_post( $order->get_formatted_billing_address( __( 'N/A', 'secretum' ) ) ); ?>
		<?php if ( $order->get_billing_phone() ) { ?>
			<p class="woocommerce-customer-details--phone"><?php echo esc_html( $order->get_billing_phone() ); ?></p>
		<?php } ?>

		<?php if ( $order->get_billing_email() ) { ?>
			<p class="woocommerce-customer-details--email"><?php echo esc_html( $order->get_billing_email() ); ?></p>
		<?php } ?>
	</address>

<?php if ( $secretum_show_shipping ) { ?>
		</div><!-- .col-1 -->

		<div class="woocommerce-column woocommerce-column--2 woocommerce-column--shipping-address col-2">
			<h2 class="woocommerce-column__title"><?php esc_html_e( 'Shipping address', 'secretum' ); ?></h2>
			<address>
				<?php echo wp_kses_post( $order->get_formatted_shipping_address( __( 'N/A', 'secretum' ) ) ); ?>
			</address>
		</div><!-- .col-2 -->
	</section><!-- .col2-set -->
	<?php
}

do_action( 'woocommerce_order_details_after_customer_details', $order );
?>

</section>
