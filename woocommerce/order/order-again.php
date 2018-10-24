<?php
/**
 * Order again button
 *
 * @package 	WooCommerce/Templates
 * @version 	2.3.0
 *
 * @subpackage 	Secretum/WooCommerce
 * @version 	0.0.1
 */
if (! defined('ABSPATH')) { exit; } ?>

<p class="order-again p-3 text-center">

	<a href="<?php echo esc_url(wp_nonce_url(add_query_arg('order_again', $order->get_id()) , 'woocommerce-order_again')); ?>" class="btn btn-primary btn-lg"><?php _e('Order again', 'secretum'); ?></a>

</p>
