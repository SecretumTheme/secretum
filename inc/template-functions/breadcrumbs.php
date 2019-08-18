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
	if ( true === is_home() || true === is_front_page() ) {
		return;
	}

	if ( true !== is_singular( array( 'post', 'page' ) ) ) {
		return;
	}

	$posts_status = secretum_mod( 'breadcrumbs_posts_status' );
	$pages_status = secretum_mod( 'breadcrumbs_pages_status' );

	if ( true !== $posts_status && true !== $pages_status ) {
		return;
	}

	if ( true === is_single() && true !== $posts_status ) {
		return;
	}

	if ( true === is_page() && true !== $pages_status ) {
		return;
	}

	$category_type = secretum_mod( 'breadcrumbs_categories_type', 'attr' );
	$category_item = '';

	if ( 'all' === $category_type ) {
		$category_item = get_the_category_list( ', ' );

	} elseif ( 'none' === $category_type ) {
		$category_item = '';

	} else {
		$category_list = get_the_category();

		if ( true !== empty( $category_list[0] ) ) {
			$category_item = '<a href="' . esc_url( get_category_link( $category_list[0]->term_id ) ) . '">' . esc_html( $category_list[0]->name ) . '</a>';
		}
	}

	$home_url     = get_home_url( '/' );
	$blog_name    = get_bloginfo( 'name' );
	$page_title   = get_the_title( get_the_ID() );
	$ol_schema    = ' itemscope itemtype="http://schema.org/BreadcrumbList"';
	$li_schema    = ' itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"';
	$li_aria_last = ' aria-current="page"';

	$html  = '<nav aria-label="breadcrumb" class="wrapper' . secretum_wrapper( 'breadcrumbs', 'return' ) . secretum_textual( 'breadcrumbs', 'return' ) . '">';
	$html .= '<ol class="breadcrumb container' . secretum_container( 'breadcrumbs', 'return' ) . '"' . $ol_schema . '>';

	$breadcrumbs_home = secretum_mod( 'breadcrumbs_home', 'attr' );

	if ( 'icon' === $breadcrumbs_home ) {
		$html .= '<li class="breadcrumb-item"' . $li_schema . '><i class="fi-home"></i> <a href="' . $home_url . '">' . $blog_name . '</a></li>';
	} elseif ( 'link' === $breadcrumbs_home ) {
		$html .= '<li class="breadcrumb-item"' . $li_schema . '><a href="' . $home_url . '"><i class="fi-home"></i></a></li>';
	} elseif ( '' === $breadcrumbs_home || true === empty( $breadcrumbs_home ) ) {
		$html .= '<li class="breadcrumb-item"' . $li_schema . '><a href="' . $home_url . '">' . $blog_name . '</a></li>';
	}

	if ( ( true === is_category() || true === is_single() ) ) {
		if ( true !== empty( $category_item ) ) {
			$html .= '<li class="breadcrumb-item"' . $li_schema . '>' . $category_item . '</li>';
		}

		if ( true === is_single() ) {
			$html .= '<li class="breadcrumb-item"' . $li_schema . $li_aria_last . '>' . $page_title . '</li>';
		}
	} elseif ( true === is_page() ) {
		$html .= '<li class="breadcrumb-item"' . $li_schema . $li_aria_last . '>' . $page_title . '</li>';
	}

	$html .= '</ol>';
	$html .= '</nav>';
	$html .= '</div>';
	$html .= '</div>';

	echo wp_kses(
		$html,
		[
			'nav'  => [
				'aria-label' => true,
				'class'      => true,
			],
			'ol'   => [
				'class'     => true,
				'itemscope' => true,
				'itemtype'  => true,
			],
			'li'   => [
				'class'     => true,
				'itemprop'  => true,
				'itemscope' => true,
				'itemtype'  => true,
			],
			'span' => [
				'class' => true,
			],
			'a'    => [
				'class' => true,
				'href'  => true,
				'rel'   => true,
			],
			'i'    => [
				'class' => true,
			],
		]
	);
}
