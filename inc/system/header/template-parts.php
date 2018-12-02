<?php
/**
 * Template Styling Functions
 *
 * @package WordPress
 * @subpackage Secretum_Theme
 */


/**
 * Display Header Top Navbar/Widget Area
 *
 * @return string HTML
 */
if (!function_exists('secretum_header_top')) {
	function secretum_header_top()
	{
		// If Header Top Active & Sidebar Active
		if (secretum_mod('header_top_status') && is_active_sidebar('sidebar-header-top')) {

			// Top Header Widget Area
			dynamic_sidebar('secretum-sidebar-header-top');

		// Else if Header Top Active & Sidebar Not Active & Navwalker Found
		} elseif (secretum_mod('header_top_status') && !is_active_sidebar('sidebar-header-top') && class_exists('WP_Bootstrap_Navwalker')) {

			$html  = '<nav class="navbar navbar-expand' . secretum_primary_menu_color_theme() . secretum_header_top_wrapper() . '" role="navigation">';
			$html .= '<div class="container' . secretum_header_top_container() . '">';

			// Top Left Navbar
			$html .= wp_nav_menu(array(
				'depth' 			=> 0,
				'theme_location' 	=> 'secretum-navbar-top-left',
				'container_class' 	=> 'navbar-nav w-100',
				'container_id' 		=> 'topNavLeft',
				'menu_class' 		=> 'navbar-nav mr-auto',
				'menu_id' 			=> 'navbarNavLeft',
				'walker' 			=> new WP_Bootstrap_Navwalker(),
				'fallback_cb'       => false,
			    'echo'				=> false
			));

			// Top Right Navbar
			$html .= wp_nav_menu(array(
				'depth' 			=> 0,
				'theme_location' 	=> 'secretum-navbar-top-right',
				'container_class' 	=> 'navbar-nav w-100',
				'container_id' 		=> 'topNavRight',
				'menu_class' 		=> 'navbar-nav ml-auto',
				'menu_id' 			=> 'navbarNavRight',
				'walker' 			=> new WP_Bootstrap_Navwalker(),
				'fallback_cb'       => false,
			    'echo'				=> false
			));

			$html .= '</div>'; // <!-- .container -->
			$html .= '</nav>'; // <!-- .navbar -->

			// Echo HTML
			echo apply_filters('secretum_header_top', $html, 10, 1);
		}
	}
}


/**
 * Render Website Logo/Brand
 *
 * @return string Pre-sanitized string of class names
 */
if (!function_exists('secretum_header_logo')) {
	function secretum_header_logo()
	{
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

			$html = sprintf('<a href="%1$s" class="navbar-brand custom-logo-link%2$s" title="%3$s" rel="home" itemprop="url"%4$s>%5$s</a>',
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
			$html = sprintf('<h1 class="navbar-brand%1$s"><a href="%2$s" title="%3$s" rel="home" itemprop="url">%4$s</a></h1>',
			    $logo_location,
			    esc_url(get_home_url('/')),
			    esc_attr(get_bloginfo('name', 'display')),
			    get_bloginfo('name')
			);

		// Not Front-page & No Custom Logo
		} else {

			// Build Text Link
			$html = sprintf('<a class="navbar-brand%1$s" href="%2$s" title="%3$s" rel="home" itemprop="url">%4$s</a>',
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

		// Return Logo
		return apply_filters('get_custom_logo', $html, $blog_id);
	}
}


/**
 * Featured Image
 *
 * @return string HTML
 */
if (!function_exists('secretum_featured_image')) {
	function secretum_featured_image()
	{
		// If Conditions Match Return Featured Image
		if ((is_single() || (is_page() && !is_front_page() && !is_home())) && has_post_thumbnail(get_queried_object_id() || !is_product())) {

			$html  = '<div class="featured-image-header">';
			$html .= get_the_post_thumbnail(get_queried_object_id(), 'secretum-featured-image');
			$html .= '</div>'; // <!-- .featured-image-header -->

			// Echo HTML
			echo apply_filters('secretum_featured_image', $html, 10, 1);
		}
	}
}

