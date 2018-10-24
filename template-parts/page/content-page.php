<?php
/**
 * Default Page Loop
 *
 * @package WordPress
 * @subpackage Secretum_Theme
 */
?>

<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">

	<header class="entry-header">

		<?php the_title('<h1 class="entry-title mb-4">', '</h1>'); ?>

	</header><!-- .entry-header -->

	<?php echo get_the_post_thumbnail($post->ID, 'large'); ?>

	<div class="entry-content">

		<?php
			the_content();

			wp_link_pages(
				array(
					'before' => '<div class="page-links py-3 mt-3 text-center">' . secretum_text('content_pages_text'),
					'after'  => '</div>',
				)
			);
		?>

	</div><!-- .entry-content -->

	<footer class="entry-footer">

		<?php secretum_edit_link(); ?>

	</footer><!-- .entry-footer -->

</article>
