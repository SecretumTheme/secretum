<?php
/**
 * Panels, Sections, & Settings
 *
 * @package    Secretum
 * @subpackage Customizer
 * @author     SecretumTheme <author@secretumtheme.com>
 * @copyright  2018-2019 Secretum
 * @license    https://github.com/SecretumTheme/secretum/blob/master/license.txt GPL-2.0
 * @link       https://github.com/SecretumTheme/secretum/blob/master/inc/customize/sections/featured-image.php
 * @since      1.0.0
 */

namespace Secretum;

// Panel.
$customizer->panel(
	'breadcrumbs',
	__( 'Breadcrumbs', 'secretum' )
);


// Section.
$customizer->section(
	'breadcrumbs_display',
	'breadcrumbs',
	__( 'Display Settings', 'secretum' ),
	__( 'To view display location changes, click the publish button, then click the reload icon (bottom right) to view saved changes.', 'secretum' )
);

// Checkbox.
$customizer->checkbox(
	'breadcrumbs_display',
	'breadcrumbs_posts_status',
	__( 'Breadcrumbs on Posts', 'secretum' ),
	__( 'Select to display. Uncheck to remove all html markup.', 'secretum' ),
	$defaults['breadcrumbs_posts_status']
);

// Checkbox.
$customizer->checkbox(
	'breadcrumbs_display',
	'breadcrumbs_pages_status',
	__( 'Breadcrumbs on Pages', 'secretum' ),
	__( 'Select to display. Uncheck to remove all html markup.', 'secretum' ),
	$defaults['breadcrumbs_pages_status']
);


// Select.
$customizer->select(
	'breadcrumbs_display',
	'breadcrumbs_display_location',
	__( 'Breadcrumb Display Location', 'secretum' ),
	'',
	$defaults['breadcrumbs_display_location'],
	[
		'after_header'        => __( 'After Theme Header Area', 'secretum' ),
		'before_post_content' => __( 'Before Post/Page Content Title', 'secretum' ),
	]
);


// Select.
$customizer->select(
	'breadcrumbs_display',
	'breadcrumbs_categories_type',
	__( 'Category Display', 'secretum' ),
	'',
	$defaults['breadcrumbs_categories_type'],
	[
		''     => __( 'Single Parent Catgory', 'secretum' ),
		'all'  => __( 'All Possible Categories', 'secretum' ),
		'none' => __( 'No Categories', 'secretum' ),
	]
);


// Select.
$customizer->select(
	'breadcrumbs_display',
	'breadcrumbs_home',
	__( 'Return Home Link', 'secretum' ),
	'',
	$defaults['breadcrumbs_home'],
	[
		''     => __( 'Default Home Link', 'secretum' ),
		'icon' => __( 'Home Icon Left Of Home Link', 'secretum' ),
		'link' => __( 'Home Icon As Home Link', 'secretum' ),
		'none' => __( 'No Return Home Link', 'secretum' ),
	]
);


// Wrapper.
$wrapper->settings(
	[
		'section' => 'breadcrumbs',
	]
);


// Wrapper Borders.
$borders->settings(
	[
		'section' => 'breadcrumbs_wrapper',
	]
);


// Container.
$container->settings(
	[
		'section' => 'breadcrumbs',
		'type'    => false,
	]
);


// Container Borders.
$borders->settings(
	[
		'section' => 'breadcrumbs_container',
	]
);

// Typography.
$textuals->settings(
	[
		'section'   => 'breadcrumbs',
		'alignment' => false,
	]
);
