<?php
/**
 * Template part for displaying posts
 *
 * @package WordPress
 * @subpackage Secretum_Theme
 */
?>

<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">

	<header class="entry-header">

		<?php if (is_single()) { ?>

			<?php the_title('<h1 class="entry-title mb-4 afterline afterline-secondary afterline-w20">', '</h1>'); ?>

		<?php } elseif (is_front_page() && is_home()) { ?>

			<?php the_title('<h3 class="entry-title mb-4 afterline afterline-secondary afterline-w20"><a href="' . esc_url(get_permalink()) . '" rel="bookmark">', '</a></h3>'); ?>

		<?php } else { ?>

			<?php the_title('<h2 class="entry-title mb-4 afterline afterline-secondary afterline-w20"><a href="' . esc_url(get_permalink()) . '" rel="bookmark">', '</a></h2>'); ?>

		<?php } ?>

		<?php get_template_part('template-parts/post/content', 'entry_meta'); ?>

	</header><!-- .entry-header -->

	<div class="entry-content">

		<?php
			the_content();

			wp_link_pages(
				array(
					'before' => '<div class="page-links py-3 mt-5 text-center">' . secretum_text('content_pages_text'),
					'after'  => '</div>',
				)
			);
		?>

	</div><!-- .entry-content -->

	<footer class="entry-footer py-4">

		<?php get_template_part('template-parts/post/content', 'cat_links'); ?>

		<?php get_template_part('template-parts/post/content', 'tags_links'); ?>

		<?php get_template_part('template-parts/post/content', 'comments_links'); ?>

		<?php secretum_edit_link(); ?>

	</footer><!-- .entry-footer -->

</article><!-- #post-## -->
