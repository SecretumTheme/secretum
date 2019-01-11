<?php
/**
 * Functions related to theme display or manipulation
 *
 * @package Secretum
 */

namespace Secretum;


/**
 * Author List Item Link List
 */
function secretum_author_post_list() {
	$post_text 	= secretum_text( 'author_posted_text', false );
	$get_url 	= esc_url( get_permalink() );
	$get_time 	= esc_attr( get_the_time() );
	$get_iso 	= esc_attr( get_the_date( 'c' ) );
	$get_date 	= esc_attr( get_the_date() );
	$cat_text 	= secretum_text( 'author_categories_text', false );
	$cat_list 	= get_the_category_list( ', ' );

	echo wp_kses(
		"{$post_text} <a href=\"{$get_url}\" title=\"{$post_text} {$get_time}\" rel=\"bookmark\"><time class=\"entry-date published\" datetime=\"{$get_iso}\">{$get_date}</time></a> {$cat_text} {$cat_list}",
		[
			'a' 	=> [
				'href' 		=> true,
				'title' 	=> true,
				'rel' 		=> true,
			],
			'time' 	=> [
				'class' 	=> true,
				'datetime' 	=> true,
				'rel' 		=> true,
			],
		]
	);
}
