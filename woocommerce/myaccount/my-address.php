<?php
/**
 * My Addresses
 *
 * @package 	WooCommerce/Templates
 * @version     2.6.0
 *
 * @subpackage 	Secretum
 * @version     0.0.1
 */
if (! defined('ABSPATH')) { exit; }

$customer_id = get_current_user_id();

if (! wc_ship_to_billing_address_only() && wc_shipping_enabled()) {

	$get_addresses = apply_filters('woocommerce_my_account_get_addresses', array(
		'billing' 	=> __('Billing address', 'secretum'),
		'shipping' 	=> __('Shipping address', 'secretum'),
	), $customer_id);

} else {

	$get_addresses = apply_filters('woocommerce_my_account_get_addresses', array(
		'billing' 	=> __('Billing address', 'secretum'),
	), $customer_id);

}

$oldcol = 1;
$col    = 1;
?>
<p><?php echo apply_filters('woocommerce_my_account_my_address_description', __('The following addresses will be used on the checkout page by default.', 'secretum')); ?></p>

<?php if (! wc_ship_to_billing_address_only() && wc_shipping_enabled()) { ?>

	<div class="woocommerce-Addresses addresses row">

<?php } ?>

	<?php foreach ($get_addresses as $name => $title) { ?>

		<div class="woocommerce-Address col">

			<header class="woocommerce-Address-title title">

				<h3><?php echo $title; ?></h3>

				<a href="<?php echo esc_url(wc_get_endpoint_url('edit-address', $name)); ?>" class="edit"><?php _e('Edit Information', 'secretum'); ?></a>

			</header>

			<address>

				<?php
					$address = wc_get_account_formatted_address($name);

					echo $address ? wp_kses_post($address) : esc_html_e('You have not set up this type of address yet.', 'secretum');
				?>

			</address>

		</div>

	<?php } ?>

<?php if (! wc_ship_to_billing_address_only() && wc_shipping_enabled()) { ?>

	</div>

<?php
}
