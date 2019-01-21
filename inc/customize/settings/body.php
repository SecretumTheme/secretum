<?php
/**
 * Panels, Sections, & Settings
 *
 * @package    Secretum
 * @subpackage Secretum\Customizer
 * @author     SecretumTheme <author@secretumtheme.com>
 * @copyright  2018-2019 Secretum
 * @license    https://github.com/SecretumTheme/secretum/blob/master/license.txt GPL-2.0
 * @link       https://github.com/SecretumTheme/secretum/blob/master/inc/customize/settings/body.php
 */

namespace Secretum;

// @about Panel
$customizer->panel(
	'body',
	__( 'Body', 'secretum' )
);


// Wrapper.
\Secretum\Wrapper::instance( $customizer, $default )->settings( [
	'section' => 'body',
] );


// Borders.
\Secretum\Borders::instance( $customizer, $defaults )->settings( [
	'section' => 'body_wrapper',
] );

/**
// @about Section
$customizer->section(
	'body_wrapper',
	'body',
	__( 'Wrapper', 'secretum' ),
	__( 'Customize the outter wrapper around the content entry+sidebar area.', 'secretum' )
);

// @about Select
$customizer->select(
	'body_wrapper',
	'body_wrapper_background_color',
	__( 'Background Color', 'secretum' ),
	'',
	$default['body_wrapper_background_color'],
	secretum_customizer_background_colors()
);

// @about Select
$customizer->select(
	'body_wrapper',
	'body_wrapper_padding_x',
	__( 'Padding - Left & Right', 'secretum' ),
	'',
	$default['body_wrapper_padding_x'],
	secretum_customizer_padding_left_right()
);

// @about Select
$customizer->select(
	'body_wrapper',
	'body_wrapper_padding_y',
	__( 'Padding - Top & Bottom', 'secretum' ),
	'',
	$default['body_wrapper_padding_y'],
	secretum_customizer_padding_top_bottom()
);

// @about Select
$customizer->select(
	'body_wrapper',
	'body_wrapper_margin_bottom',
	__( 'Margin - Bottom', 'secretum' ),
	__( 'Increases spacing after section.', 'secretum' ),
	$default['body_wrapper_margin_bottom'],
	secretum_customizer_margin_bottom()
);

// @about Select
$customizer->select(
	'body_wrapper',
	'body_wrapper_margin_top',
	__( 'Margin - Top', 'secretum' ),
	__( 'Increases spacing before section.', 'secretum' ),
	$default['body_wrapper_margin_top'],
	secretum_customizer_margin_top()
);
*/

// @about Select
$customizer->select(
	'body_wrapper',
	'body_wrapper_border_type',
	__( 'Border Type', 'secretum' ),
	'',
	$default['body_wrapper_border_type'],
	secretum_customizer_border_types()
);

// @about Select
$customizer->select(
	'body_wrapper',
	'body_wrapper_border_color',
	__( 'Border Color', 'secretum' ),
	'',
	$default['body_wrapper_border_color'],
	secretum_customizer_border_colors()
);


// Container.
\Secretum\Container::instance( $customizer, $defaults )->settings( [
	'section' => 'body',
] );


// Borders.
\Secretum\Borders::instance( $customizer, $defaults )->settings( [
	'section' => 'body_container',
] );

/**
// @about Container
$customizer->section(
	'body_container',
	'body',
	__( 'Container', 'secretum' ),
	__( 'Customize the container within the body top wrapper.', 'secretum' )
);

// @about Radio
$customizer->radio(
	'body_container',
	'body_container_type',
	__( 'Container Type', 'secretum' ),
	'',
	$default['body_container_type'],
	secretum_customizer_container_types()
);

// @about Select
$customizer->select(
	'body_container',
	'body_container_background_color',
	__( 'Background Color', 'secretum' ),
	'',
	$default['body_container_background_color'],
	secretum_customizer_background_colors()
);

// @about Select
$customizer->select(
	'body_container',
	'body_container_margin_x',
	__( 'Margin - Left & Right', 'secretum' ),
	'',
	$default['body_container_margin_x'],
	secretum_customizer_margin_left_right()
);

// @about Select
$customizer->select(
	'body_container',
	'body_container_margin_y',
	__( 'Margin - Top & Bottom', 'secretum' ),
	'',
	$default['body_container_margin_y'],
	secretum_customizer_margin_top_bottom()
);

// @about Select
$customizer->select(
	'body_container',
	'body_container_padding_x',
	__( 'Padding - Left & Right', 'secretum' ),
	'',
	$default['body_container_padding_x'],
	secretum_customizer_padding_left_right()
);

// @about Select
$customizer->select(
	'body_container',
	'body_container_padding_y',
	__( 'Padding - Top & Bottom', 'secretum' ),
	'',
	$default['body_container_padding_y'],
	secretum_customizer_padding_top_bottom()
);
*/