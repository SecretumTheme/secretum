<?php
/**
 * The Template for displaying all single products & bookings
 *
 * @package 	WooCommerce/Templates
 * @version     1.6.4
 *
 * @subpackage 	Secretum/WooCommerce
 * @version     0.0.1
 */
if (! defined('ABSPATH')) { exit; }

// Set Columns
$cols = (! class_exists('WC_Bookings') && (is_active_sidebar('sidebar-woo-product') || is_active_sidebar('sidebar-woo-default'))) ? '-9' : '';
?>

<?php get_header('shop'); ?>

<div class="wrapper<?php echo secretum_body_wrapper(); ?>" id="woocommerce-wrapper">

	<div class="container<?php echo secretum_body_container(); ?>" id="content" tabindex="-1">

		<div class="row">

			<?php get_template_part('template-parts/sidebar/woo', 'sidebar-left'); ?>

			<div class="col-md<?php echo $cols;?> content-area" id="primary">

				<main class="site-main" id="main">

					<?php while (have_posts()) { the_post(); ?>

						<?php if (get_class($product) == 'WC_Product_Booking') { ?>

							<?php //wc_get_template_part('content', 'single-booking'); ?>

							<!-- start content single booking template -->

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

							?><!-- end content single booking template -->

						<?php } else { ?>

							<?php wc_get_template_part('content', 'single-product'); ?>

						<?php } ?>

					<?php } ?>

				</main><!-- .site-main -->

			</div><!-- .content-area -->

			<?php get_template_part('template-parts/sidebar/woo', 'sidebar-right'); ?>

		</div><!-- .row -->

	</div><!-- .container -->

</div><!-- .wrapper -->

<?php get_footer('shop');
