<?php
/**
 * Shows downloads on the account page.
 *
 * @package    WooCommerce
 * @subpackage Secretum
 * @author     SecretumTheme <author@secretumtheme.com>
 * @copyright  2018-2019 Secretum
 * @version    3.2.0
 * @license    https://github.com/SecretumTheme/secretum/blob/master/license.txt GPL-2.0
 * @link       https://github.com/SecretumTheme/secretum/blob/master/woocommerce/myaccount/downloads.php
 * @since      1.0.0
 */

namespace Secretum;

if ( true !== defined( 'ABSPATH' ) ) {
	exit;
}

$secretum_downloads     = WC()->customer->get_downloadable_products();
$secretum_has_downloads = (bool) $secretum_downloads;

do_action( 'woocommerce_before_account_downloads', $secretum_has_downloads );

if ( $secretum_has_downloads ) {
	do_action( 'woocommerce_before_available_downloads' );
	do_action( 'woocommerce_available_downloads', $secretum_downloads );
	do_action( 'woocommerce_after_available_downloads' );
} else {
	?>
	<div class="woocommerce-Message woocommerce-Message--info woocommerce-info p-3">
		<a class="woocommerce-Button btn btn-primary btn-lg" href="<?php echo esc_url( apply_filters( 'woocommerce_return_to_shop_redirect', wc_get_page_permalink( 'shop' ) ) ); ?>">
			<?php esc_html_e( 'Go shop', 'secretum' ); ?>
		</a>

		<?php esc_html_e( 'No downloads available yet.', 'secretum' ); ?>
	</div>
	<?php
}

do_action( 'woocommerce_after_account_downloads', $secretum_has_downloads );
