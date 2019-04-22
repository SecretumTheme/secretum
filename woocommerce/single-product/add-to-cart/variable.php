<?php
/**
 * Variable product add to cart
 *
 * @package    WooCommerce
 * @subpackage Secretum
 * @author     SecretumTheme <author@secretumtheme.com>
 * @copyright  2018-2019 Secretum
 * @version    3.5.5
 * @license    https://github.com/SecretumTheme/secretum/blob/master/license.txt GPL-2.0
 * @link       https://github.com/SecretumTheme/secretum/blob/master/woocommerce/single-product/add-to-cart/variable.php
 * @since      1.0.0
 */

namespace Secretum;

if ( true !== defined( 'ABSPATH' ) ) {
	exit;
}

global $product;

$secretum_attribute_keys  = array_keys( $attributes );
$secretum_variations_json = wp_json_encode( $available_variations );
$secretum_variations_attr = function_exists( 'wc_esc_json' ) ? wc_esc_json( $secretum_variations_json ) : _wp_specialchars( $secretum_variations_json, ENT_QUOTES, 'UTF-8', true );

do_action( 'woocommerce_before_add_to_cart_form' ); ?>

<form class="variations_form cart" action="<?php echo esc_url( apply_filters( 'woocommerce_add_to_cart_form_action', $product->get_permalink() ) ); ?>" method="post" enctype='multipart/form-data' data-product_id="<?php echo absint( $product->get_id() ); ?>" data-product_variations="<?php echo wp_kses_post( $secretum_variations_attr ); ?>">
	<?php
	do_action( 'woocommerce_before_variations_form' );

	if ( empty( $available_variations ) && false !== $available_variations ) {
		?>
		<p class="stock out-of-stock">
			<?php echo esc_html_e( 'This product is currently out of stock and unavailable.', 'secretum' ); ?>
		</p>
		<?php
	} else {
		?>
		<table class="variations" cellspacing="0">
		<tbody>
			<?php foreach ( $attributes as $secretum_attribute_name => $secretum_options ) { ?>
				<tr>
					<td class="label">
						<label for="<?php echo esc_attr( sanitize_title( $secretum_attribute_name ) ); ?>">
							<?php echo wp_kses_post( wc_attribute_label( $secretum_attribute_name ) ); ?>
						</label>
					</td>
					<td class="value">
						<?php
							secretum_wc_dropdown_variation_attribute_options(
								[
									'options'   => $secretum_options,
									'attribute' => $secretum_attribute_name,
									'product'   => $product,
									'selected'  => ( filter_var( getenv( 'REQUEST_METHOD' ) ) === 'attribute_' . sanitize_title( $secretum_attribute_name ) ) ? 'attribute_' . esc_attr( $secretum_attribute_name ) : esc_attr( $product->get_variation_default_attribute( $secretum_attribute_name ) ),
								]
							);

							echo end( $secretum_attribute_keys ) === $secretum_attribute_name ? wp_kses_post( apply_filters( 'woocommerce_reset_variations_link', '<p class="text-right"><a class="reset_variations" href="#">' . esc_html__( 'Reset', 'secretum' ) . '</a></p>' ) ) : '';
						?>
					</td>
				</tr>
			<?php } ?>
		</tbody>
		</table>

		<div class="single_variation_wrap">
			<?php
			/**
			 * Hook: woocommerce_before_single_variation.
			 */
			do_action( 'woocommerce_before_single_variation' );

			/**
			 * Hook: woocommerce_single_variation. Used to output the cart button and placeholder for variation data.
			 *
			 * @since 2.4.0
			 * @hooked woocommerce_single_variation - 10 Empty div for variation data.
			 * @hooked woocommerce_single_variation_add_to_cart_button - 20 Qty and cart button.
			 */
			do_action( 'woocommerce_single_variation' );

			/**
			 * Hook: woocommerce_after_single_variation.
			 */
			do_action( 'woocommerce_after_single_variation' );
			?>
		</div>
		<?php
	}

	do_action( 'woocommerce_after_variations_form' );
	?>
</form>

<?php
do_action( 'woocommerce_after_add_to_cart_form' );
