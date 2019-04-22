<?php
/**
 * Single Product Meta
 *
 * @package    WooCommerce
 * @subpackage Secretum
 * @author     SecretumTheme <author@secretumtheme.com>
 * @copyright  2018-2019 Secretum
 * @version    3.0.0
 * @license    https://github.com/SecretumTheme/secretum/blob/master/license.txt GPL-2.0
 * @link       https://github.com/SecretumTheme/secretum/blob/master/woocommerce/single-product/meta.php
 * @since      1.0.0
 */

namespace Secretum;

if ( true !== defined( 'ABSPATH' ) ) {
	exit;
}

global $product;

// Set Vars.
$secretum_product_sku = $product->get_sku();
$secretum_product_id  = $product->get_id();
$secretum_product_sku = ( $secretum_product_sku ) ? $secretum_product_sku : __( 'N/A', 'secretum' );
?>
<div class="product_meta">
	<?php
	do_action( 'woocommerce_product_meta_start' );

	$secretum_html = '';

	if ( wc_product_sku_enabled() && ( isset( $secretum_product_sku ) || $product->is_type( 'variable' ) ) ) {
		$secretum_html .= '<span class="sku_wrapper">' . esc_html__( 'SKU:', 'secretum' ) . ' <span class="sku">' . esc_html( $secretum_product_sku ) . '</span></span><br />';
	}

	$secretum_html .= wc_get_product_category_list( $secretum_product_id, ', ', ' <span class="posted_in">' . _n( 'Category:', 'Categories:', count( $product->get_category_ids() ), 'secretum' ) . ' ', '</span><br />' );

	$secretum_html .= wc_get_product_tag_list( $secretum_product_id, ', ', ' <span class="tagged_as">' . _n( 'Tag:', 'Tags:', count( $product->get_tag_ids() ), 'secretum' ) . ' ', '</span><br />' );

	echo wp_kses(
		$secretum_html,
		[
			'span' => [
				'class' => true,
			],
			'br'   => true,
		]
	);

	do_action( 'woocommerce_product_meta_end' );
	?>
</div>
