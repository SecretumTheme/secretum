<?php
/**
 * My Account page
 *
 * @package 	Secretum
 * @subpackage 	Theme\WooCommerce\MyAccount
 * @author 		SecretumTheme <author@secretumtheme.com>
 * @copyright 	2018-2019 Secretum
 * @version 	3.5.0
 * @license 	https://github.com/SecretumTheme/secretum/blob/master/license.txt GPL-2.0
 * @link 		https://github.com/SecretumTheme/secretum/blob/master/woocommerce/myaccount/my-account.php
 */

namespace Secretum;

wc_print_notices();
?>
<div class="row">
	<?php do_action( 'woocommerce_account_navigation' ); ?>
	<div class="woocommerce-MyAccount-content col-sm-9">
		<?php do_action( 'woocommerce_account_content' ); ?>
	</div>
</div>
