<?php
/**
 * View Order
 *
 * @package    WooCommerce
 * @subpackage Secretum
 * @author     SecretumTheme <author@secretumtheme.com>
 * @copyright  2018-2019 Secretum
 * @version    3.0.0
 * @license    https://github.com/SecretumTheme/secretum/blob/master/license.txt GPL-2.0
 * @link       https://github.com/SecretumTheme/secretum/blob/master/woocommerce/myaccount/view-order.php
 * @since      1.0.0
 */

namespace Secretum;

if ( true !== defined( 'ABSPATH' ) ) {
	exit;
}

?>
<p class="font-weight-bold">
	<?php
	wp_kses_post(
		sprintf(
			/* Translators: Notice 1) Order Number 2) Date 3) Status */
			esc_html__( 'Order #%1$s was placed on %2$s and is currently %3$s.', 'secretum' ),
			'<mark class="order-number">' . esc_html( $order->get_order_number() ) . '</mark>',
			'<mark class="order-date">' . esc_html( wc_format_datetime( $order->get_date_created() ) ) . '</mark>',
			'<mark class="order-status">' . esc_html( wc_get_order_status_name( $order->get_status() ) ) . '</mark>'
		)
	);
	?>
</p>

<?php
if ( $order->get_customer_order_notes() ) {
	?>
	<h2><?php esc_html_e( 'Order updates', 'secretum' ); ?></h2>
	<ol class="woocommerce-OrderUpdates commentlist notes">
		<?php foreach ( $order->get_customer_order_notes() as $secretum_note ) { ?>
			<li class="woocommerce-OrderUpdate comment note">
				<div class="woocommerce-OrderUpdate-inner comment_container">
					<div class="woocommerce-OrderUpdate-text comment-text">
						<p class="woocommerce-OrderUpdate-meta meta"><?php echo esc_html( date_i18n( 'l jS \o\f F Y, h:ia', strtotime( $secretum_note->comment_date ) ) ); ?></p>
						<div class="woocommerce-OrderUpdate-description description">
							<?php echo wp_kses_post( wpautop( wptexturize( $secretum_note->comment_content ) ) ); ?>
						</div>
						<div class="clear"></div>
					</div>
					<div class="clear"></div>
				</div>
			</li>
		<?php } ?>
	</ol>
	<?php
}

do_action( 'woocommerce_view_order', $order_id );
