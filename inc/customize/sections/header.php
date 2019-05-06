<?php
/**
 * Panels, Sections, & Settings
 *
 * @package    Secretum
 * @subpackage Customizer
 * @author     SecretumTheme <author@secretumtheme.com>
 * @copyright  2018-2019 Secretum
 * @license    https://github.com/SecretumTheme/secretum/blob/master/license.txt GPL-2.0
 * @link       https://github.com/SecretumTheme/secretum/blob/master/inc/customize/sections/header.php
 * @since      1.0.0
 */

namespace Secretum;

// Panel.
$customizer->panel(
	'header',
	__( 'Header', 'secretum' )
);

// Section.
$customizer->section(
	'header_display',
	'header',
	__( 'Display Settings', 'secretum' ),
	''
);

// Checkbox.
$customizer->checkbox(
	'header_display',
	'header_status',
	__( 'Header Area', 'secretum' ),
	__( 'Select to display. Uncheck to remove all html markup.', 'secretum' ),
	$defaults['header_status']
);

// Wrapper.
$wrapper->settings(
	[
		'section' => 'header',
	]
);


// Wrapper Borders.
$borders->settings(
	[
		'section' => 'header_wrapper',
	]
);


// Container.
$container->settings(
	[
		'section' => 'header',
	]
);


// Container Borders.
$borders->settings(
	[
		'section' => 'header_container',
	]
);

$wp_customize->add_section(
	'header_image',
	[
		'panel'          => 'secretum_header_panel',
		'title'          => __( 'Header Media', 'secretum' ),
		'theme_supports' => 'custom-header',
		'priority'       => 10,
	]
);
