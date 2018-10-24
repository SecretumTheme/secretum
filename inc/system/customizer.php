<?php
/**
 * WordPress Customizer Settings
 *
 * @package WordPress
 * @subpackage Secretum_Theme
 */


/**
 * WordPress Action Hook
 *
 * @param object $wp_customize WP_Customize_Manager Instance
 */
add_action('customize_register', function($wp_customize) {
	// Remove Sections
	$wp_customize->remove_section("colors");
	$wp_customize->remove_section("title_tagline");


	//
	// Header Panel
	//

	// Add Panel
	$wp_customize->add_panel('secretum_header', array(
		'title' 		=> __(':: Header', 'secretum'),
		'description' 	=> __('Manage features related to the primary website header area.', 'secretum'),
		'priority' 		=> 8,
	));

	// Site Identity
	include_once(SECRETUM_INC . '/system/header/customize/site_identity.php');

	// Container Settings
	include_once(SECRETUM_INC . '/system/header/customize/containers.php');

	// Display Settings
	include_once(SECRETUM_INC . '/system/header/customize/display.php');

	// Primary Menu
	include_once(SECRETUM_INC . '/system/header/customize/menu.php');

	// General Settings
	include_once(SECRETUM_INC . '/system/header/customize/settings.php');

	// Color Settings
	include_once(SECRETUM_INC . '/system/header/customize/colors.php');


	//
	// Body Panel
	//

	// Panel :: Body
	$wp_customize->add_panel('secretum_body', array(
		'title' 			=> __(':: Body', 'secretum'),
		'description' 		=> __('Manage all features related to the website body area and content features.', 'secretum'),
		'priority' 			=> 8,
	));

	// Container Settings
	include_once(SECRETUM_INC . '/system/body/customize/containers.php');

	// Color Settings
	include_once(SECRETUM_INC . '/system/body/customize/colors.php');


	//
	// Entry Panel
	//

	// Panel :: Entry
	$wp_customize->add_panel('secretum_entry', array(
		'title' 			=> __(':: Entry', 'secretum'),
		'description' 		=> __('Manage features related to the post/page entry areas.', 'secretum'),
		'priority' 			=> 8,
	));

	// Display Settings
	include_once(SECRETUM_INC . '/system/entry/customize/display.php');

	// Color Settings
	include_once(SECRETUM_INC . '/system/entry/customize/colors.php');


	//
	// Frontpage Panel
	//

	// Panel :: Frontpage
	$wp_customize->add_panel('secretum_frontpage', array(
		'title' 			=> __(':: Frontpage', 'secretum'),
		'description' 		=> __('Manage all custom frontpage features.', 'secretum'),
		'priority' 			=> 8,
	));

	// General Settings
	include_once(SECRETUM_INC . '/system/frontpage/customize/settings.php');


	//
	// Sidebars Panel
	//

	// Panel :: Sidebars
	$wp_customize->add_panel('secretum_sidebars', array(
		'title' 			=> __(':: Sidebars', 'secretum'),
		'description' 		=> __('Manage all sidebar features.', 'secretum'),
		'priority' 			=> 8,
	));

	// Container Settings
	include_once(SECRETUM_INC . '/system/sidebars/customize/containers.php');

	// General Settings
	include_once(SECRETUM_INC . '/system/sidebars/customize/settings.php');

	// Color Settings
	include_once(SECRETUM_INC . '/system/sidebars/customize/colors.php');


	//
	// Footer Panel
	//

	// Add Panel
	$wp_customize->add_panel('secretum_footer', array(
		'title' 			=> __(':: Footer', 'secretum'),
		'description' 		=> __('Manage features related to the primary website footer area.', 'secretum'),
		'priority' 			=> 8,
	));

	// Container Settings
	include_once(SECRETUM_INC . '/system/footer/customize/containers.php');

	// Display Settings
	include_once(SECRETUM_INC . '/system/footer/customize/display.php');

	// Color Settings
	include_once(SECRETUM_INC . '/system/footer/customize/colors.php');


	//
	// Copyright Panel
	//

	// Add Panel
	$wp_customize->add_panel('secretum_copyright', array(
		'title' 			=> __(':: Copyright', 'secretum'),
		'description' 		=> __('Manage features related to the copyright area.', 'secretum'),
		'priority' 			=> 8,
	));

	// Container Settings
	include_once(SECRETUM_INC . '/system/copyright/customize/containers.php');

	// Copyright Statement
	include_once(SECRETUM_INC . '/system/copyright/customize/statement.php');

	// Display Settings
	include_once(SECRETUM_INC . '/system/copyright/customize/display.php');

	// Color Settings
	include_once(SECRETUM_INC . '/system/copyright/customize/colors.php');


	//
	// Copyright Panel
	//

	// Add Panel
	$wp_customize->add_panel('secretum_copyright_nav', array(
		'title' 			=> __(':: Copyright Nav', 'secretum'),
		'description' 		=> __('Manage features related to the copyright navigation menu area.', 'secretum'),
		'priority' 			=> 8,
	));

	// Container Settings
	include_once(SECRETUM_INC . '/system/copyright-nav/customize/containers.php');

	// Color Settings
	include_once(SECRETUM_INC . '/system/copyright-nav/customize/colors.php');


	//
	// Extras Panel
	//

	// Panel :: Extras
	$wp_customize->add_panel('secretum_extras', array(
		'title' 			=> __(':: Extras', 'secretum'),
		'description' 		=> __('Other theme features that do not fit into a category.', 'secretum'),
		'priority' 			=> 8,
	));

	// Analytics Tracking Code
	include_once(SECRETUM_INC . '/system/extras/customize/analytics.php');

	// Enqueue Management
	include_once(SECRETUM_INC . '/system/extras/customize/enqueue.php');

	// Textual Adjustments
	include_once(SECRETUM_INC . '/system/extras/customize/text.php');

	// Content Width
	include_once(SECRETUM_INC . '/system/extras/customize/width.php');
});


/**
 * WordPress Customizer Select Options Array: Text Colors
 *
 * @return array Color key and values
 */
if (!function_exists('secretum_customizer_text_colors_array')) {
	function secretum_customizer_text_colors_array()
	{
		return array(
			'' 						=> __('Theme Default', 'secretum'),
			'color-light' 			=> __('Light Theme Color Base', 'secretum'),
			'color-dark' 			=> __('Dark Theme Color Base', 'secretum'),
			'color-primary'			=> __('Primary Theme Color', 'secretum'),
			'color-primary-dark' 	=> __('Primary "Dark" Theme Color', 'secretum'),
			'color-primary-light' 	=> __('Primary "Light" Theme Color', 'secretum'),
			'color-secondary' 		=> __('Secondary Theme Color', 'secretum'),
			'color-primary-text' 	=> __('Primary Text Color', 'secretum'),
			'color-secondary-text' 	=> __('Secondary Text Color', 'secretum'),
			'color-white' 			=> __('White', 'secretum'),
			'color-whiteish' 		=> __('Whiteish', 'secretum'),
			'color-black' 			=> __('Black', 'secretum'),
			'color-blackish' 		=> __('Blackish', 'secretum'),
			'color-gray' 			=> __('Gray', 'secretum'),
			'color-gray-dark' 		=> __('Gray "Dark"', 'secretum'),
			'color-gray-100' 		=> __('Gray 100', 'secretum'),
			'color-gray-200' 		=> __('Gray 200', 'secretum'),
			'color-gray-300' 		=> __('Gray 300', 'secretum'),
			'color-gray-400' 		=> __('Gray 400', 'secretum'),
			'color-gray-500' 		=> __('Gray 500', 'secretum'),
			'color-gray-600' 		=> __('Gray 600', 'secretum'),
			'color-gray-700' 		=> __('Gray 700', 'secretum'),
			'color-gray-800' 		=> __('Gray 800', 'secretum'),
			'color-gray-900' 		=> __('Gray 900', 'secretum'),
			'color-blue' 			=> __('Blue', 'secretum'),
			'color-cyan' 			=> __('Cyan', 'secretum'),
			'color-green' 			=> __('Green', 'secretum'),
			'color-indigo' 			=> __('Indigo', 'secretum'),
			'color-orange' 			=> __('Orange', 'secretum'),
			'color-purple' 			=> __('Purple', 'secretum'),
			'color-pink' 			=> __('Pink', 'secretum'),
			'color-red' 			=> __('Red', 'secretum'),
			'color-teal' 			=> __('Teal', 'secretum'),
			'color-yellow' 			=> __('Yellow', 'secretum'),
			'color-danger' 			=> __('Danger', 'secretum'),
			'color-info' 			=> __('Info', 'secretum'),
			'color-success' 		=> __('Success', 'secretum'),
			'color-warning' 		=> __('Warning', 'secretum')
		);
	}
}


/**
 * WordPress Customizer Select Options Array: Text Hover Colors
 *
 * @return array Color key and values
 */
if (!function_exists('secretum_customizer_text_hover_colors_array')) {
	function secretum_customizer_text_hover_colors_array()
	{
		return array(
			'' 								=> __('Theme Default', 'secretum'),
			'color-light-hover' 			=> __('Light Theme Color Base', 'secretum'),
			'color-dark-hover' 				=> __('Dark Theme Color Base', 'secretum'),
			'color-primary-hover'			=> __('Primary Theme Color', 'secretum'),
			'color-primary-dark-hover' 		=> __('Primary "Dark" Theme Color', 'secretum'),
			'color-primary-light-hover' 	=> __('Primary "Light" Theme Color', 'secretum'),
			'color-secondary-hover' 		=> __('Secondary Theme Color', 'secretum'),
			'color-primary-text-hover' 		=> __('Primary Text Color', 'secretum'),
			'color-secondary-text-hover' 	=> __('Secondary Text Color', 'secretum'),
			'color-white-hover' 			=> __('White', 'secretum'),
			'color-whiteish-hover' 			=> __('Whiteish', 'secretum'),
			'color-black-hover' 			=> __('Black', 'secretum'),
			'color-blackish-hover' 			=> __('Blackish', 'secretum'),
			'color-gray-hover' 				=> __('Gray', 'secretum'),
			'color-gray-dark-hover' 		=> __('Gray "Dark"', 'secretum'),
			'color-gray-100-hover' 			=> __('Gray 100', 'secretum'),
			'color-gray-200-hover' 			=> __('Gray 200', 'secretum'),
			'color-gray-300-hover' 			=> __('Gray 300', 'secretum'),
			'color-gray-400-hover' 			=> __('Gray 400', 'secretum'),
			'color-gray-500-hover' 			=> __('Gray 500', 'secretum'),
			'color-gray-600-hover' 			=> __('Gray 600', 'secretum'),
			'color-gray-700-hover' 			=> __('Gray 700', 'secretum'),
			'color-gray-800-hover' 			=> __('Gray 800', 'secretum'),
			'color-gray-900-hover' 			=> __('Gray 900', 'secretum'),
			'color-blue-hover' 				=> __('Blue', 'secretum'),
			'color-cyan-hover' 				=> __('Cyan', 'secretum'),
			'color-green-hover' 			=> __('Green', 'secretum'),
			'color-indigo-hover' 			=> __('Indigo', 'secretum'),
			'color-orange-hover' 			=> __('Orange', 'secretum'),
			'color-purple-hover' 			=> __('Purple', 'secretum'),
			'color-pink-hover' 				=> __('Pink', 'secretum'),
			'color-red-hover' 				=> __('Red', 'secretum'),
			'color-teal-hover' 				=> __('Teal', 'secretum'),
			'color-yellow-hover' 			=> __('Yellow', 'secretum'),
			'color-danger-hover' 			=> __('Danger', 'secretum'),
			'color-info-hover' 				=> __('Info', 'secretum'),
			'color-success-hover' 			=> __('Success', 'secretum'),
			'color-warning-hover' 			=> __('Warning', 'secretum')
		);
	}
}


/**
 * WordPress Customizer Select Options Array: Background Colors
 *
 * @return array Color key and values
 */
if (!function_exists('secretum_customizer_background_colors_array')) {
	function secretum_customizer_background_colors_array()
	{
		return array(
			'' 					=> __('Theme Default', 'secretum'),
			'bg-transparent' 	=> __('Transparent Background', 'secretum'),
			'content-bg' 		=> __('Default Content Background', 'secretum'),
			'body-bg' 			=> __('Default Body Background', 'secretum'),
			'bg-light' 			=> __('Light Theme Color Base', 'secretum'),
			'bg-dark' 			=> __('Dark Theme Color Base', 'secretum'),
			'bg-primary'		=> __('Primary Theme Color', 'secretum'),
			'bg-primary-dark' 	=> __('Primary "Dark" Theme Color', 'secretum'),
			'bg-primary-light' 	=> __('Primary "Light" Theme Color', 'secretum'),
			'bg-secondary' 		=> __('Secondary Theme Color', 'secretum'),
			'bg-primary-text' 	=> __('Primary Text Color', 'secretum'),
			'bg-secondary-text' => __('Secondary Text Color', 'secretum'),
			'bg-white' 			=> __('White', 'secretum'),
			'bg-whiteish' 		=> __('Whiteish', 'secretum'),
			'bg-black' 			=> __('Black', 'secretum'),
			'bg-blackish' 		=> __('Blackish', 'secretum'),
			'bg-gray' 			=> __('Gray', 'secretum'),
			'bg-gray-dark' 		=> __('Gray "Dark"', 'secretum'),
			'bg-gray-100' 		=> __('Gray 100', 'secretum'),
			'bg-gray-200' 		=> __('Gray 200', 'secretum'),
			'bg-gray-300' 		=> __('Gray 300', 'secretum'),
			'bg-gray-400' 		=> __('Gray 400', 'secretum'),
			'bg-gray-500' 		=> __('Gray 500', 'secretum'),
			'bg-gray-600' 		=> __('Gray 600', 'secretum'),
			'bg-gray-700' 		=> __('Gray 700', 'secretum'),
			'bg-gray-800' 		=> __('Gray 800', 'secretum'),
			'bg-gray-900' 		=> __('Gray 900', 'secretum'),
			'bg-blue' 			=> __('Blue', 'secretum'),
			'bg-cyan' 			=> __('Cyan', 'secretum'),
			'bg-green' 			=> __('Green', 'secretum'),
			'bg-indigo' 		=> __('Indigo', 'secretum'),
			'bg-orange' 		=> __('Orange', 'secretum'),
			'bg-purple' 		=> __('Purple', 'secretum'),
			'bg-pink' 			=> __('Pink', 'secretum'),
			'bg-red' 			=> __('Red', 'secretum'),
			'bg-teal' 			=> __('Teal', 'secretum'),
			'bg-yellow' 		=> __('Yellow', 'secretum'),
			'bg-danger' 		=> __('Danger', 'secretum'),
			'bg-info' 			=> __('Info', 'secretum'),
			'bg-success' 		=> __('Success', 'secretum'),
			'bg-warning' 		=> __('Warning', 'secretum')
		);
	}
}


/**
 * WordPress Customizer Select Options Array: Background Hover Colors
 *
 * @return array Color key and values
 */
if (!function_exists('secretum_customizer_background_hover_colors_array')) {
	function secretum_customizer_background_hover_colors_array()
	{
		return array(
			'' 							=> __('Theme Default', 'secretum'),
			'bg-transparent-hover' 		=> __('Transparent Background', 'secretum'),
			'content-bg-hover' 			=> __('Default Content Background', 'secretum'),
			'body-bg-hover' 			=> __('Default Body Background', 'secretum'),
			'bg-light-hover' 			=> __('Light Theme Color Base', 'secretum'),
			'bg-dark-hover' 			=> __('Dark Theme Color Base', 'secretum'),
			'bg-primary-hover'			=> __('Primary Theme Color', 'secretum'),
			'bg-primary-dark-hover' 	=> __('Primary "Dark" Theme Color', 'secretum'),
			'bg-primary-light-hover' 	=> __('Primary "Light" Theme Color', 'secretum'),
			'bg-secondary-hover' 		=> __('Secondary Theme Color', 'secretum'),
			'bg-primary-text-hover' 	=> __('Primary Text Color', 'secretum'),
			'bg-secondary-text-hover' 	=> __('Secondary Text Color', 'secretum'),
			'bg-white-hover' 			=> __('White', 'secretum'),
			'bg-whiteish-hover' 		=> __('Whiteish', 'secretum'),
			'bg-black-hover' 			=> __('Black', 'secretum'),
			'bg-blackish-hover' 		=> __('Blackish', 'secretum'),
			'bg-gray-hover' 			=> __('Gray', 'secretum'),
			'bg-gray-dark-hover' 		=> __('Gray "Dark"', 'secretum'),
			'bg-gray-100-hover' 		=> __('Gray 100', 'secretum'),
			'bg-gray-200-hover' 		=> __('Gray 200', 'secretum'),
			'bg-gray-300-hover' 		=> __('Gray 300', 'secretum'),
			'bg-gray-400-hover' 		=> __('Gray 400', 'secretum'),
			'bg-gray-500-hover' 		=> __('Gray 500', 'secretum'),
			'bg-gray-600-hover' 		=> __('Gray 600', 'secretum'),
			'bg-gray-700-hover' 		=> __('Gray 700', 'secretum'),
			'bg-gray-800-hover' 		=> __('Gray 800', 'secretum'),
			'bg-gray-900-hover' 		=> __('Gray 900', 'secretum'),
			'bg-blue-hover' 			=> __('Blue', 'secretum'),
			'bg-cyan-hover' 			=> __('Cyan', 'secretum'),
			'bg-green-hover' 			=> __('Green', 'secretum'),
			'bg-indigo-hover' 			=> __('Indigo', 'secretum'),
			'bg-orange-hover' 			=> __('Orange', 'secretum'),
			'bg-purple-hover' 			=> __('Purple', 'secretum'),
			'bg-pink-hover' 			=> __('Pink', 'secretum'),
			'bg-red-hover' 				=> __('Red', 'secretum'),
			'bg-teal-hover' 			=> __('Teal', 'secretum'),
			'bg-yellow-hover' 			=> __('Yellow', 'secretum'),
			'bg-danger-hover' 			=> __('Danger', 'secretum'),
			'bg-info-hover' 			=> __('Info', 'secretum'),
			'bg-success-hover' 			=> __('Success', 'secretum'),
			'bg-warning-hover' 			=> __('Warning', 'secretum')
		);
	}
}


/**
 * WordPress Customizer Select Options Array: Border Colors
 *
 * @return array Color key and values
 */
if (!function_exists('secretum_customizer_border_colors_array')) {
	function secretum_customizer_border_colors_array()
	{
		return array(
			'' 						=> __('Theme Default', 'secretum'),
			'border-light' 			=> __('Light Theme Color Base', 'secretum'),
			'border-dark' 			=> __('Dark Theme Color Base', 'secretum'),
			'border-primary'		=> __('Primary Theme Color', 'secretum'),
			'border-primary-dark' 	=> __('Primary "Dark" Theme Color', 'secretum'),
			'border-primary-light' 	=> __('Primary "Light" Theme Color', 'secretum'),
			'border-secondary' 		=> __('Secondary Theme Color', 'secretum'),
			'border-primary-text' 	=> __('Primary Text Color', 'secretum'),
			'border-secondary-text' => __('Secondary Text Color', 'secretum'),
			'border-white' 			=> __('White', 'secretum'),
			'border-whiteish' 		=> __('Whiteish', 'secretum'),
			'border-black' 			=> __('Black', 'secretum'),
			'border-blackish' 		=> __('Blackish', 'secretum'),
			'border-gray' 			=> __('Gray', 'secretum'),
			'border-gray-dark' 		=> __('Gray "Dark"', 'secretum'),
			'border-gray-100' 		=> __('Gray 100', 'secretum'),
			'border-gray-200' 		=> __('Gray 200', 'secretum'),
			'border-gray-300' 		=> __('Gray 300', 'secretum'),
			'border-gray-400' 		=> __('Gray 400', 'secretum'),
			'border-gray-500' 		=> __('Gray 500', 'secretum'),
			'border-gray-600' 		=> __('Gray 600', 'secretum'),
			'border-gray-700' 		=> __('Gray 700', 'secretum'),
			'border-gray-800' 		=> __('Gray 800', 'secretum'),
			'border-gray-900' 		=> __('Gray 900', 'secretum'),
			'border-blue' 			=> __('Blue', 'secretum'),
			'border-cyan' 			=> __('Cyan', 'secretum'),
			'border-green' 			=> __('Green', 'secretum'),
			'border-indigo' 		=> __('Indigo', 'secretum'),
			'border-orange' 		=> __('Orange', 'secretum'),
			'border-purple' 		=> __('Purple', 'secretum'),
			'border-pink' 			=> __('Pink', 'secretum'),
			'border-red' 			=> __('Red', 'secretum'),
			'border-teal' 			=> __('Teal', 'secretum'),
			'border-yellow' 		=> __('Yellow', 'secretum'),
			'border-danger' 		=> __('Danger', 'secretum'),
			'border-info' 			=> __('Info', 'secretum'),
			'border-success' 		=> __('Success', 'secretum'),
			'border-warning' 		=> __('Warning', 'secretum')
		);
	}
}
