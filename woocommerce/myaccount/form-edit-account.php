<?php
/**
 * Edit account form
 *
 * @package    WooCommerce
 * @subpackage Secretum
 * @author     SecretumTheme <author@secretumtheme.com>
 * @copyright  2018-2019 Secretum
 * @version    3.5.0
 * @license    https://github.com/SecretumTheme/secretum/blob/master/license.txt GPL-2.0
 * @link       https://github.com/SecretumTheme/secretum/blob/master/woocommerce/myaccount/form-edit-account.php
 * @since      1.0.0
 */

namespace Secretum;

if ( true !== defined( 'ABSPATH' ) ) {
	exit;
}

do_action( 'woocommerce_before_edit_account_form' );
?>
<form class="woocommerce-EditAccountForm edit-account" action="" method="post" <?php do_action( 'woocommerce_edit_account_form_tag' ); ?>>
	<?php do_action( 'woocommerce_edit_account_form_start' ); ?>
	<p class="woocommerce-form-row woocommerce-form-row--first form-group mb-4">
		<label for="account_first_name"><?php esc_html_e( 'First name', 'secretum' ); ?>&nbsp;<span class="required">*</span></label>
		<input type="text" class="woocommerce-Input woocommerce-Input--text input-text form-control form-control-lg" name="account_first_name" id="account_first_name" autocomplete="given-name" value="<?php echo esc_html( $user->first_name ); ?>" />
	</p>

	<p class="woocommerce-form-row woocommerce-form-row--last form-group mb-4">
		<label for="account_last_name"><?php esc_html_e( 'Last name', 'secretum' ); ?>&nbsp;<span class="required">*</span></label>
		<input type="text" class="woocommerce-Input woocommerce-Input--text input-text form-control form-control-lg" name="account_last_name" id="account_last_name" autocomplete="family-name" value="<?php echo esc_html( $user->last_name ); ?>" />
	</p>

	<p class="woocommerce-form-row woocommerce-form-row--wide form-group mb-4">
		<label for="account_display_name"><?php esc_html_e( 'Display name', 'secretum' ); ?>&nbsp;<span class="required">*</span></label>
		<input type="text" class="woocommerce-Input woocommerce-Input--text input-text form-control form-control-lg" name="account_display_name" id="account_display_name" value="<?php echo esc_html( $user->display_name ); ?>" />
		<small class="form-text text-muted"><?php esc_html_e( 'This will be how your name will be displayed in the account section and in reviews.', 'secretum' ); ?></small>
	</p>

	<p class="woocommerce-form-row woocommerce-form-row--wide form-group mb-4">
		<label for="account_email"><?php esc_html_e( 'Email address', 'secretum' ); ?>&nbsp;<span class="required">*</span></label>
		<input type="email" class="woocommerce-Input woocommerce-Input--email input-text form-control form-control-lg" name="account_email" id="account_email" autocomplete="email" value="<?php echo esc_html( $user->user_email ); ?>" />
	</p>

	<fieldset>
		<legend><?php esc_html_e( 'Password change', 'secretum' ); ?></legend>
		<div class="woocommerce-form-row woocommerce-form-row--wide form-group row mb-4">
			<label for="password_current" class="col-sm-2 col-form-label"><?php esc_html_e( 'Current password', 'secretum' ); ?></label>
			<div class="col-sm-10">
				<input type="password" class="woocommerce-Input woocommerce-Input--password input-text form-control form-control-lg" name="password_current" id="password_current" autocomplete="off" />
				<small class="form-text text-muted"><?php esc_html_e( 'Leave blank to leave password unchanged.', 'secretum' ); ?></small>
			</div>
		</div>

		<div class="woocommerce-form-row woocommerce-form-row--wide form-group row mb-4">
			<label for="password_1" class="col-sm-2 col-form-label"><?php esc_html_e( 'New password', 'secretum' ); ?></label>
			<div class="col-sm-10">
				<input type="password" class="woocommerce-Input woocommerce-Input--password input-text form-control form-control-lg" name="password_1" id="password_1" autocomplete="off" />
				<small class="form-text text-muted"><?php esc_html_e( 'Leave blank to leave password unchanged.', 'secretum' ); ?></small>
			</div>
		</div>

		<div class="woocommerce-form-row woocommerce-form-row--wide form-group row mb-4">
			<label for="password_2" class="col-sm-2 col-form-label"><?php esc_html_e( 'Confirm new password', 'secretum' ); ?></label>
			<div class="col-sm-10">
				<input type="password" class="woocommerce-Input woocommerce-Input--password input-text form-control form-control-lg" name="password_2" id="password_2" autocomplete="off" />
				<small class="form-text text-muted"><?php esc_html_e( 'Leave blank to leave password unchanged.', 'secretum' ); ?></small>
			</div>
		</div>
	</fieldset>

	<?php do_action( 'woocommerce_edit_account_form' ); ?>

	<hr />

	<p class="text-right">
		<?php wp_nonce_field( 'save_account_details', 'save-account-details-nonce' ); ?>
			<button type="submit" class="woocommerce-Button btn btn-primary btn-lg" name="save_account_details" value="<?php esc_attr_e( 'Save changes', 'secretum' ); ?>"><?php esc_html_e( 'Save changes', 'secretum' ); ?></button>
		<input type="hidden" name="action" value="save_account_details" />
	</p>

	<?php do_action( 'woocommerce_edit_account_form_end' ); ?>

</form>
<?php
do_action( 'woocommerce_after_edit_account_form' );
