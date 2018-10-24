<?php
/**
 * Template Styling Functions
 *
 * @package WordPress
 * @subpackage Secretum_Theme
 */


/**
 * Display Footer Template
 *
 * @example secretum_footer_display();
 * @example add_filter('secretum_footer_display', 'callable_function');
 *
 * @see /inc/system/footer/actions.php
 *
 * @return string HTML
 */
if (!function_exists('secretum_footer_display')) {
	function secretum_footer_display()
	{
		$html  = '<div class="wrapper footer' . secretum_footer_wrapper() . '" id="wrapper-footer">';
		$html .= '<div class="container' . secretum_footer_container(). '">';

		// Display Footer Widgets If Active
		$html .= secretum_footer_widgets();

		$html .= '</div><!-- .container -->';
		$html .= '</div><!-- .wrapper -->';

		// Return HTML
		return apply_filters('secretum_footer_display', $html, 10, 1);
	}
}


/**
 * Display Footer Widgets
 *
 * @example secretum_footer_widgets();
 * @example add_filter('secretum_footer_widgets', 'callable_function');
 *
 * @see secretum_footer_display()
 *
 * @return string HTML
 */
if (!function_exists('secretum_footer_widgets')) {
	function secretum_footer_widgets()
	{
		// Required
		if(is_active_sidebar('footer-left') || is_active_sidebar('footer-center') || is_active_sidebar('footer-right')) {
			// Open HTML
			$html  = '<div class="row">';

			// Left Footer Widgets
			if (is_active_sidebar('footer-left')) {
				$html .= '<div class="col-md">';
				// @see /inc/template-functions.php
				$html .= secretum_sidebar_content('footer-left');
				$html .= '</div><!-- .col-md -->';
			}

			// Center Footer Widgets
			if (is_active_sidebar('footer-center')) {
				$html .= '<div class="col-md">';
				// @see /inc/template-functions.php
				$html .= secretum_sidebar_content('footer-center');
				$html .= '</div><!-- .col-md -->';
			}

			// Right Footer Widgets
			if (is_active_sidebar('footer-right')) {
				$html .= '<div class="col-md">';
				// @see /inc/template-functions.php
				$html .= secretum_sidebar_content('footer-right');
				$html .= '</div><!-- .col-md -->';
			}

			// Close HTML
			$html  .= '</div><!-- .row -->';

			// Return HTML
			return apply_filters('secretum_footer_widgets', $html, 10, 1);
		}
	}
}