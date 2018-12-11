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


	// Get Default Settings
	$default = secretum_customizer_default_settings();

	// Controller Setting Arrays
	include_once(SECRETUM_INC . '/system/customizer/choices/alignments.php');
	include_once(SECRETUM_INC . '/system/customizer/choices/borders.php');
	include_once(SECRETUM_INC . '/system/customizer/choices/colors.php');
	include_once(SECRETUM_INC . '/system/customizer/choices/containers.php');
	include_once(SECRETUM_INC . '/system/customizer/choices/font-families.php');
	include_once(SECRETUM_INC . '/system/customizer/choices/margins.php');
	include_once(SECRETUM_INC . '/system/customizer/choices/paddings.php');
	include_once(SECRETUM_INC . '/system/customizer/choices/sizes.php');


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

	// General Settings
	include_once(SECRETUM_INC . '/system/header/customize/settings.php');

	// Color Settings
	include_once(SECRETUM_INC . '/system/header/customize/colors.php');


	//
	// Primary Nav Panel
	//

	// Add Panel
	$wp_customize->add_panel('secretum_primary_nav', array(
		'title' 		=> __(':: Primary Nav', 'secretum'),
		'description' 	=> __('Manage features related to the primary navigation menu.', 'secretum'),
		'priority' 		=> 8,
	));

	// Display Status
	include_once(SECRETUM_INC . '/system/primary-nav/customize/display.php');

	// Wrapper Settings
	include_once(SECRETUM_INC . '/system/primary-nav/customize/wrapper.php');

	// Container Settings
	include_once(SECRETUM_INC . '/system/primary-nav/customize/container.php');

	// Items Settings
	include_once(SECRETUM_INC . '/system/primary-nav/customize/items.php');

	// Toggler
	include_once(SECRETUM_INC . '/system/primary-nav/customize/toggler.php');


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
	include_once(SECRETUM_INC . '/system/frontpage/customize/display.php');


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

	// Reset Settings
	include_once(SECRETUM_INC . '/system/extras/customize/reset.php');
});
