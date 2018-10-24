<?php
/**
 * Secretum Theme: Displays Website Brand/Logo
 *
 * @example [secretum_logo]
 *
 * @link https://developer.wordpress.org/themes/functionality/custom-logo/
 * @link https://developer.wordpress.org/reference/functions/add_shortcode/
 */
if (!defined('ABSPATH')) { exit; }


/**
 * Add Shortcode: secretum_logo
 */
add_shortcode('secretum_logo', function($atts = array(), $content = false) {
	$html = '';

	// Has Custom Logo
	if (has_custom_logo()) {

		$html = get_custom_logo();

	// Front-page or Home & No Custom Logo
	} elseif(is_front_page() && is_home()) {

		$html = '<h1 class="navbar-brand"><a href="' . esc_url(get_home_url('/')) . '" title="' . esc_attr(get_bloginfo('name', 'display')) . '"  rel="home" itemprop="url">' . get_bloginfo('name') . '</a></h1>';

	// Not Front-page & No Custom Logo
	} else {

		$html = '<a href="' . esc_url(get_home_url('/')) . '" title="' . esc_attr(get_bloginfo('name', 'display')) . '" rel="home" itemprop="url" class="navbar-brand">' . get_bloginfo('name') . '</a>';
	}

	return $html;
});
