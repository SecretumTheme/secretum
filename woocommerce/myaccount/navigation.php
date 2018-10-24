<?php
/**
 * My Account navigation
 *
 * @package 	WooCommerce/Templates
 * @version 	2.6.0
 *
 * @subpackage 	Secretum/WooCommerce
 * @version 	0.0.1
 */
if (! defined('ABSPATH')) { exit; }

do_action('woocommerce_before_account_navigation'); ?>

<nav class="woocommerce-MyAccount-navigation col-sm">

	<ul class="list-group">

		<?php foreach(wc_get_account_menu_items() as $endpoint => $label) { ?>

			<a href="<?php echo esc_url(wc_get_account_endpoint_url($endpoint)); ?>" class="list-group-item list-group-item-action my-1"><?php echo esc_html($label); ?></a>

		<?php } ?>

	</ul>

</nav>

<?php do_action('woocommerce_after_account_navigation');
