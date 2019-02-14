<?php
/**
 * Shows customer bookings on the My Account > Bookings page
 *
 * @package 	Secretum
 * @subpackage 	Theme\WooCommerce-Bookings\MyAccount
 * @author 		SecretumTheme <author@secretumtheme.com>
 * @copyright 	2018-2019 Secretum
 * @version 	1.10.0
 * @license 	https://github.com/SecretumTheme/secretum/blob/master/license.txt GPL-2.0
 * @link 		https://github.com/SecretumTheme/secretum/blob/master/woocommerce-bookings/myaccount/bookings.php
 * @since 		1.0.0
 */

namespace Secretum;

$count = 0;

if ( ! empty( $tables ) ) {
	foreach ( $tables as $table ) { ?>
		<h2><?php echo esc_html( $table['header'] ); ?></h2>

		<div class="table-responsive-md">
		<table class="my_account_bookings table table-bordered table-hover">
			<thead class="thead-dark">
				<tr>
					<th scope="col" class="booking-id"><?php esc_html_e( 'ID', 'secretum' ); ?></th>
					<th scope="col" class="booked-product"><?php esc_html_e( 'Booked', 'secretum' ); ?></th>
					<th scope="col" class="order-number"><?php esc_html_e( 'Order', 'secretum' ); ?></th>
					<th scope="col" class="booking-start-date"><?php esc_html_e( 'Start Date', 'secretum' ); ?></th>
					<th scope="col" class="booking-end-date"><?php esc_html_e( 'End Date', 'secretum' ); ?></th>
					<th scope="col" class="booking-status"><?php esc_html_e( 'Status', 'secretum' ); ?></th>
					<th scope="col" class="booking-cancel"></th>
				</tr>
			</thead>
			<tbody>
				<?php foreach ( $table['bookings'] as $booking ) { ?>
					<?php $count++; ?>
					<tr>
						<td class="booking-id"><?php echo esc_html( $booking->get_id() ); ?></td>
						<td class="booked-product">
							<?php if ( $booking->get_product() && $booking->get_product()->is_type( 'booking' ) ) { ?>
							<a href="<?php echo esc_url( get_permalink( $booking->get_product()->get_id() ) ); ?>">
								<?php echo esc_html( $booking->get_product()->get_title() ); ?>
							</a>
							<?php } ?>
						</td>
						<td class="order-number">
							<?php if ( $booking->get_order() ) { ?>
								<a href="<?php echo esc_url( $booking->get_order()->get_view_order_url() ); ?>">
									<?php echo esc_html( $booking->get_order()->get_order_number() ); ?>
								</a>
							<?php } ?>
						</td>
						<td class="booking-start-date"><?php echo esc_html( $booking->get_start_date() ); ?></td>
						<td class="booking-end-date"><?php echo esc_html( $booking->get_end_date() ); ?></td>
						<td class="booking-status"><?php echo esc_html( wc_bookings_get_status_label( $booking->get_status() ) ); ?></td>
						<td class="booking-cancel">
							<?php if ( 'cancelled' !== $booking->get_status() && 'completed' !== $booking->get_status() && ! $booking->passed_cancel_day() ) { ?>
								<a href="<?php echo esc_url( $booking->get_cancel_url() ); ?>" class="button cancel"><?php esc_html_e( 'Cancel', 'secretum' ); ?></a>
							<?php } ?>
						</td>
					</tr>
				<?php } ?>
			</tbody>
		</table>
		</div><!-- .table-responsive -->

		<?php do_action( 'woocommerce_before_account_bookings_pagination' ); ?>

		<div class="woocommerce-pagination woocommerce-pagination--without-numbers woocommerce-Pagination">
			<?php if ( 1 !== $page ) { ?>
				<a class="woocommerce-button woocommerce-button--previous woocommerce-Button woocommerce-Button--previous button" href="<?php echo esc_url( wc_get_endpoint_url( 'bookings', $page - 1 ) ); ?>"><?php esc_html_e( 'Previous', 'secretum' ); ?></a>
			<?php } ?>
			<?php if ( $count >= $bookings_per_page ) { ?>
				<a class="woocommerce-button woocommerce-button--next woocommerce-Button woocommerce-Button--next button" href="<?php echo esc_url( wc_get_endpoint_url( 'bookings', $page + 1 ) ); ?>"><?php esc_html_e( 'Next', 'secretum' ); ?></a>
			<?php } ?>
		</div>

		<?php do_action( 'woocommerce_after_account_bookings_pagination' ); ?>

	<?php
	}// End foreach().
} else { ?>
	<div class="woocommerce-Message woocommerce-Message--info woocommerce-info p-3">
		<a class="woocommerce-Button btn btn-primary btn-lg" href="<?php echo esc_url( apply_filters( 'woocommerce_return_to_shop_redirect', wc_get_page_permalink( 'shop' ) ) ); ?>">
			<?php esc_html_e( 'Go Shop', 'secretum' ); ?>
		</a>

		<?php esc_html_e( 'No bookings available yet.', 'secretum' ); ?>
	</div>
<?php
}// End if().
