<?php
/**
 * Shows orders on the account page.
 *
 * @package    WooCommerce
 * @subpackage Secretum
 * @author     SecretumTheme <author@secretumtheme.com>
 * @copyright  2018-2019 Secretum
 * @version    3.7.0
 * @license    https://github.com/SecretumTheme/secretum/blob/master/license.txt GPL-2.0
 * @link       https://github.com/SecretumTheme/secretum/blob/master/woocommerce/myaccount/orders.php
 * @since      1.0.0
 */

namespace Secretum;

if ( true !== defined( 'ABSPATH' ) ) {
	exit;
}

do_action( 'woocommerce_before_account_orders', $has_orders );

if ( $has_orders ) {
	?>
<div class="table-responsive-md">
	<table class="woocommerce-orders-table woocommerce-MyAccount-orders shop_table_responsive my_account_orders account-orders-table table table-bordered table-hover">
		<thead class="thead-dark">
			<tr>
				<?php foreach ( wc_get_account_orders_columns() as $secretum_column_id => $secretum_column_name ) { ?>
					<th class="woocommerce-orders-table__header woocommerce-orders-table__header-<?php echo esc_attr( $secretum_column_id ); ?>"><span class="nobr"><?php echo esc_html( $secretum_column_name ); ?></span></th>
				<?php } ?>
			</tr>
		</thead>
		<tbody>
			<?php
			foreach ( $customer_orders->orders as $secretum_customer_order ) {
				$secretum_order      = wc_get_order( $secretum_customer_order );
				$secretum_item_count = $secretum_order->get_item_count();
				?>
				<tr class="woocommerce-orders-table__row woocommerce-orders-table__row--status-<?php echo esc_attr( $secretum_order->get_status() ); ?> order">
					<?php
					foreach ( wc_get_account_orders_columns() as $secretum_column_id => $secretum_column_name ) {
						?>
						<td class="woocommerce-orders-table__cell woocommerce-orders-table__cell-<?php echo esc_attr( $secretum_column_id ); ?> align-middle" data-title="<?php echo esc_attr( $secretum_column_name ); ?>">
							<?php
							if ( has_action( 'woocommerce_my_account_my_orders_column_' . $secretum_column_id ) ) {
								do_action( 'woocommerce_my_account_my_orders_column_' . $secretum_column_id, $secretum_order );
							} elseif ( 'order-number' === $secretum_column_id ) {
								?>
								<a href="<?php echo esc_url( $secretum_order->get_view_order_url() ); ?>">
									<?php echo esc_html_x( '#', 'hash before order number', 'secretum' ) . absint( $secretum_order->get_order_number() ); ?>
								</a>
								<?php
							} elseif ( 'order-date' === $secretum_column_id ) {
								?>
								<time datetime="<?php echo esc_attr( $secretum_order->get_date_created()->date( 'c' ) ); ?>"><?php echo esc_html( wc_format_datetime( $secretum_order->get_date_created() ) ); ?></time>
								<?php
							} elseif ( 'order-status' === $secretum_column_id ) {
								echo esc_html( wc_get_order_status_name( $secretum_order->get_status() ) );
							} elseif ( 'order-total' === $secretum_column_id ) {
								/* Translators: 1) $secretum_value 2) number*/
								printf( wp_kses_post( _n( '%1$s for %2$s item', '%1$s for %2$s items', $secretum_item_count, 'secretum' ) ), wp_kses_post( $secretum_order->get_formatted_order_total() ), absint( $secretum_item_count ) );
							} elseif ( 'order-actions' === $secretum_column_id ) {
								$secretum_actions = wc_get_account_orders_actions( $secretum_order );
								?>

							<div class="text-center">
								<?php
								if ( ! empty( $secretum_actions ) ) {
									foreach ( $secretum_actions as $secretum_key => $secretum_value ) {
										echo '<a href="' . esc_url( $secretum_value['url'] ) . '" class="woocommerce-button btn btn-secondary ' . sanitize_html_class( $secretum_key ) . '">' . esc_html( $secretum_value['name'] ) . '</a>';
									}
								}
								?>
							</div>
							<?php } ?>
						</td>
						<?php
					}
					?>
				</tr>
				<?php
			}
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

			<?php if ( intval( $secretum_customer_orders->max_num_pages ) !== $current_page ) { ?>
				<a class="woocommerce-button woocommerce-button--next woocommerce-Button woocommerce-Button--next button" href="<?php echo esc_url( wc_get_endpoint_url( 'orders', $current_page + 1 ) ); ?>"><?php esc_html_e( 'Next', 'secretum' ); ?></a>
			<?php } ?>
		</div>
	<?php } ?>
<?php } else { ?>
	<div class="woocommerce-message woocommerce-message--info woocommerce-Message woocommerce-Message--info woocommerce-info p-3">
		<a class="woocommerce-Button btn btn-primary btn-lg" href="<?php echo esc_url( apply_filters( 'woocommerce_return_to_shop_redirect', wc_get_page_permalink( 'shop' ) ) ); ?>">
			<?php esc_html_e( 'Go shop', 'secretum' ); ?>
		</a>

		<?php esc_html_e( 'No order has been made yet.', 'secretum' ); ?>
	</div>

	<?php
}

do_action( 'woocommerce_after_account_orders', $has_orders );
