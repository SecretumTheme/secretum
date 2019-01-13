<?php
/**
 * The Template for displaying all single products & bookings
 *
 * @package 	WooCommerce/Templates
 * @version     1.6.4
 * @subpackage 	Secretum
 */

namespace Secretum;

get_header( 'shop' );
?>
<div class="wrapper<?php secretum_body_wrapper(); ?>" id="woocommerce-wrapper">
	<div class="container<?php secretum_body_container(); ?>" id="content" tabindex="-1">
		<div class="row">

			<?php get_template_part( 'template-parts/sidebar/woo', 'sidebar-left' ); ?>

			<div class="col-md<?php secretum_entry_wrapper(); ?> content-area" id="primary">
				<?php woocommerce_breadcrumb(); ?>

				<main class="site-main" id="main">
					<?php
					while ( have_posts() ) { the_post();
						if ( get_class( $product ) === 'WC_Product_Booking' ) {
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
						} else {
							wc_get_template_part( 'content', 'single-product' );
						}
					}
					?>
				</main><!-- .site-main -->
			</div><!-- .content-area -->

			<?php get_template_part( 'template-parts/sidebar/woo', 'sidebar-right' ); ?>
		</div><!-- .row -->
	</div><!-- .container -->
</div><!-- .wrapper -->
<?php
get_footer( 'shop' );
