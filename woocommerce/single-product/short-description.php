<?php
/**
 * Single product short description
 *
 * @package 	Secretum
 * @subpackage 	Theme\WooCommerce\Single-Product
 * @author 		SecretumTheme <author@secretumtheme.com>
 * @copyright 	2018-2019 Secretum
 * @version     3.3.0
 * @license 	https://github.com/SecretumTheme/secretum/blob/master/license.txt GPL-2.0
 * @link 		https://github.com/SecretumTheme/secretum/blob/master/woocommerce/single-product/short-description.php
 * @since 		1.0.0
 */

namespace Secretum;

global $post;

$short_description = apply_filters( 'woocommerce_short_description', $post->post_excerpt );
if ( ! $short_description ) { return; }
?>
<div class="woocommerce-product-details__short-description lead mb-3">
	<?php echo wp_kses_post( $short_description ); ?>
</div>
