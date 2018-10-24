<?php
/**
 * Single Product Meta
 *
 * @package 	WooCommerce/Templates
 * @version     3.0.0
 *
 * @subpackage 	Secretum/WooCommerce
 * @version     0.0.1
 */
if (! defined('ABSPATH')) { exit; }

global $product;
?>
<div class="product_meta">

	<?php do_action('woocommerce_product_meta_start'); ?>

	<?php if (wc_product_sku_enabled() && ($product->get_sku() || $product->is_type('variable'))) { ?>

		<span class="sku_wrapper"><?php esc_html_e('SKU:', 'secretum'); ?> <span class="sku"><?php echo ($sku = $product->get_sku()) ? $sku : esc_html__('N/A', 'secretum'); ?></span></span>

	<?php } ?>

	<?php //echo wc_get_product_category_list($product->get_id(), ', ', '<span class="posted_in">' . _n('Category:', 'Categories:', count($product->get_category_ids()), 'secretum') . ' ', '</span>'); ?>

	<?php //echo wc_get_product_tag_list($product->get_id(), ', ', '<span class="tagged_as">' . _n('Tag:', 'Tags:', count($product->get_tag_ids()), 'secretum') . ' ', '</span>'); ?>

	<?php do_action('woocommerce_product_meta_end'); ?>

</div>
