<?php
/**
 * Order details
 *
 * @package    WooCommerce
 * @subpackage Secretum
 * @author     SecretumTheme <author@secretumtheme.com>
 * @copyright  2018-2019 Secretum
 * @version    3.7.0
 * @license    https://github.com/SecretumTheme/secretum/blob/master/license.txt GPL-2.0
 * @link       https://github.com/SecretumTheme/secretum/blob/master/woocommerce/order/order-details.php
 * @since      1.0.0
 */

namespace Secretum;

if ( true !== defined( 'ABSPATH' ) ) {
	exit;
}

$secretum_order = wc_get_order( $order_id );
if ( ! isset( $order_id ) && $order_id !== $secretum_order ) {
	return;
}

$secretum_order_items        = $secretum_order->get_items( apply_filters( 'woocommerce_purchase_order_item_types', 'line_item' ) );
$secretum_show_purchase_note = $secretum_order->has_status(
	apply_filters(
		'woocommerce_purchase_note_order_statuses',
		[
			'completed',
			'processing',
		]
	)
);

$secretum_show_customer_details = is_user_logged_in() && $secretum_order->get_user_id() === get_current_user_id();
$secretum_downloads             = $secretum_order->get_downloadable_items();
$secretum_show_downloads        = $secretum_order->has_downloadable_item() && $secretum_order->is_download_permitted();

if ( $secretum_show_downloads ) {
	wc_get_template(
		'order/order-downloads.php',
		[
			'downloads'  => $secretum_downloads,
			'show_title' => true,
		]
	);
}
?>
<section class="woocommerce-order-details">
	<?php do_action( 'woocommerce_order_details_before_order_table', $secretum_order ); ?>

	<h2 class="woocommerce-order-details__title"><?php esc_html_e( 'Order details', 'secretum' ); ?></h2>

	<table class="woocommerce-table woocommerce-table--order-details order_details table table-bordered table-hover">
		<thead class="thead-dark">
			<tr>
				<th class="woocommerce-table__product-name product-name"><?php esc_html_e( 'Product', 'secretum' ); ?></th>
				<th class="woocommerce-table__product-table product-total"><?php esc_html_e( 'Total', 'secretum' ); ?></th>
			</tr>
		</thead>
		<tbody>
			<?php
			do_action( 'woocommerce_order_details_before_order_table_items', $secretum_order );

			foreach ( $secretum_order_items as $secretum_item_id => $secretum_item ) {
				$secretum_product = $secretum_item->get_product();

				wc_get_template(
					'order/order-details-item.php',
					[
						'order'              => $secretum_order,
						'item_id'            => $secretum_item_id,
						'item'               => $secretum_item,
						'show_purchase_note' => $secretum_show_purchase_note,
						'purchase_note'      => $secretum_product ? $secretum_product->get_purchase_note() : '',
						'product'            => $secretum_product,
					]
				);
			}

			do_action( 'woocommerce_order_details_after_order_table_items', $secretum_order );
			?>

		</tbody>

		<tfoot>
			<?php
			foreach ( $secretum_order->get_order_item_totals() as $secretum_key => $secretum_total ) {
				?>
				<tr>
					<th scope="row"><?php echo esc_html( $secretum_total['label'] ); ?></th>
					<?php
					if ( isset( $secretum_total['value'] ) ) {
						echo wp_kses_post( '<td>' . $secretum_total['value'] . '</td>' );
					}
					?>
				</tr>
				<?php
			}
			if ( $secretum_order->get_customer_note() ) {
				?>
				<tr>
					<th><?php esc_html_e( 'Note:', 'secretum' ); ?></th>
					<td><?php echo wp_kses_post( nl2br( wptexturize( $secretum_order->get_customer_note() ) ) ); ?></td>
				</tr>
				<?php
			}
			?>
		</tfoot>
	</table>

	<?php do_action( 'woocommerce_order_details_after_order_table', $secretum_order ); ?>
</section>

<?php
if ( $secretum_show_customer_details ) {
	wc_get_template(
		'order/order-details-customer.php',
		[
			'order' => $secretum_order,
		]
	);
}
