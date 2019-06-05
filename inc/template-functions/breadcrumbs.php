<?php
/**
 * Functions related to theme display or manipulation
 *
 * @package    Secretum
 * @author     SecretumTheme <author@secretumtheme.com>
 * @copyright  2018-2019 Secretum
 * @license    https://github.com/SecretumTheme/secretum/blob/master/license.txt GPL-2.0
 * @link       https://github.com/SecretumTheme/secretum/blob/master/inc/template-functions/breadcrumbs.php
 * @since      1.7.3
 */

namespace Secretum;


/**
 * Render Bootstrap Breadcrumbs
 *
 * @since 1.7.3
 */
function secretum_breadcrumb() {
	if( true !== is_home() && true !== is_front_page() ) {
		$home_url      = get_home_url( '/' );
		$blog_name     = get_bloginfo( 'name' );
		$page_title    = get_the_title( get_the_ID() );
		$category_list = get_the_category_list( ', ' );
		$ol_schema     = ' itemscope itemtype="http://schema.org/BreadcrumbList"';
		$li_schema     = ' itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"';
		$li_aria_last  = ' aria-current="page"';

		$html  = '<nav aria-label="breadcrumb" class="mt-2 text-14">';
		$html .= '<ol class="breadcrumb bg-transparent p-0 mb-0"' . $ol_schema . '>';
		$html .= '<li class="breadcrumb-item link"' . $li_schema . '><a href="' . $home_url . '">' . $blog_name . '</a>' . '</li>';

		if( true === is_category() || true === is_single() ) {
			$html .= '<li class="breadcrumb-item link"' . $li_schema . '>' . $category_list . '</li>';

			if ( true === is_single() ) {
				$html .= '<li class="breadcrumb-item text-muted"' . $li_schema . $li_aria_last .'>' . $page_title . '</li>';
			}
		} elseif ( true === is_page() ) {
			$html .= '<li class="breadcrumb-item text-muted border"' . $li_schema . $li_aria_last . '>' . $page_title . '</li>';
		}

		$html .= '</ol>';
		$html .= '</nav>';

		echo wp_kses(
			$html,
			[
				'nav' => [
					'aria-label' => true,
					'class'      => true,
				],
				'ol' => [
					'class'     => true,
					'itemscope' => true,
					'itemtype'  => true,
				],
				'li' => [
					'class'     => true,
					'itemprop'  => true,
					'itemscope' => true,
					'itemtype'  => true,
				],
				'span' => [
					'class' => true,
				],
				'a' => [
					'class' => true,
					'href'  => true,
					'rel'   => true,
				],
			]
		);
	}
}
