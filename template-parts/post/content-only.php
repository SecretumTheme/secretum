<?php
/**
 * Template part for displaying entry content only
 *
 * @package WordPress
 * @subpackage Secretum_Theme
 */
?>

<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">

	<div class="entry-content">

		<?php
			the_content();

			wp_link_pages(
				array(
					'before' => '<div class="page-links py-3 mt-5 text-center">' . secretum_text('content_pages_text'),
					'after'  => '</div>',
				)
			);

			secretum_edit_link();
		?>

	</div><!-- .entry-content -->

</article><!-- #post-## -->
