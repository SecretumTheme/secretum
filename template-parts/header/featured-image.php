<?php
/**
 * Featured Image
 *
 * @package Secretum
 */

namespace Secretum;

// @about If Conditions Match Return Featured Image
if ( ( is_single() || is_page() ) && has_post_thumbnail( get_queried_object_id() ) && ! secretum_mod( 'featured_image_status' ) && ! is_front_page() && ! is_home() && ! is_product() ) {
?>
	<div class="wrapper<?php secretum_featured_image_wrapper(); ?>">
		<div class="container<?php secretum_featured_image_container(); ?>">
			<div class="featured-image-header">
				<?php secretum_featured_image_display(); ?>
			</div><!-- .featured-image-header -->
		</div><!-- .featured-image-header -->
	</div><!-- .featured-image-header -->
<?php
}
