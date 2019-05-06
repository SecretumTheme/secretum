<?php
/**
 * Template part for displaying posts with excerpts
 *
 * @package    Secretum
 * @subpackage Template-Parts
 * @author     SecretumTheme <author@secretumtheme.com>
 * @copyright  2018-2019 Secretum
 * @license    https://github.com/SecretumTheme/secretum/blob/master/license.txt GPL-2.0
 * @link       https://github.com/SecretumTheme/secretum/blob/master/template-parts/post/content-excerpt.php
 * @since      1.0.0
 */

namespace Secretum;

?>
<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">
	<header class="entry-header">
		<?php
		if ( true === is_single() ) {
			the_title( '<h1 class="entry-title mb-4 text-40">', '</h1>' );

		} elseif ( true === is_front_page() && true === is_home() ) {
			the_title( '<h3 class="entry-title mb-4 text-40"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h3>' );

		} else {
			the_title( '<h2 class="entry-title mb-4 text-40"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		}
		?>

		<div class="entry-meta">
			<?php get_template_part( 'template-parts/post/content', 'entry-meta' ); ?>
		</div><!-- .entry-meta -->
	</header><!-- .entry-header -->

	<div class="entry-content entry-summary">
		<?php the_excerpt(); ?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
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
