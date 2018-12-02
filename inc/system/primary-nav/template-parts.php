<?php
/**
 * Template Styling Functions
 *
 * @package WordPress
 * @subpackage Secretum_Theme
 */


/**
 * Display Primary Navbar Above/Below Header
 *
 * @return string Primary Navbar HTML
 */
if (!function_exists('secretum_primary_nav')) {
	function secretum_primary_nav($theme_location)
	{
		// Required
		if (has_nav_menu($theme_location) && !secretum_mod('primary_nav_status') && class_exists('WP_Bootstrap_Navwalker')) {
			// Open HTML
			$html  = '<nav class="navbar navbar-expand-lg' . secretum_primary_nav_color_theme() . secretum_primary_nav_wrapper() . '">';
			$html .= '<a class="skip-link screen-reader-text sr-only" href="#content">' . __('Skip to content', 'secretum') . '</a>';
			$html .= '<div class="container' . secretum_primary_nav_container() . '">';

			// Toggler Icon
			$html .= secretum_primary_nav_toggler();

			// Primary Nav Menu
			$html .= wp_nav_menu(array(
				'depth' 			=> 2,
				'theme_location' 	=> esc_attr($theme_location),
				'container_class' 	=> 'collapse navbar-collapse',
				'container_id' 		=> 'navbarNavDropdown',
				'menu_class' 		=> 'navbar-nav primary' . secretum_primary_nav_alignment(),
				'menu_id' 			=> 'main-menu',
				'divider'			=> secretum_primary_nav_divider_classes(),
				'walker' 			=> new WP_Bootstrap_Navwalker(),
			    'fallback_cb'       => false,
			    'echo'				=> false
			));

			// Close HTML
			$html .= '</div>'; // <!-- .container -->
			$html .= '</nav>'; // <!-- .navbar -->

			// Echo If Menu Not Disabled
			echo apply_filters('secretum_primary_nav', $html, 10, 1);
		}
	}
}


/**
 * Display Header Brand Navbar
 *
 * @return string Primary Navbar HTML
 */
if (!function_exists('secretum_primary_nav_brand')) {
	function secretum_primary_nav_brand()
	{
		// Required
		if (!class_exists('WP_Bootstrap_Navwalker')) { return; }
		//if (get_theme_mod('secretum_header_sticky')) { echo 'data-toggle="sticky-onscroll"'; }

		// Either Logo or Menu Can Display
		if (!secretum_mod('logo_identity_status') || !secretum_mod('primary_nav_status')) {
			// Open HTML
			$html  = '<div class="header' . secretum_header_wrapper() . '" id="wrapper-header" itemscope itemtype="http://schema.org/WebSite">';
			$html .= '<a class="skip-link screen-reader-text sr-only" href="#content">' . __('Skip to content', 'secretum') . '</a>';
			$html .= '<nav class="navbar navbar-expand-lg p-0' . secretum_primary_nav_color_theme() . '">';
			$html .= '<div class="container' . secretum_header_container() . '">';

			// Display Primary Left Menu
			if (!secretum_mod('primary_nav_status') && has_nav_menu('secretum-navbar-primary-left')) {
				// Toggler Icon
				//$html .= secretum_primary_nav_toggler();

				// Primary Menu
				$html .= wp_nav_menu(array(
					'depth' 			=> 2,
					'theme_location' 	=> 'secretum-navbar-primary-left',
					'container_class' 	=> 'collapse navbar-collapse' . secretum_primary_nav_wrapper(),
					'container_id' 		=> 'navbarNavDropdown',
					'menu_class' 		=> 'navbar-nav primary' . secretum_primary_nav_alignment(),
					'menu_id' 			=> 'main-menu',
					'divider'			=> secretum_primary_nav_divider_classes(),
					'walker' 			=> new WP_Bootstrap_Navwalker(),
			    	'fallback_cb'       => false,
				    'echo'				=> false
				));
			}

			// Display Logo
			if (!secretum_mod('logo_identity_status')) {
				$html .= secretum_header_logo();
			}

			// Display Primary Right Menu
			if (!secretum_mod('primary_nav_status') && has_nav_menu('secretum-navbar-primary-right')) {
				// Toggler Icon
				//$html .= secretum_primary_nav_toggler();

				// Primary Menu
				$html .= wp_nav_menu(array(
					'depth' 			=> 2,
					'theme_location' 	=> 'secretum-navbar-primary-right',
					'container_class' 	=> 'collapse navbar-collapse' . secretum_primary_nav_wrapper(),
					'container_id' 		=> 'navbarNavDropdown',
					'menu_class' 		=> 'navbar-nav primary' . secretum_primary_nav_alignment(),
					'menu_id' 			=> 'main-menu',
					'divider'			=> secretum_primary_nav_divider_classes(),
					'walker' 			=> new WP_Bootstrap_Navwalker(),
			    	'fallback_cb'       => false,
				    'echo'				=> false
				));
			}

			// Close HTML
			$html .= '</div>'; // <!-- .container -->
			$html .= '</nav>'; // <!-- .navbar -->
			$html .= '</div>'; //<!-- .header -->

			// Echo HTML
			return apply_filters('secretum_primary_nav_brand', $html, 10, 1);
		}
	}
}


/**
 * Primary Navbar Toggler
 *
 * @return string HTML
 */
if (!function_exists('secretum_primary_nav_toggler')) {
	function secretum_primary_nav_toggler()
	{
		// Button HTML
		$html  = '<button class="navbar-toggler ml-auto my-2 border-0" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>';

		// Echo HTML
		return apply_filters('secretum_primary_nav_toggler', $html, 10, 1);
	}
}
