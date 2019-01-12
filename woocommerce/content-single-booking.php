<?php
/**
 * WooCommerce Bookings Template
 *
 * @package Secretum
 */

namespace Secretum;


/**
 * Hook Woocommerce_before_single_product.
 *
 * @hooked wc_print_notices - 10
 */
do_action( 'woocommerce_before_single_product' );

// @about Maybe Required
if ( post_password_required() ) {
	secretum_post_password_form();
	return;
}

// @about Get Globals
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
