<?php
/**
 * Default Page Loop
 *
 * @package Secretum
 */

namespace Secretum;

?>
<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">
	<header class="entry-header">
		<?php the_title( '<h1 class="entry-title mb-4">', '</h1>' ); ?>
	</header><!-- .entry-header -->

	<?php // @edit Maybe add back echo get_the_post_thumbnail( $post->ID, 'large' ); ?>

	<div class="entry-content">
		<?php
		// @about Hookable Action
		do_action( 'secretum_before_entry_content' );

		the_content();

		wp_link_pages(
			array(
				'before' => '<div class="page-links py-3 mt-3 text-center">' . secretum_text( 'content_pages_text', false ),
				'after'  => '</div>',
			)
		);

		// @about Hookable Action
		do_action( 'secretum_after_entry_content' );
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php secretum_edit_link( get_the_ID() ); ?>
	</footer><!-- .entry-footer -->
</article>
