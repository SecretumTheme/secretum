<?php
/**
 * The frontpage template file
 *
 * @package Secretum
 */

namespace Secretum;

get_header();

// @about Hookable Action
do_action( 'secretum_frontpage_before' );

// @about Frontpage Heading
get_template_part( 'template-parts/frontpage/heading' );

// @about Frontpage Body
get_template_part( 'template-parts/frontpage/body' );

// @about Secretum Custom Frontpage Plugin
if ( secretum_mod( 'custom_frontpage' ) ) {
	do_action( 'secretum_frontpage' );
}

// @about Frontpage Map
get_template_part( 'template-parts/frontpage/map' );

// @about Hookable Action
do_action( 'secretum_frontpage_after' );

get_footer();
