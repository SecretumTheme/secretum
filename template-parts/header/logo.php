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
 * @since      1.1.2
 */

namespace Secretum;

if ( true !== secretum_mod( 'site_identity_branding_status' ) ) {
	if ( true === has_custom_logo() && true !== secretum_mod( 'site_identity_logo_status' ) ) {
		// Render Branded Graphic Logo.
		secretum_render_brand_logo();
	} elseif ( true === is_front_page() && true === is_home() && true !== secretum_mod( 'site_identity_logo_status' ) ) {
		// Render h1 Frontpage Textual Brand Logo.
		secretum_render_heading_logo();
	} elseif ( true !== secretum_mod( 'site_identity_logo_status' ) ) {
		// Render Textual Link Brand Logo.
		secretum_render_link_logo();
	}

	// Display Site Description.
	get_template_part( 'template-parts/header/site-description' );
}
