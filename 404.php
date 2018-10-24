<?php
/**
 * Template for displaying 404 pages (not found)
 *
 * @package WordPress
 * @subpackage Secretum_Theme
 */
get_header(); ?>

<div class="wrapper<?php echo secretum_body_wrapper(); ?>" id="error-wrapper">

	<div class="container<?php echo secretum_body_container(); ?>" id="content" tabindex="-1">

		<div class="row">

			<div class="col-md<?php echo secretum_entry_columns(); ?> content-area" id="primary">

				<main class="site-main" id="main">

					<?php do_action('secretum_before_content'); ?>

					<section class="error-404 not-found">

						<header class="entry-header">

							<h1 class="page-title"><?php echo secretum_text('error_document_title'); ?></h1>

						</header><!-- .entry-header -->

						<div class="page-content">

							<p><?php echo secretum_text('error_document_text'); ?></p>

							<?php get_search_form(); ?>

							<hr class="mt-5" />

							<?php the_widget('WP_Widget_Recent_Posts'); ?>

							<hr />

							<?php the_widget('WP_Widget_Archives'); ?>

						</div><!-- .page-content -->

						<footer class="entry-footer">

							<hr />

							<?php the_widget('WP_Widget_Tag_Cloud'); ?>

						</footer><!-- .entry-footer -->

					</section>

					<?php do_action('secretum_after_content'); ?>

				</main><!-- .site-main -->

			</div><!-- .content-area -->

		</div><!-- .row -->

	</div><!-- .container -->

</div><!-- .wrapper -->

<?php
get_footer();
