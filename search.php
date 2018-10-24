<?php
/**
 * Secretum Theme: The template for displaying search results pages
 *
 * @package WordPress
 * @subpackage Secretum_Theme
 */
get_header(); ?>

<div class="wrapper<?php echo secretum_body_wrapper(); ?>" id="search-wrapper">

	<div class="container<?php echo secretum_body_container(); ?>" id="content" tabindex="-1">

		<div class="row">

			<?php get_template_part('template-parts/sidebar/sidebar', 'left'); ?>

			<div class="col-md<?php echo secretum_entry_wrapper(); ?> content-area" id="primary">

				<main class="site-main" id="main">

				<?php do_action('secretum_before_content'); ?>

				<?php if (have_posts()) {?>

					<header class="page-header border-bottom mb-5">

						<h1 class="page-title">
							<span><?php echo secretum_text('search_results_text'); ?> <?php echo get_search_query(); ?></span>
						</h1>

					</header><!-- .page-header -->

					<?php while (have_posts()) { the_post(); ?>

						<div class="content-search mb-5">

							<?php get_template_part('template-parts/post/content', 'excerpt'); ?>

						</div><!-- .content-search -->

					<?php }?>

				<?php } else {?>

					<?php get_template_part('template-parts/post/content', 'none'); ?>

				<?php }?>

				<?php do_action('secretum_after_content'); ?>

				</main><!-- .site-main -->

				<?php get_template_part('template-parts/nav/posts', 'pagination'); ?>

			</div><!-- .content-area -->

			<?php get_template_part('template-parts/sidebar/sidebar', 'right-blog'); ?>

		</div><!-- .row -->

	</div><!-- .container -->

</div><!-- .wrapper -->

<?php
get_footer();
