<?php
/**
 * Secretum Theme - WooCommerce Bookings Template
 *
 * @package 	Secretum/WooCommerce
 * @subpackage 	WooCommerce/Templates
 * @version     0.0.1
 */
if (! defined('ABSPATH')) { exit; }

global $post, $product;
?>

<?php do_action('woocommerce_before_single_product');?>

<?php
	if (post_password_required()) {

		echo get_the_password_form();

		return;
	}
?>

<div id="product-<?php the_ID(); ?>" <?php post_class(); ?>>

	<div class="row">

		<?php wc_get_template('single-product/title.php'); ?>

	</div>

	<div class="row">

		<div class="col-md-7">

			<?php the_content(); ?>

		</div>

		<div class="summary entry-summary col-md">

			<?php do_action('woocommerce_booking_add_to_cart'); ?>

			<?php wc_get_template('single-product/price.php'); ?>

			<?php 
				if (post_type_supports('product', 'comments')) {

					wc_get_template('single-product/rating.php');

				}
			?>

			<?php wc_get_template('single-product/meta.php'); ?>

			<?php wc_get_template('single-product/share.php'); ?>

			<hr />

			<?php wc_get_template('single-product/short-description.php'); ?>

		</div>

	</div>

</div>

<?php do_action('woocommerce_after_single_product');
