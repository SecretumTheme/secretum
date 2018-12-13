<?php
/**
 * The frontpage template file
 *
 * @package WordPress
 * @subpackage Secretum
 */
get_header();

// Hookable Action Before Frontpage Content
do_action('secretum_frontpage_before');

// Frontpage Heading
get_template_part('template-parts/frontpage/heading');

// Frontpage Body
get_template_part('template-parts/frontpage/body');

// Secretum Custom Frontpage Plugin
if (secretum_mod('custom_frontpage')) {
	echo do_action('secretum_frontpage');
}

// Frontpage Map
get_template_part('template-parts/frontpage/map');

// Hookable Action After Frontpage Content
do_action('secretum_frontpage_after');

get_footer();
