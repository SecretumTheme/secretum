<?php
/**
 * Panels, Sections, & Settings
 *
 * @package    Secretum
 * @subpackage Customizer
 * @author     SecretumTheme <author@secretumtheme.com>
 * @copyright  2018-2019 Secretum
 * @license    https://github.com/SecretumTheme/secretum/blob/master/license.txt GPL-2.0
 * @link       https://github.com/SecretumTheme/secretum/blob/master/inc/customize/settings/copyright.php
 * @since      1.0.0
 */

namespace Secretum;

// Panel.
$customizer->panel(
	'copyright',
	__( 'Copyright', 'secretum' )
);


// Section.
$customizer->section(
	'copyright_display',
	'copyright',
	__( 'Display Settings', 'secretum' ),
	''
);


// Checkbox.
$customizer->checkbox(
	'copyright_display',
	'copyright_status',
	__( 'Copyright Area', 'secretum' ),
	__( 'Select to display. Uncheck to remove all html markup.', 'secretum' ),
	$defaults['copyright_status']
);


// Wrapper.
$wrapper->settings(
	[
		'section' => 'copyright',
	]
);


// Wrapper Borders.
$borders->settings(
	[
		'section' => 'copyright_wrapper',
	]
);


// Container.
$container->settings(
	[
		'section' => 'copyright',
	]
);


// Container Borders.
$borders->settings(
	[
		'section' => 'copyright_container',
	]
);


// Typography.
$textuals->settings(
	[
		'section'   => 'copyright',
		'alignment' => true,
	]
);


// Display.
$customizer->section(
	'copyright_statement',
	'copyright',
	__( 'Copyright Statement', 'secretum' ),
	''
);


// Textarea.
$customizer->textarea(
	'copyright_statement',
	'copyright_text',
	__( 'Statement', 'secretum' ),
	/* Translators: Example html - 1) year 2) url 3) blog name */
	sprintf( __( 'HTML Allowed. Example: &#x3C;p&#x3E;Copyright %1$s &#x26;copy; &#x3C;a href=&#x22;%2$s&#x22; target=&#x22;_self&#x22;&#x3E;%3$s&#x3C;/a&#x3E; - All Rights Reserved.&#x3C;/p&#x3E;', 'secretum' ), date( 'Y', time() ), esc_url( get_home_url( '/' ) ), get_bloginfo( 'name' ) ),
	wp_kses_post( $defaults['copyright_text'] )
);


// Refresh Partial :: Copyright Statement.
$wp_customize->selective_refresh->add_partial(
	'copyright_text_partial',
	[
		'settings'            => [
			'secretum[copyright_text]',
		],
		'selector'            => '.site-info',
		'render_callback'     => function() {
			return wp_kses_post( $defaults['copyright_text'] );
		},
		'container_inclusive' => false,
	]
);
