<?php
/**
 * Booking product add to cart.
 *
 * @package    Secretum
 * @subpackage Theme\WooCommerce-Bookings\Single-Product\Add-To-Cart
 * @author     SecretumTheme <author@secretumtheme.com>
 * @copyright  2018-2019 Secretum
 * @version    1.10.0
 * @license    https://github.com/SecretumTheme/secretum/blob/master/license.txt GPL-2.0
 * @link       https://github.com/SecretumTheme/secretum/blob/master/woocommerce-bookings/single-product/add-to-cart/booking.php
 * @since      1.1.2
 */

namespace Secretum;

global $product;

if ( true !== $product->is_purchasable() ) {
	return;
}

$secretum_nonce = wp_create_nonce( 'find-booked-day-blocks' );

do_action( 'woocommerce_before_add_to_cart_form' );
?>
<noscript><?php esc_html_e( 'Your browser must support JavaScript in order to make a booking.', 'secretum' ); ?></noscript>
<form class="cart" method="post" enctype='multipart/form-data'data-nonce="<?php echo esc_attr( $secretum_nonce ); ?>">
	<div class="form-group">
		<div id="wc-bookings-booking-form" class="wc-bookings-booking-form" style="display:none">
			<h3 class="widget-title"><?php secretum_text( 'booking_cart_title', true ); ?></h3>
			<?php do_action( 'woocommerce_before_booking_form' ); ?>
			<?php $booking_form->output(); ?>
			<div class="wc-bookings-booking-cost" style="display:none"></div>
		</div>

		<?php do_action( 'woocommerce_before_add_to_cart_button' ); ?>

		<input type="hidden" name="add-to-cart" value="<?php echo esc_attr( is_callable( [ $product, 'get_id' ] ) ? $product->get_id() : $product->id ); ?>" class="wc-booking-product-id" />
		<button type="submit" class="wc-bookings-booking-form-button single_add_to_cart_button button alt disabled" style="display:none"><?php echo esc_html( $product->single_add_to_cart_text() ); ?></button>
		<?php do_action( 'woocommerce_after_add_to_cart_button' ); ?>
	</div><!-- .form-group -->
</form>
<?php
do_action( 'woocommerce_after_add_to_cart_form' );
