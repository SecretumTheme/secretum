<?php
/**
 * Template part for displaying content footer tag links
 *
 * @package WordPress
 * @subpackage Secretum_Theme
 */

// If Posts & Default Display
if ('post' == get_post_type() && !secretum_mod('entrymeta_tagslinks_status') && secretum_tags_list()) { ?>

	<span class="tags-links">

		<i class="fa fa-tags"></i> <?php echo secretum_text('meta_tags_text'); ?> <?php echo secretum_tags_list(); ?>

	</span><!-- .tags-links -->

<?php
}
