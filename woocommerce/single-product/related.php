<?php
/**
 * Related Products
 *
 * @package 	WooCommerce/Templates
 * @version     3.0.0
 *
 * @subpackage 	Secretum
 * @version 	0.0.1
 */

if ($related_products) {
?>
<section class="related products">
	<h2><?php esc_html_e('Related products', 'secretum'); ?></h2>
	<?php woocommerce_product_loop_start(); ?>
		<?php foreach ($related_products as $related_product) { ?>
			<?php
			 	$post_object = get_post($related_product->get_id());
				setup_postdata($GLOBALS['post'] =& $post_object);
				wc_get_template_part('content', 'product'); ?>
		<?php } ?>
	<?php woocommerce_product_loop_end(); ?>
</section>
<?php
}

wp_reset_postdata();
