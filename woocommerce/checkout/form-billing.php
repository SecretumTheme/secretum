<?php
/**
 * Checkout billing information form
 *
 * @package    WooCommerce
 * @subpackage Secretum
 * @author     SecretumTheme <author@secretumtheme.com>
 * @copyright  2018-2019 Secretum
 * @version    3.6.0
 * @license    https://github.com/SecretumTheme/secretum/blob/master/license.txt GPL-2.0
 * @link       https://github.com/SecretumTheme/secretum/blob/master/woocommerce/checkout/form-billing.php
 * @since      1.0.0
 */

namespace Secretum;

if ( true !== defined( 'ABSPATH' ) ) {
	exit;
}

?>
<div class="woocommerce-billing-fields">
	<?php
	$secretum_billing_lock_icon = [
		'fi' => 'lock',
		'fa' => 'fa-lock',
	];

	if ( wc_ship_to_billing_address_only() && WC()->cart->needs_shipping() ) {
		?>
		<h3><?php secretum_icon( $secretum_billing_lock_icon ); ?> <?php esc_html_e( 'Billing &amp; Shipping', 'secretum' ); ?></h3>
	<?php } else { ?>
		<h3><?php secretum_icon( $secretum_billing_lock_icon ); ?> <?php esc_html_e( 'Billing Details', 'secretum' ); ?></h3>
	<?php } ?>

	<?php do_action( 'woocommerce_before_checkout_billing_form', $checkout ); ?>

	<div class="woocommerce-billing-fields__field-wrapper">
		<?php
		$secretum_checkout_fields = $checkout->get_checkout_fields( 'billing' );

		foreach ( $secretum_checkout_fields as $secretum_key => $secretum_field ) {
			if ( isset( $secretum_field['country_field'], $secretum_checkout_fields[ $secretum_field['country_field'] ] ) ) {
				$secretum_field['country'] = $checkout->get_value( $secretum_field['country_field'] );
			}

			woocommerce_form_field( $secretum_key, $secretum_field, $checkout->get_value( $secretum_key ) );
		}
		?>
	</div>

	<?php do_action( 'woocommerce_after_checkout_billing_form', $checkout ); ?>

</div>

<?php if ( ! is_user_logged_in() && $checkout->is_registration_enabled() ) { ?>
	<div class="woocommerce-account-fields">
		<?php if ( ! $checkout->is_registration_required() ) { ?>
			<p class="form-row form-row-wide create-account">
				<label class="woocommerce-form__label woocommerce-form__label-for-checkbox checkbox">
					<input class="woocommerce-form__input woocommerce-form__input-checkbox input-checkbox" id="createaccount" <?php checked( ( true === $checkout->get_value( 'createaccount' ) || ( true === apply_filters( 'woocommerce_create_account_default_checked', false ) ) ), true ); ?> type="checkbox" name="createaccount" value="1" /> <span><?php esc_html_e( 'Create an account?', 'secretum' ); ?></span>
				</label>
			</p>
		<?php } ?>

		<?php do_action( 'woocommerce_before_checkout_registration_form', $checkout ); ?>

		<?php if ( $checkout->get_checkout_fields( 'account' ) ) { ?>
			<div class="create-account">
				<?php foreach ( $checkout->get_checkout_fields( 'account' ) as $secretum_key => $secretum_field ) : ?>
					<?php woocommerce_form_field( $secretum_key, $secretum_field, $checkout->get_value( $secretum_key ) ); ?>
				<?php endforeach; ?>
				<div class="clear"></div>
			</div>
		<?php } ?>

		<?php do_action( 'woocommerce_after_checkout_registration_form', $checkout ); ?>
	</div>
	<?php
}
