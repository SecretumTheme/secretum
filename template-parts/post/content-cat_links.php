<?php
/**
 * Template part for displaying content footer category links
 *
 * @package WordPress
 * @subpackage Secretum_Theme
 */

// If Posts & Default Display Category Links
if ('post' == get_post_type() && !secretum_mod('entrymeta_catlinks_status') && secretum_categories_list()) {
?>

<span class="cat-links">

	<i class="fa fa-folder-open"></i> <?php echo secretum_text('meta_categories_text'); ?> <?php echo secretum_categories_list(); ?>

</span><!-- .cat-links -->

<?php
}
