<?php
/**
 * Lost password form
 *
 * @package    WooCommerce
 * @subpackage Secretum
 * @author     SecretumTheme <author@secretumtheme.com>
 * @copyright  2018-2019 Secretum
 * @version    3.5.2
 * @license    https://github.com/SecretumTheme/secretum/blob/master/license.txt GPL-2.0
 * @link       https://github.com/SecretumTheme/secretum/blob/master/woocommerce/myaccount/form-lost-password.php
 * @since      1.0.0
 */

namespace Secretum;

if ( true !== defined( 'ABSPATH' ) ) {
	exit;
}

do_action( 'woocommerce_before_lost_password_form' );
?>
<form method="post" class="woocommerce-ResetPassword lost_reset_password">
	<p><?php echo esc_html( apply_filters( 'woocommerce_lost_password_message', esc_html__( 'Need to reset your login credentials? Enter the Username or Email Address associated with your account below then click Reset Password button to receive an email containing a unique link allowing you to reset your password.', 'secretum' ) ) ); ?></p>

	<p class="form-group">
		<label for="user_login" class="font-weight-bold"><?php esc_html_e( 'Username or Email Address', 'secretum' ); ?></label>
		<input class="form-control" type="text" name="user_login" id="user_login" autocomplete="username" />
	</p>

	<?php do_action( 'woocommerce_lostpassword_form' ); ?>

	<p class="form-group mt-3">
		<input type="hidden" name="wc_reset_password" value="true" />
		<button type="submit" class="btn btn-primary" value="<?php esc_html_e( 'Reset password', 'secretum' ); ?>"><?php esc_html_e( 'Reset password', 'secretum' ); ?></button>
	</p>

	<?php wp_nonce_field( 'lost_password', 'woocommerce-lost-password-nonce' ); ?>
</form>
<?php
do_action( 'woocommerce_after_lost_password_form' );
