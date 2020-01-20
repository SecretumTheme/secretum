<?php
/**
 * Cart Page
 *
 * @package    WooCommerce
 * @subpackage Secretum
 * @author     SecretumTheme <author@secretumtheme.com>
 * @copyright  2018-2019 Secretum
 * @version    3.8.0
 * @license    https://github.com/SecretumTheme/secretum/blob/master/license.txt GPL-2.0
 * @link       https://github.com/SecretumTheme/secretum/blob/master/woocommerce/cart/cart.php
 * @since      1.0.0
 */

namespace Secretum;

if ( true !== defined( 'ABSPATH' ) ) {
	exit;
}

do_action( 'woocommerce_before_cart' );
?>
<div class="row no-gutters">
	<div class="col-md-8">
		<form class="woocommerce-cart-form border-right pr-2" action="<?php echo esc_url( wc_get_cart_url() ); ?>" method="post">

			<?php do_action( 'woocommerce_before_cart_table' ); ?>

				<table class="shop_table shop_table_responsive cart woocommerce-cart-form__contents" cellspacing="0">
				<thead>
					<tr>
						<th class="product-remove">&nbsp;</th>
						<th class="product-thumbnail">&nbsp;</th>
						<th class="product-name"><?php esc_html_e( 'Product', 'secretum' ); ?></th>
						<th class="product-price"><?php esc_html_e( 'Price', 'secretum' ); ?></th>
						<th class="product-quantity"><?php esc_html_e( 'Quantity', 'secretum' ); ?></th>
						<th class="product-subtotal"><?php esc_html_e( 'Total', 'secretum' ); ?></th>
					</tr>
				</thead>
				<tbody>

				<?php do_action( 'woocommerce_before_cart_contents' ); ?>

				<?php
				foreach ( WC()->cart->get_cart() as $secretum_cart_item_key => $secretum_cart_item ) {
					$secretum_product    = apply_filters( 'woocommerce_cart_item_product', $secretum_cart_item['data'], $secretum_cart_item, $secretum_cart_item_key );
					$secretum_product_id = apply_filters( 'woocommerce_cart_item_product_id', $secretum_cart_item['product_id'], $secretum_cart_item, $secretum_cart_item_key );

					if ( $secretum_product && $secretum_product->exists() && $secretum_cart_item['quantity'] > 0 && apply_filters( 'woocommerce_cart_item_visible', true, $secretum_cart_item, $secretum_cart_item_key ) ) {
						$secretum_product_permalink = apply_filters( 'woocommerce_cart_item_permalink', $secretum_product->is_visible() ? $secretum_product->get_permalink( $secretum_cart_item ) : '', $secretum_cart_item, $secretum_cart_item_key );
						?>
						<tr class="woocommerce-cart-form__cart-item <?php echo esc_attr( apply_filters( 'woocommerce_cart_item_class', 'cart_item', $secretum_cart_item, $secretum_cart_item_key ) ); ?>">
							<td class="product-remove">
								<?php
								$secretum_cart_item_remove_link = apply_filters(
									'woocommerce_cart_item_remove_link',
									sprintf(
										'<a href="%s" class="remove" aria-label="%s" data-product_id="%s" data-product_sku="%s">&times;</a>',
										esc_url( wc_get_cart_remove_url( $secretum_cart_item_key ) ),
										__( 'Remove this item', 'secretum' ),
										esc_attr( $secretum_product_id ),
										esc_attr( $secretum_product->get_sku() )
									),
									$secretum_cart_item_key
								);

								echo wp_kses(
									$secretum_cart_item_remove_link,
									array(
										'a' => array(
											'href'       => true,
											'class'      => true,
											'aria-label' => true,
											'data-product_id' => true,
											'data-product_sku' => true,
										),
									)
								);
								?>
							</td>
							<td class="product-thumbnail">
							<?php
							$secretum_woo_thumbnail = apply_filters( 'woocommerce_cart_item_thumbnail', $secretum_product->get_image(), $secretum_cart_item, $secretum_cart_item_key );

							if ( ! $secretum_product_permalink ) {
								echo wp_kses(
									$secretum_woo_thumbnail,
									array(
										'img' => array(
											'role'  => true,
											'alt'   => true,
											'src'   => true,
											'style' => true,
										),
									)
								);
							} else {
								echo wp_kses(
									sprintf( '<a href="%s">%s</a>', esc_url( $secretum_product_permalink ), $secretum_woo_thumbnail ),
									array(
										'a'   => array(
											'href' => true,
										),
										'img' => array(
											'role'  => true,
											'alt'   => true,
											'src'   => true,
											'style' => true,
										),
									)
								);
							}
							?>
							</td>
							<td class="product-name" data-title="<?php esc_html_e( 'Product', 'secretum' ); ?>">
							<?php
							if ( ! $secretum_product_permalink ) {
								echo wp_kses_post( apply_filters( 'woocommerce_cart_item_name', $secretum_product->get_name(), $secretum_cart_item, $secretum_cart_item_key ) . '&nbsp;' );
							} else {
								echo wp_kses_post( apply_filters( 'woocommerce_cart_item_name', sprintf( '<a href="%s">%s</a>', esc_url( $secretum_product_permalink ), $secretum_product->get_name() ), $secretum_cart_item, $secretum_cart_item_key ) );
							}

							do_action( 'woocommerce_after_cart_item_name', $secretum_cart_item, $secretum_cart_item_key );

							echo wp_kses_post( wc_get_formatted_cart_item_data( $secretum_cart_item ) );

							// @about Backorder notification.
							if ( $secretum_product->backorders_require_notification() && $secretum_product->is_on_backorder( $secretum_cart_item['quantity'] ) ) {
								echo wp_kses_post( apply_filters( 'woocommerce_cart_item_backorder_notification', '<p class="backorder_notification">' . esc_html__( 'Available on backorder', 'secretum' ) . '</p>', $secretum_product_id ) );
							}

							?>
							</td>
							<td class="product-price" data-title="<?php esc_html_e( 'Price', 'secretum' ); ?>">
								<?php echo wp_kses_post( apply_filters( 'woocommerce_cart_item_price', WC()->cart->get_product_price( $secretum_product ), $secretum_cart_item, $secretum_cart_item_key ) ); ?>
							</td>
							<td class="product-quantity" data-title="<?php esc_html_e( 'Quantity', 'secretum' ); ?>">
							<?php
							if ( $secretum_product->is_sold_individually() ) {
								$secretum_product_quantity = sprintf( '1 <input type="hidden" name="cart[%s][qty]" value="1" />', $secretum_cart_item_key );
							} else {
								$secretum_product_quantity = woocommerce_quantity_input(
									array(
										'input_name'   => "cart[{$secretum_cart_item_key}][qty]",
										'input_value'  => $secretum_cart_item['quantity'],
										'max_value'    => $secretum_product->get_max_purchase_quantity(),
										'min_value'    => '0',
										'product_name' => $secretum_product->get_name(),
									),
									$secretum_product,
									false
								);
							}

							echo wp_kses(
								apply_filters( 'woocommerce_cart_item_quantity', $secretum_product_quantity, $secretum_cart_item_key, $secretum_cart_item ),
								array(
									'input' => array(
										'type'            => true,
										'id'              => true,
										'class'           => true,
										'step'            => true,
										'min'             => true,
										'max'             => true,
										'name'            => true,
										'value'           => true,
										'title'           => true,
										'size'            => true,
										'pattern'         => true,
										'inputmode'       => true,
										'aria-labelledby' => true,
									),
								)
							);
							?>
							</td>
							<td class="product-subtotal" data-title="<?php esc_html_e( 'Total', 'secretum' ); ?>">
								<?php echo wp_kses_post( apply_filters( 'woocommerce_cart_item_subtotal', WC()->cart->get_product_subtotal( $secretum_product, $secretum_cart_item['quantity'] ), $secretum_cart_item, $secretum_cart_item_key ) ); ?>
							</td>
						</tr>
						<?php
					}
				}
				?>

				<?php do_action( 'woocommerce_cart_contents' ); ?>

				<tr>
					<td colspan="4" class="actions">
					<?php if ( wc_coupons_enabled() ) { ?>
						<div class="coupon row">
							<div class="col-xs pr-2">
								<label for="coupon_code"><?php esc_html_e( 'Coupon:', 'secretum' ); ?></label> <input type="text" name="coupon_code" class="input-text" id="coupon_code" value="" placeholder="<?php esc_html_e( 'Coupon code', 'secretum' ); ?>" />
							</div>
							<div class="col-xs">
								<button type="submit" class="button" name="apply_coupon" value="<?php esc_html_e( 'Apply coupon', 'secretum' ); ?>"><?php esc_html_e( 'Apply coupon', 'secretum' ); ?></button>
							</div>
							<?php do_action( 'woocommerce_cart_coupon' ); ?>
						</div>
					<?php } ?>
					</td>
					<td colspan="2" class="actions">
						<button type="submit" class="button" name="update_cart" value="<?php esc_html_e( 'Update cart', 'secretum' ); ?>"><?php esc_html_e( 'Update cart', 'secretum' ); ?></button>

						<?php do_action( 'woocommerce_cart_actions' ); ?>

						<?php wp_nonce_field( 'woocommerce-cart', 'woocommerce-cart-nonce' ); ?>
					</td>
				</tr>

				<?php do_action( 'woocommerce_after_cart_contents' ); ?>
			</tbody>
			</table>

			<?php do_action( 'woocommerce_after_cart_table' ); ?>
		</form>
	</div>

	<div class="col-md-4">
		<div class="cart-collaterals pl-2">
			<?php
				/**
				 * Cart collaterals hook.
				 *
				 * @hooked woocommerce_cross_sell_display
				 * @hooked woocommerce_cart_totals - 10
				 */
				do_action( 'woocommerce_cart_collaterals' );
			?>
		</div>
	</div><!-- .col-md-4 -->
</div><!-- .row -->

<?php
do_action( 'woocommerce_after_cart' );
