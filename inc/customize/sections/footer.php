<?php
/**
 * Panels, Sections, & Settings
 *
 * @package    Secretum
 * @subpackage Customizer
 * @author     SecretumTheme <author@secretumtheme.com>
 * @copyright  2018-2019 Secretum
 * @license    https://github.com/SecretumTheme/secretum/blob/master/license.txt GPL-2.0
 * @link       https://github.com/SecretumTheme/secretum/blob/master/inc/customize/sections/footer.php
 * @since      1.0.0
 */

namespace Secretum;

// Panel.
$customizer->panel(
	'footer',
	__( 'Footer', 'secretum' )
);


// Section.
$customizer->section(
	'footer_display',
	'footer',
	__( 'Display Settings', 'secretum' ),
	''
);

// Checkbox.
$customizer->checkbox(
	'footer_display',
	'footer_status',
	__( 'Footer Area', 'secretum' ),
	__( 'Select to display. Uncheck to remove all html markup. A widget must be assigned one of the footer widget areas for the footer to display.', 'secretum' ),
	$defaults['footer_status']
);


// Wrapper.
$wrapper->settings(
	[
		'section' => 'footer',
	]
);


// Wrapper Borders.
$borders->settings(
	[
		'section' => 'footer_wrapper',
	]
);


// Container.
$container->settings(
	[
		'section' => 'footer',
	]
);

$wp_customize->get_setting( 'secretum[footer_container_background_color]' )->transport = 'postMessage';
$wp_customize->get_setting( 'secretum[footer_container_margin_top]' )->transport       = 'postMessage';
$wp_customize->get_setting( 'secretum[footer_container_margin_bottom]' )->transport    = 'postMessage';
$wp_customize->get_setting( 'secretum[footer_container_padding_x]' )->transport        = 'postMessage';
$wp_customize->get_setting( 'secretum[footer_container_padding_y]' )->transport        = 'postMessage';


// Container Borders.
$borders->settings(
	[
		'section' => 'footer_container',
	]
);

$wp_customize->get_setting( 'secretum[footer_container_border_type]' )->transport   = 'postMessage';
$wp_customize->get_setting( 'secretum[footer_container_border_radius]' )->transport = 'postMessage';
$wp_customize->get_setting( 'secretum[footer_container_border_color]' )->transport  = 'postMessage';


// Typography.
$textuals->settings(
	[
		'section'   => 'footer',
		'alignment' => true,
	]
);

$wp_customize->get_setting( 'secretum[footer_textual_alignment]' )->transport        = 'postMessage';
$wp_customize->get_setting( 'secretum[footer_textual_font_family]' )->transport      = 'postMessage';
$wp_customize->get_setting( 'secretum[footer_textual_font_size]' )->transport        = 'postMessage';
$wp_customize->get_setting( 'secretum[footer_textual_font_style]' )->transport       = 'postMessage';
$wp_customize->get_setting( 'secretum[footer_textual_text_transform]' )->transport   = 'postMessage';
$wp_customize->get_setting( 'secretum[footer_textual_text_color]' )->transport       = 'postMessage';
$wp_customize->get_setting( 'secretum[footer_textual_link_color]' )->transport       = 'postMessage';
$wp_customize->get_setting( 'secretum[footer_textual_link_hover_color]' )->transport = 'postMessage';
