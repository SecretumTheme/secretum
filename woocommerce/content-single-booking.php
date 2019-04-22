<?php
/**
 * WooCommerce Bookings Template
 *
 * @package    WooCommerce
 * @subpackage Secretum
 * @author     SecretumTheme <author@secretumtheme.com>
 * @copyright  2018-2019 Secretum
 * @license    https://github.com/SecretumTheme/secretum/blob/master/license.txt GPL-2.0
 * @link       https://github.com/SecretumTheme/secretum/blob/master/woocommerce/content-single-booking.php
 * @since      1.0.0
 */

namespace Secretum;

if ( true !== defined( 'ABSPATH' ) ) {
	exit;
}

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

// Get Globals.
global $post, $product;
?>
<div id="product-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="row">
		<?php wc_get_template( 'single-product/title.php' ); ?>
	</div>
	<div class="row">
		<div class="col-md-7">
			<?php the_content(); ?>
		</div>
		<div class="summary entry-summary col-md">
		<?php
		do_action( 'woocommerce_booking_add_to_cart' );
		wc_get_template( 'single-product/price.php' );

		if ( post_type_supports( 'product', 'comments' ) ) {
			wc_get_template( 'single-product/rating.php' );
		}

		wc_get_template( 'single-product/meta.php' );
		wc_get_template( 'single-product/share.php' );

		echo '<hr />';

		wc_get_template( 'single-product/short-description.php' );
		?>
		</div>
	</div>
</div>
<?php
do_action( 'woocommerce_after_single_product' );
