<?php
/**
 * My Account navigation
 *
 * @package    WooCommerce
 * @subpackage Secretum
 * @author     SecretumTheme <author@secretumtheme.com>
 * @copyright  2018-2019 Secretum
 * @version    2.6.0
 * @license    https://github.com/SecretumTheme/secretum/blob/master/license.txt GPL-2.0
 * @link       https://github.com/SecretumTheme/secretum/blob/master/woocommerce/myaccount/navigation.php
 * @since      1.0.0
 */

namespace Secretum;

if ( true !== defined( 'ABSPATH' ) ) {
	exit;
}

do_action( 'woocommerce_before_account_navigation' );
?>
<nav class="woocommerce-MyAccount-navigation col-sm">
	<div class="list-group">
		<?php foreach ( wc_get_account_menu_items() as $secretum_endpoint => $secretum_label ) { ?>
			<a href="<?php echo esc_url( wc_get_account_endpoint_url( $secretum_endpoint ) ); ?>" class="list-group-item list-group-item-action my-1"><?php echo esc_html( $secretum_label ); ?></a>
		<?php } ?>
	</div>
</nav>
<?php
do_action( 'woocommerce_after_account_navigation' );
