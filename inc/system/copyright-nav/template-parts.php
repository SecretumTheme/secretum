<?php
/**
 * Template Styling Functions
 *
 * @package WordPress
 * @subpackage Secretum_Theme
 */


/**
 * Display Copyright Template
 *
 * @source inc/system/copyright/template-parts.php
 * @return string HTML
 */
if (!function_exists('secretum_copyright_nav_display')) {
	function secretum_copyright_nav_display()
	{
		$html  = '<div class="col-md">';
		$html .= '<nav class="navbar navbar-expand p-0">';

		$html .= wp_nav_menu(array(
			'depth' 			=> 0,
			'theme_location' 	=> 'secretum-navbar-copyright',
			'container_class' 	=> 'navbar-nav w-100',
			'container_id' 		=> 'navCopyright',
			'menu_class' 		=> 'navbar-nav navbar-copyright' . secretum_copyright_nav_alignment(),
			'menu_id' 			=> 'navbarNavCopyright',
			'divider'			=> secretum_copyright_nav_item_classes(),
			'walker' 			=> new WP_Bootstrap_Navwalker(),
			'fallback_cb'       => false,
		    'echo'				=> false
		));

		$html .= '</nav><!-- .navbar -->';
		$html .= '</div><!-- .col-md -->';

		// Return HTML
		return apply_filters('secretum_copyright_nav_display', $html, 10, 1);
	}
}
