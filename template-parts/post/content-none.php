<?php
/**
 * Template part for displaying a message that posts cannot be found
 *
 * @package Secretum
 */

namespace Secretum;

?>
<article class="no-results not-found">
	<header class="entry-header">
		<h1 class="entry-title mb-4"><?php secretum_text( 'nothing_found_title_text', true ); ?></h1>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php
		if ( is_home() && current_user_can( 'publish_posts' ) ) {
			echo '<p>' . esc_html__( 'Ready to publish your first post?', 'secretum' ) . ' <a href="' . esc_url( admin_url( 'post-new.php' ) ) ) . '">' . esc_html__( 'Get started here', 'secretum' ) . '</a>.</p>';
		} else {
		?>
			<p><?php secretum_text( 'nothing_found_text', true ); ?></p>
			<?php get_search_form();
		}
		?>

	</div><!-- .entry-content -->
</article><!-- .no-results -->
