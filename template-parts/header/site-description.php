<?php
/**
 * Site Branding Description
 *
 * @package WordPress
 * @subpackage Secretum
 */

// Show Desc If Allowed && Ignore If Left/Right Primary Nav In Use
if (!secretum_mod('site_identity_tagline_status') && (!has_nav_menu('secretum-navbar-primary-left') && !has_nav_menu('secretum-navbar-primary-right'))) {
	$description = get_bloginfo('description', 'display');

	if ($description) {
		echo sprintf('<p class="site-description%1$s%2$s">%3$s</p>',
			secretum_site_identity_desc_container(),
			secretum_site_identity_desc_textuals(),
			$description
		);
	}
}
