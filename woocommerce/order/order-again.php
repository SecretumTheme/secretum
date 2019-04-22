<?php
/**
 * Order again button
 *
 * @package    WooCommerce
 * @subpackage Secretum
 * @author     SecretumTheme <author@secretumtheme.com>
 * @copyright  2018-2019 Secretum
 * @version    3.5.0
 * @license    https://github.com/SecretumTheme/secretum/blob/master/license.txt GPL-2.0
 * @link       https://github.com/SecretumTheme/secretum/blob/master/woocommerce/order/order-again.php
 * @since      1.0.0
 */

namespace Secretum;

if ( true !== defined( 'ABSPATH' ) ) {
	exit;
}

?>
<p class="order-again p-3 text-center">
	<a href="<?php echo esc_url( $order_again_url ); ?>" class="btn btn-primary btn-lg"><?php esc_html_e( 'Order again', 'secretum' ); ?></a>
</p>
