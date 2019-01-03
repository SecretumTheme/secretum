<?php
/**
 * Template part for displaying content footer tag links
 *
 * @package WordPress
 * @subpackage Secretum
 */

// If Posts & Default Display
if ('post' == get_post_type() && !secretum_mod('entry_meta_tagslinks_status') && secretum_tags_list()) {
?>
	<span class="tags-links">
		<?php echo secretum_icon(array('svg' => 'hashtag', 'fa' => 'fa fa-tags')); ?> <?php echo secretum_text('meta_tags_text'); ?> <?php echo secretum_tags_list(); ?>
	</span><!-- .tags-links -->
<?php
}
