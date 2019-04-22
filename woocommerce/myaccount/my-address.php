<?php
/**
 * My Addresses
 *
 * @package    WooCommerce
 * @subpackage Secretum
 * @author     SecretumTheme <author@secretumtheme.com>
 * @copyright  2018-2019 Secretum
 * @version    2.6.0
 * @license    https://github.com/SecretumTheme/secretum/blob/master/license.txt GPL-2.0
 * @link       https://github.com/SecretumTheme/secretum/blob/master/woocommerce/myaccount/my-address.php
 * @since      1.0.0
 */

namespace Secretum;

if ( true !== defined( 'ABSPATH' ) ) {
	exit;
}

$secretum_customer_id = get_current_user_id();

if ( true !== wc_ship_to_billing_address_only() && wc_shipping_enabled() ) {
	$secretum_get_addresses = apply_filters(
		'woocommerce_my_account_get_addresses',
		[
			'billing'  => esc_html__( 'Billing address', 'secretum' ),
			'shipping' => esc_html__( 'Shipping address', 'secretum' ),
		],
		$secretum_customer_id
	);
} else {
	$secretum_get_addresses = apply_filters(
		'woocommerce_my_account_get_addresses',
		[
			'billing' => esc_html__( 'Billing address', 'secretum' ),
		],
		$secretum_customer_id
	);
}

$secretum_oldcol = 1;
$secretum_col    = 1;
?>
<p><?php echo esc_html( apply_filters( 'woocommerce_my_account_my_address_description', esc_html__( 'The following addresses will be used on the checkout page by default.', 'secretum' ) ) ); ?></p>

<?php if ( true !== wc_ship_to_billing_address_only() && wc_shipping_enabled() ) { ?>
	<div class="woocommerce-Addresses addresses row">
	<?php
}
foreach ( $secretum_get_addresses as $secretum_name => $secretum_title ) {
	?>
	<div class="woocommerce-Address col">
		<header class="woocommerce-Address-title title">
			<h3><?php echo esc_html( $secretum_title ); ?></h3>
			<a href="<?php echo esc_url( wc_get_endpoint_url( 'edit-address', $secretum_name ) ); ?>" class="edit"><?php esc_html_e( 'Edit Information', 'secretum' ); ?></a>
		</header>
		<address>
			<?php
			$secretum_address = wc_get_account_formatted_address( $secretum_name );
			echo $secretum_address ? wp_kses_post( $secretum_address ) : esc_html_e( 'You have not set up this type of address yet.', 'secretum' );
			?>
		</address>
	</div>
	<?php
}

if ( true !== wc_ship_to_billing_address_only() && wc_shipping_enabled() ) {
	?>
</div>
	<?php
}
