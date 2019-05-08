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
	'featured_image',
	__( 'Featured Image', 'secretum' )
);


// Section.
$customizer->section(
	'featured_image_display',
	'featured_image',
	__( 'Display Settings', 'secretum' ),
	__( 'A post or page must have a feature image already selected for the featured image to display. To view: open any post or page that already has a featured image set.', 'secretum' )
);

// Checkbox.
$customizer->checkbox(
	'featured_image_display',
	'featured_image_status',
	__( 'Featured Image', 'secretum' ),
	__( 'Select to display. Uncheck to remove all html markup.', 'secretum' ),
	$defaults['featured_image_status']
);


// Select.
$customizer->select(
	'featured_image_display',
	'featured_image_display_location',
	__( 'Featured Image Display Location', 'secretum' ),
	'',
	$defaults['featured_image_display_location'],
	[
		''               => __( 'Stylesheet Default', 'secretum' ),
		'before_content' => __( 'Before Post Title', 'secretum' ),
		'before_entry'   => __( 'Before Post Content', 'secretum' ),
		'after_header'   => __( 'After Theme Header Area', 'secretum' ),
	]
);


// Wrapper.
$wrapper->settings(
	[
		'section' => 'featured_image',
	]
);


// Wrapper Borders.
$borders->settings(
	[
		'section' => 'featured_image_wrapper',
	]
);


// Container.
$container->settings(
	[
		'section' => 'featured_image',
		'type'    => false,
	]
);


// Container Borders.
$borders->settings(
	[
		'section' => 'featured_image_container',
	]
);
