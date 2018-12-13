<?php
/**
 * Display Graphic/Textual Logo
 *
 * @package WordPress
 * @subpackage Secretum
 */

if (!secretum_mod('logo_identity_status')) {
	// Get Mod Logo Location
	$mod_logo_location = secretum_mod('header_logo_location', 'attr', false);

	$logo_location = '';

	// Set Logo Display Order Based On Menu Location
	if ($mod_logo_location == "left") {
		$logo_location = ' order-1 mr-auto';

	} elseif ($mod_logo_location == "right") {
		$logo_location = ' order-3 ml-auto';

	} elseif ($mod_logo_location == "center") {
		$logo_location = ' mx-auto d-block';

	}

	// Get Current Blog ID
	$blog_id = get_current_blog_id();

	// Switch Websites If Multisite
	if (is_multisite()) {
	    switch_to_blog($blog_id);
	    $switched = true;
	}

	// Has Custom Logo
	if (has_custom_logo()) {

		// Set Max Width Inline CSS
		$maxwidth = secretum_mod('custom_logo_maxwidth') ? secretum_mod('custom_logo_maxwidth', 'int', false) : '';
		$inlinecss = !empty($maxwidth) ? ' style="max-width:' . $maxwidth . 'px;height:auto !important;"' : '';

		echo sprintf('<a href="%1$s" class="navbar-brand custom-logo-link%2$s" title="%3$s" rel="home" itemprop="url"%4$s>%5$s</a>',
		    esc_url(get_home_url('/')),
		    $logo_location,
		    esc_attr(get_bloginfo('name', 'display')),
		    $inlinecss,
		    wp_get_attachment_image(get_theme_mod('custom_logo'), 'full', false, array(
		        'class'    	=> 'custom-logo img-fluid',
		        'title' 	=> esc_attr(get_bloginfo('name', 'display')),
		        'itemprop' 	=> 'logo'
		    ))
		);

	// Front-page or Home & No Custom Logo
	} elseif(is_front_page() && is_home()) {

		// Build Heading Logo Link
		echo sprintf('<h1 class="navbar-brand%1$s"><a href="%2$s" title="%3$s" rel="home" itemprop="url">%4$s</a></h1>',
		    $logo_location,
		    esc_url(get_home_url('/')),
		    esc_attr(get_bloginfo('name', 'display')),
		    get_bloginfo('name')
		);

	// Not Front-page & No Custom Logo
	} else {

		// Build Text Link
		echo sprintf('<a class="navbar-brand%1$s" href="%2$s" title="%3$s" rel="home" itemprop="url">%4$s</a>',
		    $logo_location,
		    esc_url(get_home_url('/')),
		    esc_attr(get_bloginfo('name', 'display')),
		    get_bloginfo('name')
		);
	}

	// Restore Current Website
	if (isset($switched)) {
	    restore_current_blog();
	}
}
