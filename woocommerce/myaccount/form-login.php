<?php
/**
 * Login Form
 *
 * @package    WooCommerce
 * @subpackage Secretum
 * @author     SecretumTheme <author@secretumtheme.com>
 * @copyright  2018-2019 Secretum
 * @version    4.1.0
 * @license    https://github.com/SecretumTheme/secretum/blob/master/license.txt GPL-2.0
 * @link       https://github.com/SecretumTheme/secretum/blob/master/woocommerce/myaccount/form-login.php
 * @since      1.0.0
 */

namespace Secretum;

if ( true !== defined( 'ABSPATH' ) ) {
	exit;
}

do_action( 'woocommerce_before_customer_login_form' );

if ( 'yes' === get_option( 'woocommerce_enable_myaccount_registration' ) ) {
	?>
<div class="row" id="customer_login">
	<div class="col-sm">
<?php } ?>
	<h2><?php esc_html_e( 'Login', 'secretum' ); ?></h2>

	<form class="woocommerce-form woocommerce-form-login login" method="post">
	<?php wp_nonce_field( 'woocommerce-login', 'woocommerce-login-nonce' ); ?>

		<?php do_action( 'woocommerce_login_form_start' ); ?>

		<p class="woocommerce-form-row woocommerce-form-row--wide form-group row m-2">
			<label for="username"><?php esc_html_e( 'Username or email address', 'secretum' ); ?>&nbsp;<span class="required">*</span></label>
			<input type="text" class="woocommerce-Input woocommerce-Input--text input-text form-control form-control-lg" name="username" id="username" autocomplete="username" value="<?php echo ( true === filter_input( INPUT_POST, 'username' ) ) ? esc_html( filter_input( INPUT_POST, 'username', FILTER_SANITIZE_ENCODED ) ) : ''; ?>" />
		</p>

		<p class="woocommerce-form-row woocommerce-form-row--wide form-group row m-2">
			<label for="password"><?php esc_html_e( 'Password', 'secretum' ); ?>&nbsp;<span class="required">*</span></label>
			<input class="woocommerce-Input woocommerce-Input--text input-text form-control form-control-lg" type="password" name="password" id="password" autocomplete="current-password" />
		</p>

		<?php do_action( 'woocommerce_login_form' ); ?>

		<p class="form-group m-3">
			<button type="submit" class="woocommerce-Button btn btn-primary btn-lg" name="login" value="<?php esc_html_e( 'Log in', 'secretum' ); ?>"><?php esc_html_e( 'Log in', 'secretum' ); ?></button>
		</p>

		<p class="form-check m-3">
			<input class="woocommerce-form__input woocommerce-form__input-checkbox form-check-input" name="rememberme" type="checkbox" id="rememberme" value="forever" />
			<label class="woocommerce-form__label woocommerce-form__label-for-checkbox form-check-label"><?php esc_html_e( 'Remember me', 'secretum' ); ?></label>
		</p>

		<p class="woocommerce-LostPassword lost_password p-2">
			<a href="<?php echo esc_url( wp_lostpassword_url() ); ?>"><?php esc_html_e( 'Lost your password?', 'secretum' ); ?></a>
		</p>

		<?php do_action( 'woocommerce_login_form_end' ); ?>
	</form>

	<hr class="d-md-none" />

<?php
if ( 'yes' === get_option( 'woocommerce_enable_myaccount_registration' ) ) :
	?>
	</div><!-- .col-sm -->
	<div class="col-sm">
		<h2><?php esc_html_e( 'Register', 'secretum' ); ?></h2>

		<form method="post" class="woocommerce-form woocommerce-form-register register" <?php do_action( 'woocommerce_register_form_tag' ); ?>>
		<?php wp_nonce_field( 'woocommerce-register', 'woocommerce-register-nonce' ); ?>

			<?php do_action( 'woocommerce_register_form_start' ); ?>

			<?php if ( 'no' === get_option( 'woocommerce_registration_generate_username' ) ) : ?>
				<p class="woocommerce-form-row woocommerce-form-row--wide form-group row m-2">

					<label for="reg_username"><?php esc_html_e( 'Username', 'secretum' ); ?>&nbsp;<span class="required">*</span></label>
					<input type="text" class="woocommerce-Input woocommerce-Input--text form-control form-control-lg" name="username" id="reg_username" autocomplete="username" value="<?php echo ( true === filter_input( INPUT_POST, 'username' ) ) ? esc_html( filter_input( INPUT_POST, 'username', FILTER_SANITIZE_ENCODED ) ) : ''; ?>" />

				</p>
			<?php endif; ?>

			<p class="woocommerce-form-row woocommerce-form-row--wide form-group row m-2">
				<label for="reg_email"><?php esc_html_e( 'Email address', 'secretum' ); ?>&nbsp;<span class="required">*</span></label>
				<input type="email" class="woocommerce-Input woocommerce-Input--text form-control form-control-lg" name="email" id="reg_email" autocomplete="email" value="<?php echo ( true === filter_input( INPUT_POST, 'email' ) ) ? esc_html( filter_input( INPUT_POST, 'email', FILTER_SANITIZE_EMAIL ) ) : ''; ?>" />
			</p>

			<?php if ( 'no' === get_option( 'woocommerce_registration_generate_password' ) ) : ?>
				<p class="woocommerce-form-row woocommerce-form-row--wide form-group row m-2">
					<label for="reg_password"><?php esc_html_e( 'Password', 'secretum' ); ?>&nbsp;<span class="required">*</span></label>
					<input type="password" class="woocommerce-Input woocommerce-Input--text form-control form-control-lg" name="password" id="reg_password" autocomplete="new-password" />
				</p>

			<?php else : ?>

				<p><?php esc_html_e( 'A password will be sent to your email address.', 'secretum' ); ?></p>

			<?php endif; ?>

			<?php do_action( 'woocommerce_register_form' ); ?>

			<p class="woocommerce-FormRow form-group m-3">
				<button type="submit" class="woocommerce-Button btn btn-primary btn-lg" name="register" value="<?php esc_html_e( 'Register', 'secretum' ); ?>"><?php esc_html_e( 'Register', 'secretum' ); ?></button>
			</p>

			<?php do_action( 'woocommerce_register_form_end' ); ?>
		</form>
	</div><!-- .col-sm -->
</div><!-- .row -->
	<?php
endif;

do_action( 'woocommerce_after_customer_login_form' );
