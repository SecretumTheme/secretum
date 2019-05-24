<?php
/**
 * Template part for displaying a message that posts cannot be found
 *
 * @package    Secretum
 * @author     SecretumTheme <author@secretumtheme.com>
 * @copyright  2018-2019 Secretum
 * @license    https://github.com/SecretumTheme/secretum/blob/master/license.txt GPL-2.0
 * @link       https://github.com/SecretumTheme/secretum/blob/master/template-parts/post/content-none.php
 * @since      1.0.0
 */

namespace Secretum;

?>
<article class="no-results not-found">
	<header class="entry-header">
		<h1 class="entry-title mb-4 text-40"><?php secretum_text( 'nothing_found_title_text', true ); ?></h1>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php if ( true === is_home() && true === current_user_can( 'publish_posts' ) ) { ?>
			<?php echo wp_kses_post( '<p>' . __( 'Ready to publish your first post?', 'secretum' ) . ' <a href="' . esc_url( admin_url( 'post-new.php' ) ) . '">' . __( 'Get started here', 'secretum' ) . '</a>.</p>' ); ?>
			<?php } else { ?>
				<p><?php secretum_text( 'nothing_found_text', true ); ?></p>
				<?php get_search_form(); ?>
		<?php } ?>

	</div><!-- .entry-content -->
</article><!-- .no-results -->
