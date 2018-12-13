<?php
/**
 * Order again button
 *
 * @package 	WooCommerce/Templates
 * @version 	3.5.0
 *
 * @subpackage 	Secretum
 * @version 	0.0.1
 */
?>
<p class="order-again p-3 text-center">
	<a href="<?php echo esc_url($order_again_url); ?>" class="btn btn-primary btn-lg"><?php _e('Order again', 'secretum'); ?></a>
</p>
