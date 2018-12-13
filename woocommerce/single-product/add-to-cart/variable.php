<?php
/**
 * Variable product add to cart
 *
 * @package 	WooCommerce/Templates
 * @version     3.4.1
 *
 * @subpackage 	Secretum
 * @version 	0.0.1
 */
global $product;

$attribute_keys = array_keys($attributes);

do_action('woocommerce_before_add_to_cart_form');
?>

<form class="variations_form cart" action="<?php echo esc_url(apply_filters('woocommerce_add_to_cart_form_action', $product->get_permalink())); ?>" method="post" enctype='multipart/form-data' data-product_id="<?php echo absint($product->get_id()); ?>" data-product_variations="<?php echo htmlspecialchars(wp_json_encode($available_variations)); // WPCS: XSS ok. ?>">

	<?php do_action('woocommerce_before_variations_form'); ?>

	<?php if (empty($available_variations) && false !== $available_variations) { ?>

		<p class="stock out-of-stock">

			<?php echo apply_filters('secretum_out_of_stock_text', __('This product is currently out of stock and unavailable.', 'secretum')); ?>

		</p>

	<?php } else { ?>

		<table class="variations" cellspacing="0">
		<tbody>

			<?php foreach ($attributes as $attribute_name => $options) { ?>

				<tr>
					<td class="label">

						<label for="<?php echo sanitize_title($attribute_name); ?>">

							<?php echo wc_attribute_label($attribute_name); ?>

						</label>

					</td>
					<td class="value">

						<?php
							secretum_wc_dropdown_variation_attribute_options(
								array(
									'options' 	=> $options,
									'attribute' => $attribute_name,
									'product' 	=> $product,
									'selected' 	=> isset($_REQUEST[ 'attribute_' . sanitize_title($attribute_name) ]) ? wc_clean(stripslashes(urldecode($_REQUEST[ 'attribute_' . sanitize_title($attribute_name) ]))) : $product->get_variation_default_attribute($attribute_name)
								)
							);
						?>

						<?php echo end($attribute_keys) === $attribute_name ? apply_filters('secretum_reset_variations_link', '<p class="reset_variations text-right"><a href="#">' . esc_html__('Reset', 'secretum') . '</a></p>') : ''; ?>

					</td>
				</tr>

			<?php } ?>

		</tbody>
		</table>

		<?php do_action('woocommerce_before_add_to_cart_button'); ?>

		<div class="single_variation_wrap">

			<?php do_action('woocommerce_before_single_variation'); ?>

			<?php do_action('woocommerce_single_variation'); ?>

			<?php do_action('woocommerce_after_single_variation'); ?>

		</div>

		<?php do_action('woocommerce_after_add_to_cart_button'); ?>

	<?php } ?>

	<?php do_action('woocommerce_after_variations_form'); ?>

</form>

<?php do_action('woocommerce_after_add_to_cart_form');
