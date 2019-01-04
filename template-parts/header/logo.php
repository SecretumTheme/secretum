<?php
/**
 * Display Graphic/Textual Logo
 *
 * @package WordPress
 * @subpackage Secretum
 */


if (!secretum_mod('site_identity_branding_status')) {
	// Get Current Blog ID
	$blog_id = get_current_blog_id();

	// Switch Websites If Multisite
	if (is_multisite()) {
	    switch_to_blog($blog_id);
	    $switched = true;
	}

	// Has Custom Logo
	if (has_custom_logo() && !secretum_mod('site_identity_logo_status')) {
		// Set Max Width Inline CSS
		$maxwidth = secretum_mod('custom_logo_maxwidth') ? secretum_mod('custom_logo_maxwidth', 'int', false) : '';
		$inlinecss = !empty($maxwidth) ? ' style="max-width:' . $maxwidth . 'px;height:auto !important;"' : '';

		echo sprintf('<a href="%1$s" class="navbar-brand custom-logo-link%2$s" title="%3$s" rel="home" itemprop="url"%4$s>%5$s</a>',
		    esc_url(get_home_url('/')),
		    secretum_site_identity_title_container() . secretum_site_identity_title_textuals(),
		    esc_attr(get_bloginfo('name', 'display')),
		    $inlinecss,
		    wp_get_attachment_image(get_theme_mod('custom_logo'), 'full', false, array(
		        'class'    	=> 'custom-logo img-fluid',
		        'title' 	=> esc_attr(get_bloginfo('name', 'display')),
		        'itemprop' 	=> 'logo'
		    ))
		);

	// Front-page or Home & No Custom Logo
	} elseif (is_front_page() && is_home() && !secretum_mod('site_identity_logo_status')) {
		// Build Heading Logo Link
		echo sprintf('<h1 class="navbar-brand%1$s"><a href="%2$s" rel="home" itemprop="url"%3$s>%4$s</a></h1>',
		    secretum_site_identity_title_container(),
		    esc_url(get_home_url('/')),
		    ' class="' . secretum_site_identity_title_textuals() . '"',
		    esc_attr(get_bloginfo('name', 'display'))
		);

	// Not Front-page & No Custom Logo
	} elseif (!secretum_mod('site_identity_logo_status')) {
		// Build Text Link
		echo sprintf('<a class="navbar-brand%1$s%2$s" href="%3$s" rel="home" itemprop="url">%4$s</a>',
		    secretum_site_identity_title_container(),
		    secretum_site_identity_title_textuals(),
		    esc_url(get_home_url('/')),
		    esc_attr(get_bloginfo('name', 'display'))
		);
	}

	// Display Site Description
	get_template_part('template-parts/header/site-description');

	// Restore Current Website
	if (isset($switched)) {
	    restore_current_blog();
	}
}
