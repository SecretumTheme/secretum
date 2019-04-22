<?php
/**
 * Related Products
 *
 * @package    WooCommerce
 * @subpackage Secretum
 * @author     SecretumTheme <author@secretumtheme.com>
 * @copyright  2018-2019 Secretum
 * @version    3.0.0
 * @license    https://github.com/SecretumTheme/secretum/blob/master/license.txt GPL-2.0
 * @link       https://github.com/SecretumTheme/secretum/blob/master/woocommerce/single-product/related.php
 * @since      1.0.0
 */

namespace Secretum;

if ( true !== defined( 'ABSPATH' ) ) {
	exit;
}

if ( $related_products ) {
	?>
	<section class="related products">
		<h2><?php esc_html_e( 'Related products', 'secretum' ); ?></h2>
		<?php
		woocommerce_product_loop_start();

		foreach ( $related_products as $secretum_related_product ) {
			setup_postdata( get_post( $secretum_related_product->get_id() ) );
			wc_get_template_part( 'content', 'product' );
		}

		woocommerce_product_loop_end();
		?>
	</section>
	<?php
}

wp_reset_postdata();
