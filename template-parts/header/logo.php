<?php
/**
 * Display Graphic/Textual Logo
 *
 * @package    Secretum
 * @subpackage Theme
 * @author     SecretumTheme <author@secretumtheme.com>
 * @copyright  2018-2020 Secretum
 * @license    https://github.com/SecretumTheme/secretum/blob/master/license.txt GPL-2.0
 * @link       https://github.com/SecretumTheme/secretum/blob/master/template-parts/header/logo.php
 * @since      1.0.0
 */

namespace Secretum;

if ( true === has_custom_logo() &&
	false !== secretum_mod( 'site_identity_logo_status' ) ) {
	// Render Branded Graphic Logo.
	secretum_render_brand_logo();
} elseif ( true === is_front_page() && true === is_home() &&
	false !== secretum_mod( 'site_identity_logo_status' ) ) {
	// Render h1 Frontpage Textual Brand Logo.
	secretum_render_heading_logo();
} elseif ( false !== secretum_mod( 'site_identity_logo_status' ) ) {
	// Default Textual Link Brand Logo.
	secretum_render_link_logo();
}
