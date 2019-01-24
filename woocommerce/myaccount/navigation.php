<?php
/**
 * My Account navigation
 *
 * @package 	Secretum
 * @subpackage 	Theme\WooCommerce\MyAccount
 * @author 		SecretumTheme <author@secretumtheme.com>
 * @copyright 	2018-2019 Secretum
 * @version 	2.6.0
 * @license 	https://github.com/SecretumTheme/secretum/blob/master/license.txt GPL-2.0
 * @link 		https://github.com/SecretumTheme/secretum/blob/master/woocommerce/myaccount/navigation.php
 */

namespace Secretum;

do_action( 'woocommerce_before_account_navigation' );
?>
<nav class="woocommerce-MyAccount-navigation col-sm">
	<div class="list-group">
		<?php foreach ( wc_get_account_menu_items() as $endpoint => $label ) { ?>
			<a href="<?php echo esc_url( wc_get_account_endpoint_url( $endpoint ) ); ?>" class="list-group-item list-group-item-action my-1"><?php echo esc_html( $label ); ?></a>
		<?php } ?>
	</div>
</nav>
<?php
do_action( 'woocommerce_after_account_navigation' );
