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
 * @since      1.0.0
 */

namespace Secretum;

/**
 * Display Custom Post Navigation Links.
 *
 * Adds accessibility features
 * Adds icons from foundation and font-awesome
 * Adds home icon for last page
 * Removes next html on first post
 * Filters HTML through wp_kses()
 *
 * @todo Move to class.
 *
 * @since 1.0.0
 */
function secretum_post_navigation() {
	// Get Prev/Next Post Objects.
	$prev_post = get_previous_post();
	$next_post = get_next_post();

	// Text Strings.
	$text_heading = secretum_text( 'post_navigation_screenreader' );
	$text_prev    = secretum_text( 'post_navigation_prev_text' );
	$text_next    = secretum_text( 'post_navigation_next_text' );

	// Prev Post Link & Title.
	if ( true === isset( $prev_post->ID ) && true === isset( $prev_post->post_title ) ) {
		// Left Arrow Icon.
		$left_icon = secretum_icon(
			[
				'fi'   => 'arrow-left',
				'fa'   => 'fa-angle-left',
				'echo' => false,
			]
		);

		$prev_link  = get_permalink( $prev_post->ID );
		$prev_title = $prev_post->post_title;
		$prev_icon  = $left_icon;

		$prev_html  = '<div class="nav-previous float-sm-left">';
		$prev_html .= "{$prev_icon} <a href=\"{$prev_link}\" rel=\"prev\"><span class=\"meta-nav\" aria-hidden=\"true\">{$text_prev}</span><span class=\"screen-reader-text\">{$text_prev}: {$prev_title}</span></a>";
		$prev_html .= "<br /><a href=\"{$prev_link}\" rel=\"prev\"><span class=\"post-title\">{$prev_title}</span></a>";
		$prev_html .= '</div><!-- .nav-previous -->';

	} else {
		// Home Icon.
		$home_icon = secretum_icon(
			[
				'fi'   => 'home',
				'fa'   => 'fa-home',
				'echo' => false,
			]
		);

		$prev_link  = get_home_url( '/' );
		$prev_title = __( 'Return Home', 'secretum' );
		$prev_icon  = $home_icon;

		$prev_html  = '<div class="nav-previous float-sm-left">';
		$prev_html .= "<br />{$prev_icon} <a href=\"{$prev_link}\" rel=\"prev\"><span class=\"screen-reader-text\">{$prev_title}:</span><span class=\"post-title\">{$prev_title}</span></a>";
		$prev_html .= '</div><!-- .nav-previous -->';
	}

	// Clear.
	$next_html = '';

	// Next Post Link & Title.
	if ( true === isset( $next_post->ID ) && true === isset( $next_post->post_title ) ) {
		// Right Arrow Icon.
		$right_icon = secretum_icon(
			[
				'fi'   => 'arrow-right',
				'fa'   => 'fa-angle-right',
				'echo' => false,
			]
		);

		$next_link  = get_permalink( $next_post->ID );
		$next_title = $next_post->post_title;
		$next_icon  = $right_icon;

		$next_html .= '<div class="nav-next float-sm-right">';
		$next_html .= "<a href=\"{$next_link}\" rel=\"next\"><span class=\"meta-nav\" aria-hidden=\"true\">{$text_next}</span><span class=\"screen-reader-text\">{$text_next}: {$prev_title}</span></a> {$next_icon}";
		$next_html .= "<br /><a href=\"{$next_link}\" rel=\"next\"><span class=\"post-title\">{$next_title}</span></a>";
		$next_html .= '</div><!-- .nav-next -->';
	}

	// HTML Output.
	$navigation  = '<hr />';
	$navigation .= '<nav class="navigation post-navigation clearfix" role="navigation">';
	$navigation .= "<h2 class=\"screen-reader-text\">{$text_heading}</h2>";
	$navigation .= '<div class="nav-links">';
	$navigation .= $prev_html;
	$navigation .= $next_html;
	$navigation .= '</div><!-- .nav-links -->';
	$navigation .= '</nav><!-- .navigation.post-navigation -->';

	// Filter HTML.
	echo wp_kses(
		$navigation,
		[
			'nav'  => [
				'class' => true,
				'role'  => true,
			],
			'h2'   => [
				'class' => true,
			],
			'i'    => [
				'class'       => true,
				'aria-hidden' => true,
			],
			'div'  => [
				'class' => true,
			],
			'span' => [
				'class'       => true,
				'aria-hidden' => true,
			],
			'a'    => [
				'href' => true,
				'rel'  => true,
			],
			'br'   => true,
			'hr'   => true,
		]
	);

}//end secretum_post_navigation()
