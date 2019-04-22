<?php
/**
 * Empty cart page
 *
 * @package    WooCommerce
 * @subpackage Secretum
 * @author     SecretumTheme <author@secretumtheme.com>
 * @copyright  2018-2019 Secretum
 * @version    3.5.0
 * @license    https://github.com/SecretumTheme/secretum/blob/master/license.txt GPL-2.0
 * @link       https://github.com/SecretumTheme/secretum/blob/master/woocommerce/cart/cart-empty.php
 * @since      1.0.0
 */

namespace Secretum;

if ( true !== defined( 'ABSPATH' ) ) {
	exit;
}

if ( true === secretum_is_woobookings() ) {
	?>
	<p class="cart-empty text-center">
		<?php echo wp_kses_post( apply_filters( 'secretum_cart_is_empty_text', __( 'You currently have no temporarily reserved bookings in your cart.', 'secretum' ), 10, 1 ) ); ?>
	</p>

	<?php if ( wc_get_page_id( 'shop' ) > 0 ) { ?>
		<p class="return-to-shop text-center">
			<a class="button wc-backward" href="<?php echo esc_url( apply_filters( 'woocommerce_return_to_shop_redirect', wc_get_page_permalink( 'shop' ) ) ); ?>">
				<?php echo wp_kses_post( apply_filters( 'secretum_return_to_shop_text', __( 'Return To Shop', 'secretum' ), 10, 1 ) ); ?>
			</a>
		</p>
		<?php
	}
} else {
	?>
	<p class="cart-empty text-center">
		<?php echo wp_kses_post( apply_filters( 'secretum_cart_is_empty_text', __( 'Your cart is currently empty.', 'secretum' ), 10, 1 ) ); ?>
	</p>

	<?php if ( wc_get_page_id( 'shop' ) > 0 ) { ?>
		<p class="return-to-shop text-center">
			<a class="button wc-backward" href="<?php echo esc_url( apply_filters( 'woocommerce_return_to_shop_redirect', wc_get_page_permalink( 'shop' ) ) ); ?>">
				<?php echo wp_kses_post( apply_filters( 'secretum_return_to_shop_text', __( 'Return to shop', 'secretum' ), 10, 1 ) ); ?>
			</a>
		</p>
		<?php
	}
}
