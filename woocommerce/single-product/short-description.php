<?php
/**
 * Single product short description
 *
 * @package 	WooCommerce/Templates
 * @version     3.3.0
 * @subpackage 	Secretum
 */

namespace Secretum;

global $post;

$short_description = apply_filters( 'woocommerce_short_description', $post->post_excerpt );
if ( ! $short_description ) { return; }
?>
<div class="woocommerce-product-details__short-description lead mb-3">
	<?php echo wp_kses_post( $short_description ); ?>
</div>
