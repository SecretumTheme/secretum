<?php
/**
 * Related Products
 *
 * @package 	WooCommerce/Templates
 * @version     3.0.0
 * @subpackage 	Secretum
 */

namespace Secretum;

if ( $related_products ) {
?>
<section class="related products">
	<h2><?php esc_html_e( 'Related products', 'secretum' ); ?></h2>
	<?php woocommerce_product_loop_start(); ?>
		<?php foreach ( $related_products as $related_product ) { ?>
			<?php
				setup_postdata( get_post( $related_product->get_id() ) );
				wc_get_template_part( 'content', 'product' ); ?>
		<?php } ?>
	<?php woocommerce_product_loop_end(); ?>
</section>
<?php
}

wp_reset_postdata();
