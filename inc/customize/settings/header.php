<?php
/**
 * Panels, Sections, & Settings
 *
 * @package    Secretum
 * @subpackage Secretum\Customizer
 * @author     SecretumTheme <author@secretumtheme.com>
 * @copyright  2018-2019 Secretum
 * @license    https://github.com/SecretumTheme/secretum/blob/master/license.txt GPL-2.0
 * @link       https://github.com/SecretumTheme/secretum/blob/master/inc/customize/settings/header.php
 */

namespace Secretum;

// @about Panel
$customizer->panel(
	'header',
	__( 'Header', 'secretum' )
);

// @about Section
$customizer->section(
	'header_display',
	'header',
	__( 'Display Settings', 'secretum' ),
	''
);
/**
// @about Checkbox
$customizer->checkbox(
	'header_display',
	'custom_headers',
	__( 'Enable Custom Headers Feature', 'secretum' ),
	__( 'Before enabling set all default header settings. A custom header must be published before it will display.', 'secretum' ),
	$default['custom_headers']
);
*/
// @about Checkbox
$customizer->checkbox(
	'header_display',
	'header_status',
	__( 'Hide Header Area', 'secretum' ),
	__( 'Select to disable the entire header area.', 'secretum' ),
	$default['header_status']
);


// Wrapper.
\Secretum\Wrapper::instance( $customizer, $default )->settings( [
	'section' => 'header',
] );


// Borders.
\Secretum\Borders::instance( $customizer, $defaults )->settings( [
	'section' 	=> 'header_wrapper',
	'selector' 	=> '',
	'callback' 	=> '',
] );

/**
// @about Wrapper
$customizer->section(
	'header_wrapper',
	'header',
	__( 'Wrapper', 'secretum' ),
	__( 'Customize the outter wrapper around header top area.', 'secretum' )
);

// @about Select
$customizer->select(
	'header_wrapper',
	'header_wrapper_background_color',
	__( 'Background Color', 'secretum' ),
	'',
	$default['header_wrapper_background_color'],
	secretum_customizer_background_colors()
);

// @about Select
$customizer->select(
	'header_wrapper',
	'header_wrapper_padding_x',
	__( 'Padding - Left & Right', 'secretum' ),
	'',
	$default['header_wrapper_padding_x'],
	secretum_customizer_padding_left_right()
);

// @about Select
$customizer->select(
	'header_wrapper',
	'header_wrapper_padding_y',
	__( 'Padding - Top & Bottom', 'secretum' ),
	'',
	$default['header_wrapper_padding_y'],
	secretum_customizer_padding_top_bottom()
);

// @about Select
$customizer->select(
	'header_wrapper',
	'header_wrapper_margin_bottom',
	__( 'Margin - Bottom', 'secretum' ),
	__( 'Increases spacing after section.', 'secretum' ),
	$default['header_wrapper_margin_bottom'],
	secretum_customizer_margin_bottom()
);

// @about Select
$customizer->select(
	'header_wrapper',
	'header_wrapper_margin_top',
	__( 'Margin - Top', 'secretum' ),
	__( 'Increases spacing before section.', 'secretum' ),
	$default['header_wrapper_margin_top'],
	secretum_customizer_margin_top()
);


// @about Select
$customizer->select(
	'header_wrapper',
	'header_wrapper_border_type',
	__( 'Border Type', 'secretum' ),
	'',
	$default['header_wrapper_border_type'],
	secretum_customizer_border_types()
);

// @about Select
$customizer->select(
	'header_wrapper',
	'header_wrapper_border_color',
	__( 'Border Color', 'secretum' ),
	'',
	$default['header_wrapper_border_color'],
	secretum_customizer_border_colors()
);
*/


// Container.
\Secretum\Container::instance( $customizer, $defaults )->settings( [
	'section' => 'header',
] );


// Borders.
\Secretum\Borders::instance( $customizer, $defaults )->settings( [
	'section' => 'header_container',
] );

/**
// @about Container
$customizer->section(
	'header_container',
	'header',
	__( 'Container', 'secretum' ),
	__( 'Customize the container within the header top wrapper.', 'secretum' )
);

// @about Radio
$customizer->radio(
	'header_container',
	'header_container_type',
	__( 'Container Type', 'secretum' ),
	'',
	$default['header_container_type'],
	secretum_customizer_container_types()
);

// @about Select
$customizer->select(
	'header_container',
	'header_container_background_color',
	__( 'Background Color', 'secretum' ),
	'',
	$default['header_container_background_color'],
	secretum_customizer_background_colors()
);

// @about Select
$customizer->select(
	'header_container',
	'header_container_margin_x',
	__( 'Margin - Left & Right', 'secretum' ),
	'',
	$default['header_container_margin_x'],
	secretum_customizer_margin_left_right()
);

// @about Select
$customizer->select(
	'header_container',
	'header_container_margin_y',
	__( 'Margin - Top & Bottom', 'secretum' ),
	'',
	$default['header_container_margin_y'],
	secretum_customizer_margin_top_bottom()
);

// @about Select
$customizer->select(
	'header_container',
	'header_container_padding_x',
	__( 'Padding - Left & Right', 'secretum' ),
	'',
	$default['header_container_padding_x'],
	secretum_customizer_padding_left_right()
);

// @about Select
$customizer->select(
	'header_container',
	'header_container_padding_y',
	__( 'Padding - Top & Bottom', 'secretum' ),
	'',
	$default['header_container_padding_y'],
	secretum_customizer_padding_top_bottom()
);
*/