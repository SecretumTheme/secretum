<?php
/**
 * Featured Image
 *
 * @package WordPress
 * @subpackage Secretum
 */

// If Conditions Match Return Featured Image
if ((is_single() || (is_page() && !is_front_page() && !is_home())) && has_post_thumbnail(get_queried_object_id() || !is_product())) {
?>
<div class="featured-image-header">
	<?php echo get_the_post_thumbnail(get_queried_object_id(), 'secretum-featured-image'); ?>
</div><!-- .featured-image-header -->
<?php
}
