<?php
/**
 * The template for displaying archive pages
 *
 * @package WordPress
 * @subpackage Secretum
 */
get_header();
?>
<div class="wrapper<?php echo secretum_body_wrapper(); ?>" id="archive-wrapper">
	<div class="container<?php echo secretum_body_container(); ?>" id="content" tabindex="-1">
		<div class="row">

			<?php get_template_part('template-parts/sidebar/sidebar', 'left'); ?>

			<div class="col-md<?php echo secretum_entry_wrapper(); ?> content-area" id="primary">
				<main class="site-main" id="main">
					<?php
						// Hookable Action
						do_action('secretum_before_content');

						if (have_posts()) { ?>
							<header class="page-header border-bottom mb-5">
								<?php
									the_archive_title('<h1 class="page-title">', '</h1>');
									the_archive_description('<div class="taxonomy-description">', '</div>');
								?>
							</header><!-- .page-header -->

							<?php while (have_posts()) { the_post(); ?>
								<div class="content-archive mb-5">
									<?php get_template_part('template-parts/post/content', 'excerpt'); ?>
								</div><!-- .content-archive -->
							<?php }

						// No Content Found
						} else {
							get_template_part('template-parts/post/content', 'none');
						}

						// Hookable Action
						do_action('secretum_after_content');
					?>
				</main><!-- .site-main -->

				<?php get_template_part('template-parts/nav/posts', 'pagination'); ?>

			</div><!-- .content-area -->

			<?php get_template_part('template-parts/sidebar/sidebar', 'right-blog'); ?>

		</div><!-- .row -->
	</div><!-- .container -->
</div><!-- .wrapper -->
<?php
get_footer();
