<?php
/**
 * Functions related to theme display or manipulation
 *
 * @package    Secretum
 * @subpackage Core\Template-Functions\Post-Navigation
 * @author     SecretumTheme <author@secretumtheme.com>
 * @copyright  2018-2019 Secretum
 * @license    https://github.com/SecretumTheme/secretum/blob/master/license.txt GPL-2.0
 * @link       https://github.com/SecretumTheme/secretum/blob/master/inc/template-functions/post-navigation.php
 */

namespace Secretum;


/**
 * Display Custom Post Navigation Links
 *
 * @source https://developer.wordpress.org/reference/functions/get_the_post_navigation/
 *
 * @param array $args get_previous_post_link() & get_next_post_link() values.
 */
function secretum_do_post_navigation( $args = array() ) {
	$args = wp_parse_args( $args, array(
		'prev_text' 			=> '%title',
		'next_text' 			=> '%title',
		'in_same_term' 			=> false,
		'excluded_terms' 		=> '',
		'taxonomy' 				=> 'category',
		'screen_reader_text' 	=> esc_html__( 'Post navigation', 'secretum' ),
	) );

	$navigation = '';

	// @codingStandardsIgnoreLine
	$previous = get_previous_post_link(
		'<div class="nav-previous">%link</div>',
		$args['prev_text'],
		$args['in_same_term'],
		$args['excluded_terms'],
		$args['taxonomy']
	);

	// @codingStandardsIgnoreLine
	$next = get_next_post_link(
		'<div class="nav-next">%link</div>',
		$args['next_text'],
		$args['in_same_term'],
		$args['excluded_terms'],
		$args['taxonomy']
	);

	// Only add markup if there's somewhere to navigate to.
	if ( $previous || $next ) {
		// Build Prevous Return Home Link.
		if ( ! $previous ) {
			// Home Icon.
			$home_icon = secretum_icon( [
				'fi' 	=> 'home',
				'fa' 	=> 'fa-home',
				'echo' 	=> false,
			] );

			$home_url 	= esc_html( get_home_url( '/' ) );
			$home_text 	= esc_html__( 'Return Home', 'secretum' );
			$previous 	= "<div class=\"nav-previous\"><a href=\"{$home_url}\" rel=\"home\"><span class=\"screen-reader-text\">{$home_text}</span><span class=\"nav-title float-sm-left\"><span aria-hidden=\"true\" class=\"nav-subtitle\">{$home_icon} {$home_text}</span></span></a></div>";
		}

		$navigation = _navigation_markup( $previous . $next, 'post-navigation', $args['screen_reader_text'] );
	}

	echo wp_kses(
		$navigation,
		[
			'i' 	=> [
				'class' 		=> true,
				'aria-hidden'	=> true,
			],
			'div' 	=> [
				'class' 		=> true,
			],
			'span' 	=> [
				'class' 		=> true,
				'aria-hidden' 	=> true,
			],
			'a' 	=> [
				'href' 			=> true,
				'rel' 			=> true,
			],
		]
	);
}
