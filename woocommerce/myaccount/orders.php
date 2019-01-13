<?php
/**
 * Shows orders on the account page.
 *
 * @package 	WooCommerce/Templates
 * @version 	3.2.0
 * @subpackage 	Secretum
 */

namespace Secretum;

do_action( 'woocommerce_before_account_orders', $has_orders );

if ( $has_orders ) {
?>
<div class="table-responsive-md">
	<table class="woocommerce-orders-table woocommerce-MyAccount-orders shop_table_responsive my_account_orders account-orders-table table table-bordered table-hover">
		<thead class="thead-dark">
			<tr>
				<?php foreach ( wc_get_account_orders_columns() as $column_id => $column_name ) { ?>
					<th class="woocommerce-orders-table__header woocommerce-orders-table__header-<?php echo esc_attr( $column_id ); ?>"><span class="nobr"><?php echo esc_html( $column_name ); ?></span></th>
				<?php } ?>
			</tr>
		</thead>
		<tbody>
			<?php
			foreach ( $customer_orders->orders as $customer_order ) {
				$order      = wc_get_order( $customer_order );
				$item_count = $order->get_item_count();
			?>
				<tr class="woocommerce-orders-table__row woocommerce-orders-table__row--status-<?php echo esc_attr( $order->get_status() ); ?> order">
					<?php
					foreach ( wc_get_account_orders_columns() as $column_id => $column_name ) {
					?>
						<td class="woocommerce-orders-table__cell woocommerce-orders-table__cell-<?php echo esc_attr( $column_id ); ?> align-middle" data-title="<?php echo esc_attr( $column_name ); ?>">
							<?php
							if ( has_action( 'woocommerce_my_account_my_orders_column_' . $column_id ) ) {
								do_action( 'woocommerce_my_account_my_orders_column_' . $column_id, $order );
							} elseif ( 'order-number' === $column_id ) { ?>
								<a href="<?php echo esc_url( $order->get_view_order_url() ); ?>">
									<?php echo esc_html_x( '#', 'hash before order number', 'secretum' ) . absint( $order->get_order_number() ); ?>
								</a>
							<?php
							} elseif ( 'order-date' === $column_id ) { ?>
								<time datetime="<?php echo esc_attr( $order->get_date_created()->date( 'c' ) ); ?>"><?php echo esc_html( wc_format_datetime( $order->get_date_created() ) ); ?></time>
							<?php
							} elseif ( 'order-status' === $column_id ) {
								echo esc_html( wc_get_order_status_name( $order->get_status() ) );
							} elseif ( 'order-total' === $column_id ) {
								/* Translators: 1) $value 2) number*/
								printf( wp_kses_post( _n( '%1$s for %2$s item', '%1$s for %2$s items', $item_count, 'secretum' ) ), wp_kses_post( $order->get_formatted_order_total() ), absint( $item_count ) );
							} elseif ( 'order-actions' === $column_id ) {
								$actions = wc_get_account_orders_actions( $order );
							?>

							<div class="text-center">
								<?php
								if ( ! empty( $actions ) ) {
									foreach ( $actions as $key => $action ) {
										echo '<a href="' . esc_url( $action['url'] ) . '" class="woocommerce-button btn btn-secondary ' . sanitize_html_class( $key ) . '">' . esc_html( $action['name'] ) . '</a>';
									}
								}
								?>
							</div>
							<?php } ?>
						</td>
					<?php
					}// End foreach().
					?>
				</tr>
			<?php
			}// End foreach().
			?>
		</tbody>
	</table>
	</div><!-- .table-responsive -->

	<?php do_action( 'woocommerce_before_account_orders_pagination' ); ?>

	<?php if ( 1 < $customer_orders->max_num_pages ) { ?>
		<div class="woocommerce-pagination woocommerce-pagination--without-numbers woocommerce-Pagination">
			<?php if ( 1 !== $current_page ) { ?>
				<a class="woocommerce-button woocommerce-button--previous woocommerce-Button woocommerce-Button--previous button" href="<?php echo esc_url( wc_get_endpoint_url( 'orders', $current_page - 1 ) ); ?>"><?php esc_html_e( 'Previous', 'secretum' ); ?></a>
			<?php } ?>

			<?php if ( intval( $customer_orders->max_num_pages ) !== $current_page ) { ?>
				<a class="woocommerce-button woocommerce-button--next woocommerce-Button woocommerce-Button--next button" href="<?php echo esc_url( wc_get_endpoint_url( 'orders', $current_page + 1 ) ); ?>"><?php esc_html_e( 'Next', 'secretum' ); ?></a>
			<?php } ?>
		</div>
	<?php } ?>
<?php } else { ?>
	<div class="woocommerce-message woocommerce-message--info woocommerce-Message woocommerce-Message--info woocommerce-info p-3">
		<a class="woocommerce-Button btn btn-primary btn-lg" href="<?php echo esc_url( apply_filters( 'woocommerce_return_to_shop_redirect', wc_get_page_permalink( 'shop' ) ) ); ?>">
			<?php esc_html_e( 'Go shop', 'secretum' ) ?>
		</a>

		<?php esc_html_e( 'No order has been made yet.', 'secretum' ); ?>
	</div>

<?php
}// End if().

do_action( 'woocommerce_after_account_orders', $has_orders );
