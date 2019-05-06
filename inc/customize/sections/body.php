<?php
/**
 * Panels, Sections, & Settings
 *
 * @package    Secretum
 * @subpackage Customizer
 * @author     SecretumTheme <author@secretumtheme.com>
 * @copyright  2018-2019 Secretum
 * @license    https://github.com/SecretumTheme/secretum/blob/master/license.txt GPL-2.0
 * @link       https://github.com/SecretumTheme/secretum/blob/master/inc/customize/settings/body.php
 * @since      1.0.0
 */

namespace Secretum;

// Panel.
$customizer->panel(
	'body',
	__( 'Body', 'secretum' )
);


// Section.
$customizer->section(
	'body_display',
	'body',
	__( 'Display Settings', 'secretum' ),
	__( 'This setting includes the entire page body and the left-right sidebar(s), and excludes the website header and footer areas.', 'secretum' )
);


// Checkbox.
$customizer->checkbox(
	'body_display',
	'body_status',
	__( 'Page Body Area', 'secretum' ),
	__( 'Select to display. Uncheck to remove all html markup.', 'secretum' ),
	$defaults['body_status']
);


// Wrapper.
$wrapper->settings(
	[
		'section' => 'body',
	]
);


// Wrapper Borders.
$borders->settings(
	[
		'section' => 'body_wrapper',
	]
);


// Container.
$container->settings(
	[
		'section' => 'body',
	]
);


// Container Borders.
$borders->settings(
	[
		'section' => 'body_container',
	]
);
