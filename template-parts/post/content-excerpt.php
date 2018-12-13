<?php
/**
 * Template part for displaying posts with excerpts
 *
 * @package WordPress
 * @subpackage Secretum
 */
?>
<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">
	<header class="entry-header">
		<?php
			if (is_single()) {
				the_title('<h1 class="entry-title mb-4">', '</h1>');

			} elseif (is_front_page() && is_home()) {
				the_title('<h3 class="entry-title mb-4"><a href="' . esc_url(get_permalink()) . '" rel="bookmark">', '</a></h3>');

			} else {
				the_title('<h2 class="entry-title mb-4"><a href="' . esc_url(get_permalink()) . '" rel="bookmark">', '</a></h2>');
			}
		?>

		<div class="entry-meta">
			<?php get_template_part('template-parts/post/content', 'entry_meta'); ?>
		</div><!-- .entry-meta -->
	</header><!-- .entry-header -->

	<div class="entry-content entry-summary">
		<?php the_excerpt(); ?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php
			// Category Links
			get_template_part('template-parts/post/content', 'cat_links');

			// Tag Links
			get_template_part('template-parts/post/content', 'tags_links');

			// Comment Link
			get_template_part('template-parts/post/content', 'comments_links');

			// Edit Link
			secretum_edit_link(get_the_ID());
		?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
