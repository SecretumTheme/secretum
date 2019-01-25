<?php
/**
 * Display Graphic/Textual Logo
 *
 * @package    Secretum
 * @subpackage Theme\Template-Parts\Header
 * @author     SecretumTheme <author@secretumtheme.com>
 * @copyright  2018-2019 Secretum
 * @license    https://github.com/SecretumTheme/secretum/blob/master/license.txt GPL-2.0
 * @link       https://github.com/SecretumTheme/secretum/blob/master/template-parts/header/logo.php
 * @since      1.0.0
 */

namespace Secretum;

if ( ! secretum_mod( 'site_identity_branding_status' ) ) {
	// Get Current Blog ID.
	$blog_id = get_current_blog_id();

	if ( has_custom_logo() && ! secretum_mod( 'site_identity_logo_status' ) ) {
		// Render Branded Graphic Logo.
		secretum_render_brand_logo();
	} elseif ( is_front_page() && is_home() && ! secretum_mod( 'site_identity_logo_status' ) ) {
		// Render h1 Frontpage Textual Brand Logo.
		secretum_render_heading_logo();
	} elseif ( ! secretum_mod( 'site_identity_logo_status' ) ) {
		// Render Textual Link Brand Logo.
		secretum_render_link_logo();
	}

	// Display Site Description.
	get_template_part( 'template-parts/header/site-description' );
}
