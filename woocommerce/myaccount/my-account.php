<?php
/**
 * My Account page
 *
 * @package 	WooCommerce/Templates
 * @version 	3.5.0
 *
 * @subpackage 	Secretum/WooCommerce
 * @version 	0.0.1
 */
if (! defined('ABSPATH')) { exit; }

wc_print_notices(); ?>

<div class="row">

	<?php do_action('woocommerce_account_navigation'); ?>

	<div class="woocommerce-MyAccount-content col-sm-9">

		<?php do_action('woocommerce_account_content'); ?>

	</div>

</div>
