<?php
/**
 * Panels, Sections, & Settings
 *
 * @package    Secretum
 * @subpackage Customize\Settings\Featured-Image
 * @author     SecretumTheme <author@secretumtheme.com>
 * @copyright  2018-2019 Secretum
 * @license    https://github.com/SecretumTheme/secretum/blob/master/license.txt GPL-2.0
 * @link       https://github.com/SecretumTheme/secretum/blob/master/inc/customize/settings/featured-image.php
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
	''
);


// Checkbox.
$customizer->checkbox(
	'featured_image_display',
	'featured_image_status',
	__( 'Disable Featured Images', 'secretum' ),
	'',
	$default['featured_image_status']
);


// Partial.
$customizer->partial(
	'featured_image_status',
	'.featured-image-header'
);


// Select.
$customizer->select(
	'featured_image_display',
	'featured_image_display_location',
	__( 'Featured Image Display Location', 'secretum' ),
	'',
	$default['featured_image_display_location'],
	[
		'' 					=> __( 'Theme Default', 'secretum' ),
		'before_content' 	=> __( 'Before Post Title', 'secretum' ),
		'before_entry' 		=> __( 'Before Post Content', 'secretum' ),
		'after_header' 		=> __( 'After Theme Header Area', 'secretum' ),
	]
);


// Wrapper.
$wrapper->settings( [
	'section' => 'featured_image',
] );


// Wrapper Borders.
$borders->settings( [
	'section' => 'featured_image_wrapper',
] );


// Container.
$container->settings( [
	'section' => 'featured_image',
] );


// Container Borders.
$borders->settings( [
	'section' => 'featured_image_container',
] );
