<?php
/**
 * The Template for displaying product archives, including the main shop page which is a post type archive
 *
 * @package 	WooCommerce/Templates
 * @version     3.4.0
 *
 * @subpackage 	Secretum/WooCommerce
 * @version 	0.0.1
 */
if (! defined('ABSPATH')) { exit; }

$cols = '';

if ((is_shop() && (is_active_sidebar('sidebar-woo-storefront') || is_active_sidebar('sidebar-woo-default'))) || ((is_product_category() || is_product_tag()) && (is_active_sidebar('sidebar-woo-archives') || is_active_sidebar('sidebar-woo-default')))) {

	$cols = '-9';

}?>

<?php get_header('shop');?>

<div class="wrapper<?php do_action('secretum_body_wrapper'); do_action('secretum_body_background');?>" id="woocommerce-wrapper">

	<div class="container<?php do_action('secretum_body_container'); ?>" id="content" tabindex="-1">

		<div class="row">

			<div class="col-md<?php echo $cols;?> content-area" id="primary">

				<main class="site-main" id="main">

					<header class="woocommerce-products-header">

						<?php if (apply_filters('woocommerce_show_page_title', true)) { ?>

							<h1 class="woocommerce-products-header__title page-title"><?php woocommerce_page_title(); ?></h1>

						<?php } ?>

						<?php
							/**
							 * Hook: woocommerce_archive_description.
							 *
							 * @hooked woocommerce_taxonomy_archive_description - 10
							 * @hooked woocommerce_product_archive_description - 10
							 */
							do_action('woocommerce_archive_description');
						?>

					</header>

					<?php
					if (woocommerce_product_loop()) {

						/**
						 * Hook: woocommerce_before_shop_loop.
						 *
						 * @hooked wc_print_notices - 10
						 * @hooked woocommerce_result_count - 20
						 * @hooked woocommerce_catalog_ordering - 30
						 */
						do_action('woocommerce_before_shop_loop');

						woocommerce_product_loop_start();

						if (wc_get_loop_prop('total')) {
							while (have_posts()) {
								the_post();

								/**
								 * Hook: woocommerce_shop_loop.
								 *
								 * @hooked WC_Structured_Data::generate_product_data() - 10
								 */
								do_action('woocommerce_shop_loop');

								wc_get_template_part('content', 'product');
							}
						}

						woocommerce_product_loop_end();

						/**
						 * Hook: woocommerce_after_shop_loop.
						 *
						 * @hooked woocommerce_pagination - 10
						 */
						do_action('woocommerce_after_shop_loop');

					} else {

						/**
						 * Hook: woocommerce_no_products_found.
						 *
						 * @hooked wc_no_products_found - 10
						 */
						do_action('woocommerce_no_products_found');

					} ?>

				</main><!-- .site-main -->

			</div><!-- .content-area -->

			<?php get_template_part('template-parts/sidebar/woo', 'sidebar-right'); ?>

		</div><!-- .row -->

	</div><!-- .container -->

</div><!-- .wrapper -->

<?php get_footer('shop');
