<?php
/**
 * Template part for displaying posts
 *
 * @package    Secretum
 * @subpackage Theme\Template-Parts\Post
 * @author     SecretumTheme <author@secretumtheme.com>
 * @copyright  2018-2019 Secretum
 * @license    https://github.com/SecretumTheme/secretum/blob/master/license.txt GPL-2.0
 * @link       https://github.com/SecretumTheme/secretum/blob/master/template-parts/post/content.php
 */

namespace Secretum;

?>
<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">
	<header class="entry-header">
		<?php
		if ( is_single() ) {
			the_title( '<h1 class="entry-title mb-4">', '</h1>' );

		} elseif ( is_front_page() && is_home() ) {
			the_title( '<h3 class="entry-title mb-4"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h3>' );

		} else {
			the_title( '<h2 class="entry-title mb-4"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		}

		get_template_part( 'template-parts/post/content', 'entry-meta' );
		?>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php
		// Hookable Action.
		do_action( 'secretum_before_entry_content' );

		the_content();

		wp_link_pages(
			array(
				'before' => '<div class="page-links py-3 mt-5 text-center">' . secretum_text( 'content_pages_text', false ),
				'after'  => '</div>',
			 )
		);

		// Hookable Action.
		do_action( 'secretum_after_entry_content' );
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer py-4">
		<?php
		// Category Links.
		get_template_part( 'template-parts/post/content', 'cat-links' );

		// Tag Links.
		get_template_part( 'template-parts/post/content', 'tags-links' );

		// Comment Link.
		get_template_part( 'template-parts/post/content', 'comments-links' );

		// Edit Link.
		secretum_edit_link( get_the_ID() );
		?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
