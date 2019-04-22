<?php
/**
 * Login form
 *
 * @package    WooCommerce
 * @subpackage Secretum
 * @author     SecretumTheme <author@secretumtheme.com>
 * @copyright  2018-2019 Secretum
 * @version    3.6.0
 * @license    https://github.com/SecretumTheme/secretum/blob/master/license.txt GPL-2.0
 * @link       https://github.com/SecretumTheme/secretum/blob/master/woocommerce/global/form-login.php
 * @since      1.0.0
 */

namespace Secretum;

if ( true !== defined( 'ABSPATH' ) ) {
	exit;
}

if ( is_user_logged_in() ) {
	return;
}
?>

<form class="woocommerce-form woocommerce-form-login login" method="post" <?php echo ( $hidden ) ? 'style="display:none;"' : ''; ?>>
	<?php do_action( 'woocommerce_login_form_start' ); ?>

	<?php
	if ( isset( $message ) ) {
		wpautop( wptexturize( $message ) );
	}
	?>

	<p class="form-row form-group form-row-first">
		<label for="username"><?php esc_html_e( 'Username or email', 'secretum' ); ?>&nbsp;<span class="required">*</span></label>
		<input type="text" class="input-text form-control form-control-lg" name="username" id="username" autocomplete="username" />
	</p>

	<p class="form-row form-group form-row-last">
		<label for="password"><?php esc_html_e( 'Password', 'secretum' ); ?>&nbsp;<span class="required">*</span></label>
		<input class="input-text form-control form-control-lg" type="password" name="password" id="password" autocomplete="current-password" />
	</p>

	<div class="clear"></div>

	<?php do_action( 'woocommerce_login_form' ); ?>

	<p class="form-row form-group">
		<?php wp_nonce_field( 'woocommerce-login', 'woocommerce-login-nonce' ); ?>
		<button type="submit" class="button" name="login" value="<?php esc_html_e( 'Login', 'secretum' ); ?>"><?php esc_html_e( 'Login', 'secretum' ); ?></button>
		<input type="hidden" name="redirect" value="<?php echo esc_url( $redirect ); ?>" />
	</p>

	<p class="form-check">
		<label class="woocommerce-form__label woocommerce-form__label-for-checkbox form-check-label">
			<input class="woocommerce-form__input woocommerce-form__input-checkbox form-check-input" name="rememberme" type="checkbox" id="rememberme" value="forever" /> <span><?php esc_html_e( 'Remember me', 'secretum' ); ?></span>
		</label>
	</p>

	<p class="lost_password">
		<a href="<?php echo esc_url( wp_lostpassword_url() ); ?>"><?php esc_html_e( 'Lost your password?', 'secretum' ); ?></a>
	</p>

	<div class="clear"></div>

	<?php do_action( 'woocommerce_login_form_end' ); ?>
</form>
