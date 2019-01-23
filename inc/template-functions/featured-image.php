<?php
/**
 * Functions related to theme display or manipulation
 *
 * @package Secretum
 */

namespace Secretum;


/**
 * Display Featured Image Post Thumbnail
 */
function secretum_featured_image_display() {
	echo get_the_post_thumbnail(
		get_queried_object_id(),
		'secretum-featured-image',
		[
			'class' => 'img-fluid',
		]
	);
}


/**
 * Wrapper Classes
 */
function secretum_featured_image_wrapper() {
	$wrapper = \Secretum\Wrapper::classes( 'featured_image' );
	$borders = \Secretum\Borders::classes( 'featured_image_wrapper' );
	echo esc_html( $wrapper . $borders );
}


/**
 * Container Classes
 */
function secretum_featured_image_container() {
	// @about Classes
	$container = secretum_mod( 'featured_image_container_type', 'attr', false );
	$background = secretum_mod( 'featured_image_container_background_color', 'attr', true );
	$border = secretum_mod( 'featured_image_container_border_type', 'attr', true ) . secretum_mod( 'featured_image_container_border_color', 'attr', true );
	$margin = secretum_mod( 'featured_image_container_margin_x', 'attr', true ) . secretum_mod( 'featured_image_container_margin_y', 'attr', true );
	$padding = secretum_mod( 'featured_image_container_padding_x', 'attr', true ) . secretum_mod( 'featured_image_container_padding_y', 'attr', true );

	echo esc_html( apply_filters( 'secretum_featured_image_container', $container . $background . $border . $margin . $padding, 10, 1 ) );
}
