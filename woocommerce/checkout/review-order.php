<?php
/**
 * Review order table
 *
 * @package    WooCommerce
 * @subpackage Secretum
 * @author     SecretumTheme <author@secretumtheme.com>
 * @copyright  2018-2019 Secretum
 * @version    3.8.0
 * @license    https://github.com/SecretumTheme/secretum/blob/master/license.txt GPL-2.0
 * @link       https://github.com/SecretumTheme/secretum/blob/master/woocommerce/checkout/review-order.php
 * @since      1.0.0
 */

namespace Secretum;

if ( true !== defined( 'ABSPATH' ) ) {
	exit;
}

?>
<table class="shop_table woocommerce-checkout-review-order-table">
<thead>
	<tr>
		<th class="product-name">
			<?php
			if ( true === secretum_is_woobookings() ) {
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

	foreach ( WC()->cart->get_cart() as $secretum_cart_item_key => $secretum_cart_item ) {
		$secretum_product = apply_filters( 'woocommerce_cart_item_product', $secretum_cart_item['data'], $secretum_cart_item, $secretum_cart_item_key );

		if ( $secretum_product && $secretum_product->exists() && $secretum_cart_item['quantity'] > 0 && apply_filters( 'woocommerce_checkout_cart_item_visible', true, $secretum_cart_item, $secretum_cart_item_key ) ) {
			?>
			<tr class="<?php echo esc_attr( apply_filters( 'woocommerce_cart_item_class', 'cart_item', $secretum_cart_item, $secretum_cart_item_key ) ); ?>">
				<td class="product-name">
					<?php
					echo wp_kses_post( apply_filters( 'woocommerce_cart_item_name', $secretum_product->get_name(), $secretum_cart_item, $secretum_cart_item_key ) . '&nbsp;' );

					echo wp_kses_post( apply_filters( 'woocommerce_checkout_cart_item_quantity', ' <strong class="product-quantity">' . sprintf( '&times; %s', $secretum_cart_item['quantity'] ) . '</strong>', $secretum_cart_item, $secretum_cart_item_key ) );

					echo wp_kses_post( wc_get_formatted_cart_item_data( $secretum_cart_item ) );
					?>
				</td>
				<td class="product-total">
					<?php echo wp_kses_post( apply_filters( 'woocommerce_cart_item_subtotal', WC()->cart->get_product_subtotal( $secretum_product, $secretum_cart_item['quantity'] ), $secretum_cart_item, $secretum_cart_item_key ) ); ?>
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
	foreach ( WC()->cart->get_coupons() as $secretum_code => $secretum_coupon ) {
		?>
		<tr class="cart-discount coupon-<?php echo esc_attr( sanitize_title( $secretum_code ) ); ?>">
			<th><?php wc_cart_totals_coupon_label( $secretum_coupon ); ?></th>
			<td><?php wc_cart_totals_coupon_html( $secretum_coupon ); ?></td>
		</tr>
		<?php
	}

	if ( WC()->cart->needs_shipping() && WC()->cart->show_shipping() ) {
		do_action( 'woocommerce_review_order_before_shipping' );
		wc_cart_totals_shipping_html();
		do_action( 'woocommerce_review_order_after_shipping' );
	}

	foreach ( WC()->cart->get_fees() as $secretum_fee ) {
		?>
		<tr class="fee">
			<th><?php echo esc_html( $secretum_fee->name ); ?></th>
			<td><?php wc_cart_totals_fee_html( $secretum_fee ); ?></td>
		</tr>
		<?php
	}

	if ( wc_tax_enabled() && ! WC()->cart->display_prices_including_tax() ) {
		if ( 'itemized' === get_option( 'woocommerce_tax_total_display' ) ) {
			foreach ( WC()->cart->get_tax_totals() as $secretum_code => $secretum_tax ) {
				?>
				<tr class="tax-rate tax-rate-<?php echo esc_attr( $secretum_code ); ?>">
					<th><?php echo esc_html( $secretum_tax->label ); ?></th>
					<td><?php echo wp_kses_post( $secretum_tax->formatted_amount ); ?></td>
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
