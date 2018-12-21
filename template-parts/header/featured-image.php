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
	<div class="wrapper<?php echo secretum_featured_image_wrapper(); ?>">
		<div class="container<?php echo secretum_featured_image_container(); ?>">
			<div class="featured-image-header">
				<?php echo get_the_post_thumbnail(get_queried_object_id(), 'secretum-featured-image', array('class' => 'img-fluid')); ?>
			</div><!-- .featured-image-header -->
		</div><!-- .featured-image-header -->
	</div><!-- .featured-image-header -->
<?php
}
