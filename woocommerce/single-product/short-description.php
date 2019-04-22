<?php
/**
 * Single product short description
 *
 * @package    WooCommerce
 * @subpackage Secretum
 * @author     SecretumTheme <author@secretumtheme.com>
 * @copyright  2018-2019 Secretum
 * @version    3.3.0
 * @license    https://github.com/SecretumTheme/secretum/blob/master/license.txt GPL-2.0
 * @link       https://github.com/SecretumTheme/secretum/blob/master/woocommerce/single-product/short-description.php
 * @since      1.0.0
 */

namespace Secretum;

if ( true !== defined( 'ABSPATH' ) ) {
	exit;
}

global $post;

$secretum_short_description = apply_filters( 'woocommerce_short_description', $post->post_excerpt );

if ( ! $secretum_short_description ) {
	return;
}

?>
<div class="woocommerce-product-details__short-description lead mb-3">
	<?php echo wp_kses_post( $secretum_short_description ); ?>
</div>
