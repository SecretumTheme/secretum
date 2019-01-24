<?php
/**
 * My Addresses
 *
 * @package 	Secretum
 * @subpackage 	Theme\WooCommerce\MyAccount
 * @author 		SecretumTheme <author@secretumtheme.com>
 * @copyright 	2018-2019 Secretum
 * @version     2.6.0
 * @license 	https://github.com/SecretumTheme/secretum/blob/master/license.txt GPL-2.0
 * @link 		https://github.com/SecretumTheme/secretum/blob/master/woocommerce/myaccount/my-address.php
 */

namespace Secretum;

if ( ! defined( 'ABSPATH' ) ) { exit; }

$customer_id = get_current_user_id();

if ( ! wc_ship_to_billing_address_only() && wc_shipping_enabled() ) {
	$get_addresses = apply_filters( 'woocommerce_my_account_get_addresses', array(
		'billing' 	=> esc_html__( 'Billing address', 'secretum' ),
		'shipping' 	=> esc_html__( 'Shipping address', 'secretum' ),
	), $customer_id );
} else {
	$get_addresses = apply_filters( 'woocommerce_my_account_get_addresses', array(
		'billing' 	=> esc_html__( 'Billing address', 'secretum' ),
	), $customer_id );
}

$oldcol = 1;
$col    = 1;
?>
<p><?php
	// @codingStandardsIgnoreLine
	echo apply_filters( 'woocommerce_my_account_my_address_description', esc_html__( 'The following addresses will be used on the checkout page by default.', 'secretum' ) );
?></p>

<?php if ( ! wc_ship_to_billing_address_only() && wc_shipping_enabled() ) { ?>
	<div class="woocommerce-Addresses addresses row">
<?php
}
foreach ( $get_addresses as $name => $title ) {
?>
	<div class="woocommerce-Address col">
		<header class="woocommerce-Address-title title">
			<h3><?php echo esc_html( $title ); ?></h3>
			<a href="<?php echo esc_url( wc_get_endpoint_url( 'edit-address', $name ) ); ?>" class="edit"><?php esc_html_e( 'Edit Information', 'secretum' ); ?></a>
		</header>
		<address>
			<?php
			$address = wc_get_account_formatted_address( $name );
			echo $address ? wp_kses_post( $address ) : esc_html_e( 'You have not set up this type of address yet.', 'secretum' );
			?>
		</address>
	</div>
<?php
}

if ( ! wc_ship_to_billing_address_only() && wc_shipping_enabled() ) {
?>
</div>
<?php
}
