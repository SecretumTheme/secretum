<?php
/**
 * Edit address form
 *
 * @package 	Secretum
 * @subpackage 	Theme\WooCommerce\MyAccount
 * @author 		SecretumTheme <author@secretumtheme.com>
 * @copyright 	2018-2019 Secretum
 * @version 	3.4.0
 * @license 	https://github.com/SecretumTheme/secretum/blob/master/license.txt GPL-2.0
 * @link 		https://github.com/SecretumTheme/secretum/blob/master/woocommerce/myaccount/form-edit-address.php
 * @since 		1.0.0
 */

namespace Secretum;

$page_title = ( 'billing' === $load_address ) ? __( 'Billing address', 'secretum' ) : __( 'Shipping address', 'secretum' );

do_action( 'woocommerce_before_edit_account_address_form' );

if ( ! $load_address ) {
	wc_get_template( 'myaccount/my-address.php' );
} else {
?>
	<form method="post">
		<h3><?php
			// @codingStandardsIgnoreLine
			echo apply_filters( 'woocommerce_my_account_edit_address_title', $page_title, $load_address );
		?></h3>
		<div class="woocommerce-address-fields">
			<?php do_action( "woocommerce_before_edit_address_form_{$load_address}" ); ?>
			<div class="woocommerce-address-fields__field-wrapper">
				<?php
				foreach ( $address as $key => $field ) {
					if ( isset( $field['country_field'], $address[ $field['country_field'] ] ) ) {
						$field['country'] = wc_get_post_data_by_key( $field['country_field'], $address[ $field['country_field'] ]['value'] );
					}

					woocommerce_form_field( $key, $field, wc_get_post_data_by_key( $key, $field['value'] ) );
				}
				?>
			</div>

			<?php do_action( "woocommerce_after_edit_address_form_{$load_address}" ); ?>

			<?php wp_nonce_field( 'woocommerce-edit_address', 'woocommerce-edit-address-nonce' ); ?>

			<input type="hidden" name="action" value="edit_address" />

			<p class="form-group mt-5 mb-5">
				<button type="submit" class="btn btn-primary btn-lg" name="save_address" value="<?php esc_attr_e( 'Save address', 'secretum' ); ?>"><?php esc_html_e( 'Save address', 'secretum' ); ?></button>
			</p>
		</div>
	</form>
<?php }

do_action( 'woocommerce_after_edit_account_address_form' );
