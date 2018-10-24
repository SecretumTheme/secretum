<?php
/**
 * Template part for displaying a message that posts cannot be found
 *
 * @package WordPress
 * @subpackage Secretum_Theme
 */
?>

<article class="no-results not-found">

	<header class="entry-header">

		<h1 class="entry-title mb-4"><?php echo secretum_text('nothing_found_title_text'); ?></h1>

	</header><!-- .entry-header -->

	<div class="entry-content">

		<?php if (is_home() && current_user_can('publish_posts')) { ?>

			<p><?php printf(__('Ready to publish your first post? <a href="%1$s">Get started here</a>.', 'secretum'), esc_url(admin_url('post-new.php'))); ?></p>

		<?php } else { ?>

			<p><?php echo secretum_text('nothing_found_text'); ?></p>

			<?php get_search_form(); ?>

		<?php } ?>

	</div><!-- .entry-content -->

</article><!-- .no-results -->
