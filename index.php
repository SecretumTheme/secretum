<?php
/**
 * The main template file
 *
 * @package WordPress
 * @subpackage Secretum_Theme
 */
get_header(); ?>

<div class="wrapper<?php echo secretum_body_wrapper(); ?>" id="index-wrapper">

	<div class="container<?php echo secretum_body_container(); ?>" id="content" tabindex="-1">

		<div class="row">

			<?php get_template_part('template-parts/sidebar/sidebar', 'left'); ?>

			<div class="col-md<?php echo secretum_entry_wrapper(); ?> content-area" id="primary">

				<main class="site-main" id="main">

				<?php
					// Hook
					do_action('secretum_before_content');

					// If Posts
					if (have_posts()) {

						// Content Loop
						while (have_posts()) {
							the_post();

							// Post Content Template
							get_template_part('template-parts/post/content', get_post_format());
						}

					} else {
						get_template_part('template-parts/post/content', 'none');
					}

					// Hook
					do_action('secretum_after_content');
				?>

				</main><!-- .site-main -->

				<?php get_template_part('template-parts/nav/posts', 'pagination'); ?>

			</div><!-- .content-area -->

			<?php get_template_part('template-parts/sidebar/sidebar', 'right'); ?>

		</div><!-- .row -->

	</div><!-- .container -->

</div><!-- .wrapper -->

<?php
get_footer();
