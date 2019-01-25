<?php
/**
 * Featured Image
 *
 * @package    Secretum
 * @subpackage Theme\Template-Parts\Header
 * @author     SecretumTheme <author@secretumtheme.com>
 * @copyright  2018-2019 Secretum
 * @license    https://github.com/SecretumTheme/secretum/blob/master/license.txt GPL-2.0
 * @link       https://github.com/SecretumTheme/secretum/blob/master/template-parts/header/featured-image.php
 * @since      1.0.0
 */

namespace Secretum;

// If Conditions Match Return Featured Image.
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
