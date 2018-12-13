<?php
/**
 * Checkout billing information form
 *
 * @package 	WooCommerce/Templates
 * @version     3.0.9
 *
 * @subpackage 	Secretum
 * @version     0.0.1
 */
?>
<div class="woocommerce-billing-fields">

	<?php if (wc_ship_to_billing_address_only() && WC()->cart->needs_shipping()) { ?>

		<h3>
			
			<?php echo apply_filters('secretum_billing_shipping_text', '<i class="fa fa-angle-down"></i> ' . __('Billing &amp; Shipping', 'secretum')); ?>

		</h3>

	<?php } else { ?>

		<h3>
			
			<?php echo apply_filters('secretum_billing_text', '<i class="fa fa-angle-down"></i> ' . __('Billing Details', 'secretum')); ?>

		</h3>

	<?php } ?>

	<?php do_action('woocommerce_before_checkout_billing_form', $checkout); ?>

	<div class="woocommerce-billing-fields__field-wrapper">

		<?php
			$fields = $checkout->get_checkout_fields('billing');

			foreach ($fields as $key => $field) {

				if (isset($field['country_field'], $fields[ $field['country_field'] ])) {

					$field['country'] = $checkout->get_value($field['country_field']);

				}

				woocommerce_form_field($key, $field, $checkout->get_value($key));

			}
		?>

	</div>

	<?php do_action('woocommerce_after_checkout_billing_form', $checkout); ?>

</div>

<?php if (! is_user_logged_in() && $checkout->is_registration_enabled()) { ?>

	<div class="woocommerce-account-fields">

		<?php do_action('woocommerce_before_checkout_registration_form', $checkout); ?>

		<input type="hidden" name="createaccount" value="1">

			<div class="create-account" style="display: block;">

				<p class="form-row form-group validate-required" id="account_password_field" data-priority="">

					<label for="account_password" class="col-form-label-lg mt-1"><?php echo apply_filters('secretum_account_password_text', __('Account password', 'secretum')); ?> <abbr class="required" title="required">*</abbr></label><span class="woocommerce-input-wrapper"><input type="password" class="input-text form-control form-control-lg" name="account_password" id="account_password" value=""></span>

					<small class="woocommerce-password-hint"><?php echo apply_filters('secretum_password_hint_text', __('Passwords should be at least five characters long or longer. We recommend using a mixture of upper and lower case letters, numbers and symbols like ! " ? $ % ^ &).', 'secretum')); ?></small>

				</p>
				
				<div class="clear"></div>

			</div>

		<?php do_action('woocommerce_after_checkout_registration_form', $checkout); ?>

	</div>

<?php }
