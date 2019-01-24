<?php
/**
 * Variable product add to cart
 *
 * @package 	Secretum
 * @subpackage 	Theme\WooCommerce\Single-Product\Add-To-Cart
 * @author 		SecretumTheme <author@secretumtheme.com>
 * @copyright 	2018-2019 Secretum
 * @version     3.4.1
 * @license 	https://github.com/SecretumTheme/secretum/blob/master/license.txt GPL-2.0
 * @link 		https://github.com/SecretumTheme/secretum/blob/master/woocommerce/single-product/add-to-cart/variable.php
 */

namespace Secretum;

global $product;

$attribute_keys = array_keys( $attributes );

do_action( 'woocommerce_before_add_to_cart_form' );
?>

<form class="variations_form cart" action="<?php echo esc_url( apply_filters( 'woocommerce_add_to_cart_form_action', $product->get_permalink() ) ); ?>" method="post" enctype='multipart/form-data' data-product_id="<?php echo absint( $product->get_id() ); ?>" data-product_variations="<?php echo htmlspecialchars( wp_json_encode( $available_variations ) ); // WPCS: XSS ok. ?>">
	<?php do_action( 'woocommerce_before_variations_form' ); ?>

	<?php
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
			<?php foreach ( $attributes as $attribute_name => $options ) { ?>
				<tr>
					<td class="label">
						<label for="<?php echo esc_attr( $attribute_name ); ?>">
							<?php echo wc_attribute_label( $attribute_name ); // WPCS: XSS ok.  ?>
						</label>
					</td>
					<td class="value">
						<?php
							secretum_wc_dropdown_variation_attribute_options( [
									'options' 	=> $options,
									'attribute' => $attribute_name,
									'product' 	=> $product,
									'selected' 	=> ( filter_var( getenv( 'REQUEST_METHOD' ) ) === 'attribute_' . sanitize_title( $attribute_name ) ) ? 'attribute_' . esc_attr( $attribute_name ) : esc_attr( $product->get_variation_default_attribute( $attribute_name ) ),
							] );

							echo end( $attribute_keys ) === $attribute_name ? wp_kses_post( apply_filters( 'woocommerce_reset_variations_link', '<p class="text-right"><a class="reset_variations" href="#">' . esc_html__( 'Reset', 'secretum' ) . '</a></p>' ) ) : '';
						?>
					</td>
				</tr>
			<?php } ?>
		</tbody>
		</table>

		<?php do_action( 'woocommerce_before_add_to_cart_button' ); ?>

		<div class="single_variation_wrap">
			<?php
			do_action( 'woocommerce_before_single_variation' );
			do_action( 'woocommerce_single_variation' );
			do_action( 'woocommerce_after_single_variation' );
			?>
		</div>

		<?php
		do_action( 'woocommerce_after_add_to_cart_button' );
	}// End if().

	do_action( 'woocommerce_after_variations_form' ); ?>
</form>

<?php
do_action( 'woocommerce_after_add_to_cart_form' );
