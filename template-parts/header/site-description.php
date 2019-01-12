<?php
/**
 * Site Branding Description
 *
 * @package Secretum
 */

namespace Secretum;

// @about Show Desc If Allowed && Ignore If Left/Right Primary Nav In Use
if ( ! secretum_mod( 'site_identity_tagline_status' ) && ( ! has_nav_menu( 'secretum-navbar-primary-left' ) && ! has_nav_menu( 'secretum-navbar-primary-right' ) ) ) {
?>
	<p class="site-description<?php secretum_site_identity_desc_container(); ?><?php secretum_site_identity_desc_textuals(); ?>"><?php echo esc_html( get_bloginfo( 'description', 'display' ) ); ?></p>
<?php
}
