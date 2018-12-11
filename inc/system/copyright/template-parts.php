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
 * @example secretum_copyright_display();
 * @example add_filter('secretum_copyright_display', 'callable_function');
 *
 * @see /inc/system/footer/actions.php
 *
 * @return string HTML
 */
if (!function_exists('secretum_copyright_display')) {
	function secretum_copyright_display()
	{
		$html  = '<div class="wrapper copyright' . secretum_copyright_wrapper() . '" id="wrapper-copyright">';
		$html .= '<div class="container' . secretum_copyright_container(). '">';
		$html .= '<div class="row"><div class="col-md">';
		$html .= '<footer id="colophon"><div class="site-info">';

		// Custom Copyright Statement
		if (secretum_mod('copyright_text')) {
			$html .= secretum_mod('copyright_text', 'html', false);

		// Default Copyright Statement
		} else {
			$html .= sprintf('<p>%1$s %2$s &copy; <a href="%3$s">%4$s</a> - %5$s<br /><small>%6$s</small></p>',
			    __('Copyright', 'secretum'),
			    date("Y", time()),
			    get_home_url('/'),
			    get_bloginfo('name'),
			    __('All Rights Reserved.', 'secretum'),
			    __('Code is Poetry | Proudly Powered by WordPress!', 'secretum')
			);
		}

		$html .= '</div></footer><!-- .site-info #colophon -->';
		$html .= '</div><!-- .col-md -->';

		// Display Copyright Nav Menu If Defined
		// @source inc/system/copyright-nav/template-parts.php
		if (has_nav_menu('secretum-navbar-copyright')) {
			$html .= secretum_copyright_nav_display();
		}

		$html .= '</div><!-- .row -->';
		$html .= '</div><!-- .container -->';
		$html .= '</div><!-- .wrapper -->';

		// Return HTML
		return apply_filters('secretum_copyright_display', $html, 10, 1);
	}
}


/**
 * Display Scroll To Top Icon
 *
 * @return string HTML
 */
if (!function_exists('secretum_scroll_top')) {
	function secretum_scroll_top()
	{
		if (!secretum_mod('scrolltop')) {
			// HTML
			$html = '<div class="scrolltop"><div class="scroll icon"><i class="fa fa-4x fa-angle-up"></i></div></div>';

			// Return HTML
			return apply_filters('secretum_header_top', $html, 10, 1);
		}
	}
}
