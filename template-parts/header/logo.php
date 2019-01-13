<?php
/**
 * Display Graphic/Textual Logo
 *
 * @package Secretum
 */

namespace Secretum;

if ( ! secretum_mod( 'site_identity_branding_status' ) ) {
	// @about Get Current Blog ID
	$blog_id = get_current_blog_id();

	if ( has_custom_logo() && ! secretum_mod( 'site_identity_logo_status' ) ) {
		// @about Render Branded Graphic Logo
		secretum_render_brand_logo();
	} elseif ( is_front_page() && is_home() && ! secretum_mod( 'site_identity_logo_status' ) ) {
		// @about Render h1 Frontpage Textual Brand Logo
		secretum_render_heading_logo();
	} elseif ( ! secretum_mod( 'site_identity_logo_status' ) ) {
		// @about Render Textual Link Brand Logo
		secretum_render_link_logo();
	}

	// @about Display Site Description
	get_template_part( 'template-parts/header/site-description' );
}
