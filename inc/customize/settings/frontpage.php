<?php
/**
 * Panels, Sections, & Settings
 *
 * @package Secretum
 */

namespace Secretum;

// @about Panel
$customizer->panel(
	'frontpage',
	__( 'Frontpage', 'secretum' )
);

// @about Section
$customizer->section(
	'frontpage_display',
	'frontpage',
	__( 'Display', 'secretum' ),
	''
);
/**
// @about Checkbox
$customizer->checkbox(
	'frontpage_display',
	'custom_frontpages',
	__( 'Enable Custom Frontpage Feature', 'secretum' ),
	__( 'Before enabling set all default frontpage and other design related settings. A custom frontpage must be published before it will display.', 'secretum' ),
	$default['custom_frontpages']
);
*/
// @about Checkbox
$customizer->checkbox(
	'frontpage_display',
	'frontpage_header_status',
	__( 'Enable Frontpage Heading Area', 'secretum' ),
	'',
	$default['frontpage_header_status']
);

// @about Checkbox
$customizer->checkbox(
	'frontpage_display',
	'frontpage_map_status',
	__( 'Enable Frontpage Google Map Area', 'secretum' ),
	'',
	$default['frontpage_map_status']
);

// @about Text Input
$customizer->input_text(
	'frontpage_display',
	'frontpage_map_address',
	__( 'Google Map Business Name & Address', 'secretum' ),
	__( 'Use the exact address that Google has for your business in this format: Business Name, 000 W Something St Suite 1, City, ST 00000', 'secretum' ),
	$default['frontpage_map_address']
);

// @about Wrapper
$customizer->section(
	'frontpage_content',
	'frontpage',
	__( 'Content', 'secretum' ),
	__( 'Frontpage content management.', 'secretum' )
);

// @about Background Image
$customizer->background_image(
	'frontpage_content',
	'frontpage_heading_bg',
	1900,
	400,
	__( 'Heading Background Image', 'secretum' ),
	__( 'Image will expand from center. 1900px or wider will limit the stretch.', 'secretum' )
);

// @about Textarea
$customizer->textarea(
	'frontpage_content',
	'frontpage_heading_html',
	__( 'Frontpage Heading HTML', 'secretum' ),
	__( 'Full HTML control of the heading area. HTML will not display until a modification is made and published.', 'secretum' ),
	'<div class="container p-5" id="container-heading">
	<div class="row">
		<div class="col">
			<h1 class="text-center text-uppercase">Big Title Area</h1>
		</div>
	</div><!-- .row -->

	<br />

	<div class="row">
		<div class="col mt-1 text-center">
			<a href="#" class="btn btn-secondary"><span class="screen-reader-text">Click Here!</span>Click Here!</a>
		</div>
	</div><!-- .row -->
</div><!-- .container -->',
	$default['frontpage_heading_html']
);

// @about Wrapper
$customizer->section(
	'frontpage_wrapper',
	'frontpage',
	__( 'Wrapper', 'secretum' ),
	__( 'Customize the outter wrapper around frontpage heading area.', 'secretum' )
);

// @about Select
$customizer->select(
	'frontpage_wrapper',
	'frontpage_wrapper_background_color',
	__( 'Background Color', 'secretum' ),
	'',
	$default['frontpage_wrapper_background_color'],
	secretum_customizer_background_colors()
);

// @about Select
$customizer->select(
	'frontpage_wrapper',
	'frontpage_wrapper_padding_x',
	__( 'Padding - Left & Right', 'secretum' ),
	'',
	$default['frontpage_wrapper_padding_x'],
	secretum_customizer_padding_left_right()
);

// @about Select
$customizer->select(
	'frontpage_wrapper',
	'frontpage_wrapper_padding_y',
	__( 'Padding - Top & Bottom', 'secretum' ),
	'',
	$default['frontpage_wrapper_padding_y'],
	secretum_customizer_padding_top_bottom()
);

// @about Select
$customizer->select(
	'frontpage_wrapper',
	'frontpage_wrapper_margin_bottom',
	__( 'Margin - Bottom', 'secretum' ),
	__( 'Increases spacing after section.', 'secretum' ),
	$default['frontpage_wrapper_margin_bottom'],
	secretum_customizer_margin_bottom()
);

// @about Select
$customizer->select(
	'frontpage_wrapper',
	'frontpage_wrapper_margin_top',
	__( 'Margin - Top', 'secretum' ),
	__( 'Increases spacing before section.', 'secretum' ),
	$default['frontpage_wrapper_margin_top'],
	secretum_customizer_margin_top()
);

// @about Select
$customizer->select(
	'frontpage_wrapper',
	'frontpage_wrapper_border_type',
	__( 'Border Type', 'secretum' ),
	'',
	$default['frontpage_wrapper_border_type'],
	secretum_customizer_border_types()
);

// @about Select
$customizer->select(
	'frontpage_wrapper',
	'frontpage_wrapper_border_color',
	__( 'Border Color', 'secretum' ),
	'',
	$default['frontpage_wrapper_border_color'],
	secretum_customizer_border_colors()
);
