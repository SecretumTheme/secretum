<?php
/**
 * Functions related to theme display or manipulation
 *
 * @package    Secretum
 * @subpackage Core\Template-Functions\Author
 * @author     SecretumTheme <author@secretumtheme.com>
 * @copyright  2018-2019 Secretum
 * @license    https://github.com/SecretumTheme/secretum/blob/master/license.txt GPL-2.0
 * @link       https://github.com/SecretumTheme/secretum/blob/master/inc/template-functions/author.php
 * @since      1.0.0
 */

namespace Secretum;

/**
 * Author List Item Link List
 *
 * @since 1.0.0
 */
function secretum_author_post_list() {
	$post_text = secretum_text( 'author_posted_text', false );
	$get_url   = esc_url( get_permalink() );
	$get_time  = esc_html( get_the_time() );
	$get_iso   = esc_html( get_the_date( 'c' ) );
	$get_date  = esc_html( get_the_date() );
	$cat_text  = secretum_text( 'author_categories_text', false );
	$cat_list  = get_the_category_list( ', ' );

	echo wp_kses(
		"{$post_text} <a href=\"{$get_url}\" title=\"{$post_text} {$get_time}\" rel=\"bookmark\"><time class=\"entry-date published\" datetime=\"{$get_iso}\">{$get_date}</time></a> {$cat_text} {$cat_list}",
		[
			'a'    => [
				'href'  => true,
				'title' => true,
				'rel'   => true,
			],
			'time' => [
				'class'    => true,
				'datetime' => true,
				'rel'      => true,
			],
		]
	);

}//end secretum_author_post_list()
