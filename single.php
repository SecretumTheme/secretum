<?php
/**
 * The template for displaying all single posts
 *
 * @package WordPress
 * @subpackage Secretum_Theme
 */
get_header(); ?>

<div class="wrapper<?php echo secretum_body_wrapper(); ?>" id="single-wrapper">

	<div class="container<?php echo secretum_body_container(); ?>" id="content" tabindex="-1">

		<div class="row">

			<?php get_template_part('template-parts/sidebar/sidebar', 'left'); ?>

			<div class="col-md<?php echo secretum_entry_wrapper(); ?> content-area" id="primary">

				<main class="site-main" id="main">

				<?php do_action('secretum_before_content'); ?>

				<?php
					// Post Loop
					while (have_posts()) {
						the_post();

						// Post Content Template
						get_template_part('template-parts/post/content', get_post_format());

						// Post Navigation
						get_template_part('template-parts/nav/post', 'navigation');

						// If Comments
						if (comments_open() || get_comments_number()) {
							// WordPress Function
							comments_template();
						}
					}
				?>

				<?php do_action('secretum_after_content'); ?>

				</main><!-- .site-main -->

			</div><!-- .content-area -->

			<?php get_template_part('template-parts/sidebar/sidebar', 'right'); ?>

		</div><!-- .row -->

	</div><!-- .container -->

</div><!-- .wrapper -->

<?php
get_footer();
