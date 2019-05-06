<?php
/**
 * Featured Image
 *
 * @package    Secretum
 * @subpackage Template-Parts
 * @author     SecretumTheme <author@secretumtheme.com>
 * @copyright  2018-2019 Secretum
 * @license    https://github.com/SecretumTheme/secretum/blob/master/license.txt GPL-2.0
 * @link       https://github.com/SecretumTheme/secretum/blob/master/template-parts/header/featured-image.php
 * @since      1.0.0
 */

namespace Secretum;

// If Feature Is Active.
if ( false !== secretum_mod( 'featured_image_status' ) ) {
	// If Single or Page, Has Thumbnail, and Not a Woo Product.
	if ( ( true === is_single() || true === is_page() ) && true === has_post_thumbnail( get_queried_object_id() ) && false === secretum_is_wooproduct() ) {
		?>
		<div class="wrapper<?php secretum_wrapper( 'featured_image' ); ?>">
			<div class="container<?php secretum_container( 'featured_image' ); ?>">
				<div class="featured-image-header">
					<?php secretum_featured_image_display(); ?>
				</div><!-- .featured-image-header -->
			</div><!-- .featured-image-header -->
		</div><!-- .featured-image-header -->
		<?php
	}
}
