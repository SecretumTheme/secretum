<?php
/**
 * Template part for displaying entry content only
 *
 * @package    Secretum
 * @author     SecretumTheme <author@secretumtheme.com>
 * @copyright  2018-2019 Secretum
 * @license    https://github.com/SecretumTheme/secretum/blob/master/license.txt GPL-2.0
 * @link       https://github.com/SecretumTheme/secretum/blob/master/template-parts/post/content-only.php
 * @since      1.0.0
 */

namespace Secretum;

?>
<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">
	<div class="entry-content">
		<?php
		the_content();

		wp_link_pages(
			[
				'before' => '<div class="page-links py-3 mt-5 text-center">' . secretum_text( 'content_pages_text', false ),
				'after'  => '</div>',
			]
		);
		?>
	</div><!-- .entry-content -->
</article><!-- #post-## -->

<?php secretum_edit_link( get_the_ID() ); ?>
