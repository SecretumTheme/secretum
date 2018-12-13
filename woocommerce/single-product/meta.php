<?php
/**
 * Single Product Meta
 *
 * @package 	WooCommerce/Templates
 * @version     3.0.0
 *
 * @subpackage 	Secretum
 * @version     0.0.1
 */
global $product;
?>
<div class="product_meta">
	<?php do_action('woocommerce_product_meta_start'); ?>

	<?php if (wc_product_sku_enabled() && ($product->get_sku() || $product->is_type('variable'))) { ?>
		<span class="sku_wrapper"><?php esc_html_e('SKU:', 'secretum'); ?> <span class="sku"><?php echo ($sku = $product->get_sku()) ? $sku : esc_html__('N/A', 'secretum'); ?></span></span>
	<?php } ?>

	<?php do_action('woocommerce_product_meta_end'); ?>
</div>
