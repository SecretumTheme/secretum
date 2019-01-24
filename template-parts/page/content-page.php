<?php
/**
 * Default Page Loop
 *
 * @package    Secretum
 * @subpackage Theme\Template-Parts\Page
 * @author     SecretumTheme <author@secretumtheme.com>
 * @copyright  2018-2019 Secretum
 * @license    https://github.com/SecretumTheme/secretum/blob/master/license.txt GPL-2.0
 * @link       https://github.com/SecretumTheme/secretum/blob/master/template-parts/page/content-page.php
 */

namespace Secretum;

?>
<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">
	<header class="entry-header">
		<?php the_title( '<h1 class="entry-title mb-4">', '</h1>' ); ?>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php
		// Hookable Action.
		do_action( 'secretum_before_entry_content' );

		the_content();

		wp_link_pages(
			array(
				'before' => '<div class="page-links py-3 mt-3 text-center">' . secretum_text( 'content_pages_text', false ),
				'after'  => '</div>',
			)
		);

		// Hookable Action.
		do_action( 'secretum_after_entry_content' );
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php secretum_edit_link( get_the_ID() ); ?>
	</footer><!-- .entry-footer -->
</article>
