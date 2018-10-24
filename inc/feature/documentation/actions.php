<?php
/**
 * Secretum Theme: Customizer Template Styling Actions
 */
if (! defined('ABSPATH')) { exit; }


/**
 * Documentation Feature: Wrapper Background & Border Color, Margins and Padding
 *
 * @example do_action('secretum_documentation_wrapper');
 */
add_action('secretum_documentation_wrapper', function()
{
	// Get Mod
	$background_color_mod = secretum_theme_mod('secretum_body_background_color');

	// Get Mod
	$margin_bottom_mod = get_theme_mod('secretum_documentation_wrapper_margin_bottom') ? secretum_theme_mod('secretum_documentation_wrapper_margin_bottom') : secretum_theme_mod('secretum_body_wrapper_margin_bottom');

	// Get Mod
	$margin_top_mod = get_theme_mod('secretum_documentation_wrapper_margin_top') ? secretum_theme_mod('secretum_documentation_wrapper_margin_top') : secretum_theme_mod('secretum_body_wrapper_margin_top');

	// Get Mod
	$padding_mod = get_theme_mod('secretum_documentation_wrapper_padding') ? secretum_theme_mod('secretum_documentation_wrapper_padding') : secretum_theme_mod('secretum_body_wrapper_padding');

	// Echo Class String
	echo ' cover' . $background_color_mod . $margin_bottom_mod . $margin_top_mod . (!empty($padding_mod) ? $padding_mod : ' py-5');
}, 10, 0);


/**
 * Documentation Feature: Container Type & Padding
 *
 * @example do_action('secretum_documentation_container');
 */
add_action('secretum_documentation_container', function()
{
	// Get Mod
	$container_mod = get_theme_mod('secretum_documentation_container') ? secretum_theme_mod('secretum_documentation_container') : secretum_theme_mod('secretum_body_container');

	// Get Mod
	$padding_mod = get_theme_mod('secretum_documentation_container_padding') ? secretum_theme_mod('secretum_documentation_container_padding') : secretum_theme_mod('secretum_body_container_padding');

	// Echo Class String
	echo (empty($container_mod)) ? '-fluid' . $padding_mod : $padding_mod;
}, 10, 0);
