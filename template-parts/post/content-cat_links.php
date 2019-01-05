<?php
/**
 * Template part for displaying content footer category links
 *
 * @package WordPress
 * @subpackage Secretum
 */

// If Posts & Default Display Category Links
if ('post' == get_post_type() && !secretum_mod('entry_meta_catlinks_status') && secretum_categories_list()) {
?>
	<span class="cat-links">
		<?php echo secretum_icon(array('io' => 'folder', 'fa' => 'fa-folder-open')); ?> <?php echo secretum_text('meta_categories_text'); ?> <?php echo secretum_categories_list(); ?>
	</span><!-- .cat-links -->
<?php
}
