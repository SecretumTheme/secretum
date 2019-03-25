<?php
/**
 * Functions related to theme display or manipulation
 *
 * @package    Secretum
 * @subpackage Core\Template-Functions\Featured-Image
 * @author     SecretumTheme <author@secretumtheme.com>
 * @copyright  2018-2019 Secretum
 * @license    https://github.com/SecretumTheme/secretum/blob/master/license.txt GPL-2.0
 * @link       https://github.com/SecretumTheme/secretum/blob/master/inc/template-functions/featured-image.php
 * @since      1.0.0
 */

namespace Secretum;

/**
 * Display Featured Image Post Thumbnail
 *
 * @since 1.0.0
 */
function secretum_featured_image_display() {
	$thumbnail_html = get_the_post_thumbnail(
		get_queried_object_id(),
		'secretum-featured-image',
		[
			'class' => 'img-fluid',
		]
	);

	echo wp_kses(
		apply_filters( 'secretum_featured_image_' . get_queried_object_id(), $thumbnail_html, 10, 1 ),
		[
			'div' => [
				'class' => true,
			],
			'img' => [
				'width'  => true,
				'height' => true,
				'src'    => true,
				'class'  => true,
				'alt'    => true,
			],
		]
	);

}//end secretum_featured_image_display()
