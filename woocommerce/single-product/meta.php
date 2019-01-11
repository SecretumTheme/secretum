<?php
/**
 * Single Product Meta
 *
 * @package 	WooCommerce/Templates
 * @version     3.0.0
 * @subpackage 	Secretum
 */

namespace Secretum;

global $product;

// @about Set Vars
$product_sku = $product->get_sku();
$product_id = $product->get_id();
$sku = ( $product_sku ) ? $product_sku : __( 'N/A', 'secretum' );
?>
<div class="product_meta">
	<?php
	do_action( 'woocommerce_product_meta_start' );

	$html = '';

	if ( wc_product_sku_enabled() && ( isset( $product_sku ) || $product->is_type( 'variable' ) ) ) {
		$html .= '<span class="sku_wrapper">' . esc_html__( 'SKU:', 'secretum' ) . ' <span class="sku">' . esc_html( $sku ) . '</span></span><br />';
	}

	$html .= wc_get_product_category_list( $product_id, ', ', ' <span class="posted_in">' . _n( 'Category:', 'Categories:', count( $product->get_category_ids() ), 'secretum' ) . ' ', '</span><br />' );

	$html .= wc_get_product_tag_list( $product_id, ', ', ' <span class="tagged_as">' . _n( 'Tag:', 'Tags:', count( $product->get_tag_ids() ), 'secretum' ) . ' ', '</span><br />' );

	echo wp_kses(
		$html,
		[
			'span' => [
				'class' => true,
			],
			'br' => true,
		]
	);

	do_action( 'woocommerce_product_meta_end' );
	?>
</div>
