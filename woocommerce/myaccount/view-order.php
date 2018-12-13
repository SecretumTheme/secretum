<?php
/**
 * View Order
 *
 * @package 	WooCommerce/Templates
 * @version 	3.0.0
 *
 * @subpackage 	Secretum
 * @version 	0.0.1
 */
?>
<p class="font-weight-bold">

<?php
	printf(
		__('Order #%1$s was placed on %2$s and is currently %3$s.', 'secretum'),
		'<mark class="order-number">' . $order->get_order_number() . '</mark>',
		'<mark class="order-date">' . wc_format_datetime($order->get_date_created()) . '</mark>',
		'<mark class="order-status">' . wc_get_order_status_name($order->get_status()) . '</mark>'
	);
?>

</p>

<?php if ($notes = $order->get_customer_order_notes()) { ?>

	<h2><?php _e('Order updates', 'secretum'); ?></h2>

	<ol class="woocommerce-OrderUpdates commentlist notes">

		<?php foreach ($notes as $note) { ?>

			<li class="woocommerce-OrderUpdate comment note">

				<div class="woocommerce-OrderUpdate-inner comment_container">

					<div class="woocommerce-OrderUpdate-text comment-text">

						<p class="woocommerce-OrderUpdate-meta meta"><?php echo date_i18n(__('l jS \o\f F Y, h:ia', 'secretum'), strtotime($note->comment_date)); ?></p>

						<div class="woocommerce-OrderUpdate-description description">

							<?php echo wpautop(wptexturize($note->comment_content)); ?>

						</div>

		  				<div class="clear"></div>

		  			</div>

					<div class="clear"></div>

				</div>

			</li>

		<?php } ?>

	</ol>

<?php } ?>

<?php do_action('woocommerce_view_order', $order_id);
