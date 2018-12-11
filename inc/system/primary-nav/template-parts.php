<?php
/**
 * Template Styling Functions
 *
 * @package WordPress
 * @subpackage Secretum_Theme
 */


/**
 * Display Primary Navbar
 *
 * @param string $theme_location Registered menu location
 * @return string HTML
 */
if (!function_exists('secretum_primary_nav')) {
	function secretum_primary_nav($theme_location)
	{
		// Required
		if (has_nav_menu($theme_location) && !secretum_mod('primary_nav_status') && class_exists('WP_Bootstrap_Navwalker')) {
			$html = '';

			// Start Ouptut
			//$html .= '<div class="wrapper' . secretum_primary_nav_wrapper() . '">';
			$html .= '<nav class="wrapper navbar navbar-expand-lg' . secretum_primary_nav_color_scheme() . secretum_primary_nav_wrapper() . '">';
			$html .= '<div class="container' . secretum_primary_nav_container() . '">';
			// Display Toggler Button
			$html .= secretum_primary_nav_toggler_button();

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

			// Close Putput
			$html .= '</div>'; // <!-- .container -->
			$html .= '</nav>'; // <!-- .navbar -->
			//$html .= '</div>'; // <!-- .wrapper -->

			// Filter HTML
			return apply_filters(str_replace('-', '_', $theme_location), $html, 10, 1);
		}
	}
}


/**
 * Display Primary Navbar
 *
 * @param string $theme_location Registered menu location
 * @return string HTML
if (!function_exists('secretum_primary_nav')) {
	function secretum_primary_nav($theme_location)
	{
		// Required
		if (has_nav_menu($theme_location) && !secretum_mod('primary_nav_status') && class_exists('WP_Bootstrap_Navwalker')) {
			$html = '';

			// Start Ouptut
			if ($theme_location == "secretum-navbar-primary-above" || $theme_location == "secretum-navbar-primary-below") {
				$html .= '<nav class="navbar navbar-expand-lg bg-faded' . secretum_primary_nav_wrapper() . '">';
				$html .= '<div class="container' . secretum_primary_nav_container() . '">';
				// Display Toggler Button
				$html .= secretum_primary_nav_toggler_button();
			}

			$container_class = (!empty($html)) ? 'collapse navbar-collapse' : 'collapse navbar-collapse' . secretum_primary_nav_wrapper();

			// Primary Nav Menu
			$html .= wp_nav_menu(array(
				'depth' 			=> 2,
				'theme_location' 	=> esc_attr($theme_location),
				'container_class' 	=> esc_attr($container_class),
				'container_id' 		=> 'navbarNavDropdown',
				'menu_class' 		=> 'navbar-nav primary' . secretum_primary_nav_alignment(),
				'menu_id' 			=> 'main-menu',
				'divider'			=> secretum_primary_nav_divider_classes(),
				'walker' 			=> new WP_Bootstrap_Navwalker(),
			    'fallback_cb'       => false,
			    'echo'				=> false
			));

			// Close Putput
			if ($theme_location == "secretum-navbar-primary-above" || $theme_location == "secretum-navbar-primary-below") {
				$html .= '</div>'; // <!-- .container -->
				$html .= '</nav>'; // <!-- .navbar -->
			}

			// Filter HTML
			return apply_filters(str_replace('-', '_', $theme_location), $html, 10, 1);
		}
	}
}
 */


/**
 * Primary Navbar Toggler
 *
 * @return string HTML
 */
if (!function_exists('secretum_primary_nav_toggler_button')) {
	function secretum_primary_nav_toggler_button()
	{
		// Button HTML
		$html  = '<button class="navbar-toggler' . secretum_primary_nav_toggler_wrapper() . '" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon' . secretum_primary_nav_toggler_icon() . '"></span></button>';

		// Filter HTML
		return apply_filters('secretum_primary_nav_toggler', $html, 10, 1);
	}
}
