<?php
/**
 * The template for displaying product content in the single-product.php template
 *
 * @package    WooCommerce
 * @subpackage Secretum
 * @author     SecretumTheme <author@secretumtheme.com>
 * @copyright  2018-2019 Secretum
 * @version    3.6.0
 * @license    https://github.com/SecretumTheme/secretum/blob/master/license.txt GPL-2.0
 * @link       https://github.com/SecretumTheme/secretum/blob/master/woocommerce/content-single-product.php
 * @since      1.0.0
 */

namespace Secretum;

if ( true !== defined( 'ABSPATH' ) ) {
	exit;
}

global $product;

/**
 * Hook Woocommerce_before_single_product.
 *
 * @hooked wc_print_notices - 10
 */
do_action( 'woocommerce_before_single_product' );

// Maybe Required.
if ( post_password_required() ) {
	secretum_post_password_form();
	return;
}
?>
<div id="product-<?php the_ID(); ?>" <?php wc_product_class( '', $product ); ?>>
	<div class="row">
		<div class="col-md-7">
			<?php
			/**
			 * Hook: woocommerce_before_single_product_summary.
			 *
			 * @hooked woocommerce_show_product_sale_flash - 10
			 * @hooked woocommerce_show_product_images - 20
			 */
			do_action( 'woocommerce_before_single_product_summary' );
			?>
		</div>
		<div class="summary entry-summary col-md">
			<?php
			wc_get_template( 'single-product/title.php' );
			wc_get_template( 'single-product/price.php' );
			wc_get_template( 'single-product/short-description.php' );

			global $product;

			do_action( 'woocommerce_' . $product->get_type() . '_add_to_cart' );

			if ( post_type_supports( 'product', 'comments' ) ) {
				wc_get_template( 'single-product/rating.php' );
			}

			wc_get_template( 'single-product/meta.php' );
			wc_get_template( 'single-product/share.php' );

			if ( true === class_exists( '\WC_Structured_Data::generate_product_data' ) ) {
				\WC_Structured_Data::generate_product_data();
			}
			?>
		</div>
	</div>
	<div class="row">
		<?php
		/**
		 * Hook: woocommerce_after_single_product_summary.
		 *
		 * @hooked woocommerce_output_product_data_tabs - 10
		 * @hooked woocommerce_upsell_display - 15
		 * @hooked woocommerce_output_related_products - 20
		 */
		do_action( 'woocommerce_after_single_product_summary' );
		?>
	</div>
</div>
<?php
do_action( 'woocommerce_after_single_product' );
