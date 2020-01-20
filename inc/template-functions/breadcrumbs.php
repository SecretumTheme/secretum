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
			$category_item = '<a href="' . esc_url( get_category_link( $category_list[0]->term_id ) ) . '"><span itemprop="name">' . esc_html( $category_list[0]->name ) . '</span></a>';
		}
	}

	$home_url        = get_home_url( '/' );
	$blog_name       = get_bloginfo( 'name' );
	$page_title      = get_the_title( get_the_ID() );
	$ol_schema       = ' itemscope itemtype="http://schema.org/BreadcrumbList"';
	$li_schema       = ' itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"';
	$li_aria_last    = ' aria-current="page"';
	$first_position  = '<meta itemprop="position" content="1" />';
	$second_position = '<meta itemprop="position" content="2" />';
	$third_position  = '<meta itemprop="position" content="3" />';

	$html  = '<nav aria-label="breadcrumb" class="wrapper' . secretum_wrapper( 'breadcrumbs', 'return' ) . secretum_textual( 'breadcrumbs', 'return' ) . '">';
	$html .= '<ol class="breadcrumb container' . secretum_container( 'breadcrumbs', 'return' ) . '"' . $ol_schema . '>';

	$breadcrumbs_home = secretum_mod( 'breadcrumbs_home', 'attr' );

	if ( 'icon' === $breadcrumbs_home ) {
		$html .= '<li class="breadcrumb-item"' . $li_schema . '><i class="fi-home"></i> <a href="' . $home_url . '"><span itemprop="name">' . $blog_name . '</span></a>' . $first_position . '</li>';
	} elseif ( 'link' === $breadcrumbs_home ) {
		$html .= '<li class="breadcrumb-item"' . $li_schema . '><a href="' . $home_url . '"><span itemprop="name"><i class="fi-home" title="' . $blog_name . '"></i></span></a>' . $first_position . '</li>';
	} elseif ( '' === $breadcrumbs_home || true === empty( $breadcrumbs_home ) ) {
		$html .= '<li class="breadcrumb-item"' . $li_schema . '><a href="' . $home_url . '"><span itemprop="name">' . $blog_name . '</span></a>' . $first_position . '</li>';
	}

	if ( ( true === is_category() || true === is_single() ) ) {
		if ( true !== empty( $category_item ) ) {
			$html .= '<li class="breadcrumb-item"' . $li_schema . '>' . $category_item . $second_position . '</li>';
		}

		if ( true === empty( $category_item ) && true === is_single() ) {
			$html .= '<li class="breadcrumb-item"' . $li_schema . $li_aria_last . '><span itemprop="name">' . $page_title . '</span>' . $second_position . '</li>';
		} else {
			$html .= '<li class="breadcrumb-item"' . $li_schema . $li_aria_last . '><span itemprop="name">' . $page_title . '</span>' . $third_position . '</li>';
		}
	} elseif ( true === is_page() ) {
		$html .= '<li class="breadcrumb-item"' . $li_schema . $li_aria_last . '><span itemprop="name">' . $page_title . '</span>' . $second_position . '</li>';
	}

	$html .= '</ol>';
	$html .= '</nav>';
	$html .= '</div>';
	$html .= '</div>';

	echo wp_kses(
		$html,
		array(
			'nav'  => array(
				'aria-label' => true,
				'class'      => true,
			),
			'ol'   => array(
				'class'     => true,
				'itemscope' => true,
				'itemtype'  => true,
			),
			'li'   => array(
				'class'     => true,
				'itemprop'  => true,
				'itemscope' => true,
				'itemtype'  => true,
			),
			'span' => array(
				'class'     => true,
				'itemprop'  => true,
			),
			'meta' => array(
				'content'   => true,
				'itemprop'  => true,
			),
			'a'    => array(
				'class' => true,
				'href'  => true,
				'rel'   => true,
			),
			'i'    => array(
				'class' => true,
			),
		)
	);
}
