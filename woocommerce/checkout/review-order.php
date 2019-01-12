<?php
/**
 * Review order table
 *
 * @package 	WooCommerce/Templates
 * @version     3.3.0
 * @subpackage 	Secretum
 */

namespace Secretum;

?>
<table class="shop_table woocommerce-checkout-review-order-table">
<thead>
	<tr>
		<th class="product-name">
			<?php
			if ( class_exists( 'WC_Bookings' ) ) {
				echo esc_html_e( 'Booking', 'secretum' );
			} else {
				echo esc_html_e( 'Product', 'secretum' );
			}
			?>

		</th>
		<th class="product-total"><?php esc_html_e( 'Total', 'secretum' ); ?></th>
	</tr>
</thead>
<tbody>
	<?php
	do_action( 'woocommerce_review_order_before_cart_contents' );

	foreach ( WC()->cart->get_cart() as $cart_item_key => $cart_item ) {
		$_product = apply_filters( 'woocommerce_cart_item_product', $cart_item['data'], $cart_item, $cart_item_key );

		if ( $_product && $_product->exists() && $cart_item['quantity'] > 0 && apply_filters( 'woocommerce_checkout_cart_item_visible', true, $cart_item, $cart_item_key ) ) {
			?>
			<tr class="<?php echo esc_attr( apply_filters( 'woocommerce_cart_item_class', 'cart_item', $cart_item, $cart_item_key ) ); ?>">
				<td class="product-name">
					<?php
					// @codingStandardsIgnoreLine
					echo apply_filters( 'woocommerce_cart_item_name', $_product->get_name(), $cart_item, $cart_item_key ) . '&nbsp;';

					// @codingStandardsIgnoreLine
					echo apply_filters( 'woocommerce_checkout_cart_item_quantity', ' <strong class="product-quantity">' . sprintf( '&times; %s', $cart_item['quantity'] ) . '</strong>', $cart_item, $cart_item_key );

					echo wc_get_formatted_cart_item_data( $cart_item ); // PHPCS: XSS ok.
					?>
				</td>
				<td class="product-total">
					<?php
					// @codingStandardsIgnoreLine
					echo apply_filters( 'woocommerce_cart_item_subtotal', WC()->cart->get_product_subtotal( $_product, $cart_item['quantity'] ), $cart_item, $cart_item_key );
					?>
				</td>
			</tr>
			<?php
		}
	}

	do_action( 'woocommerce_review_order_after_cart_contents' );
	?>
</tbody>
<tfoot>
	<tr class="cart-subtotal">
		<th><?php esc_html_e( 'Subtotal', 'secretum' ); ?></th>
		<td><?php wc_cart_totals_subtotal_html(); ?></td>
	</tr>
	<?php
	foreach ( WC()->cart->get_coupons() as $code => $coupon ) { ?>
		<tr class="cart-discount coupon-<?php echo esc_attr( sanitize_title( $code ) ); ?>">
			<th><?php wc_cart_totals_coupon_label( $coupon ); ?></th>
			<td><?php wc_cart_totals_coupon_html( $coupon ); ?></td>
		</tr>
	<?php
	}

	if ( WC()->cart->needs_shipping() && WC()->cart->show_shipping() ) {
		do_action( 'woocommerce_review_order_before_shipping' );
		wc_cart_totals_shipping_html();
		do_action( 'woocommerce_review_order_after_shipping' );
	}

	foreach ( WC()->cart->get_fees() as $fee ) {
	?>
		<tr class="fee">
			<th><?php echo esc_html( $fee->name ); ?></th>
			<td><?php wc_cart_totals_fee_html( $fee ); ?></td>
		</tr>
	<?php
	}

	if ( wc_tax_enabled() && ! WC()->cart->display_prices_including_tax() ) {
		if ( 'itemized' === get_option( 'woocommerce_tax_total_display' ) ) {
			foreach ( WC()->cart->get_tax_totals() as $code => $tax ) {
			?>
				<tr class="tax-rate tax-rate-<?php echo esc_html( sanitize_title( $code ) ); ?>">
					<th><?php echo esc_html( $tax->label ); ?></th>
					<td><?php echo wp_kses_post( $tax->formatted_amount ); ?></td>
				</tr>
			<?php
			}
		} else {
		?>
			<tr class="tax-total">
				<th><?php echo esc_html( WC()->countries->tax_or_vat() ); ?></th>
				<td><?php wc_cart_totals_taxes_total_html(); ?></td>
			</tr>
		<?php
		}
	}

	do_action( 'woocommerce_review_order_before_order_total' );
	?>
	<tr class="order-total">
		<th><?php esc_html_e( 'Total', 'secretum' ); ?></th>
		<td><?php wc_cart_totals_order_total_html(); ?></td>
	</tr>
	<?php do_action( 'woocommerce_review_order_after_order_total' ); ?>
</tfoot>
</table>
