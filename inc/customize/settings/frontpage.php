<?php
/**
 * Panels, Sections, & Settings
 *
 * @package    Secretum
 * @subpackage Customize\Settings\Frontpage
 * @author     SecretumTheme <author@secretumtheme.com>
 * @copyright  2018-2019 Secretum
 * @license    https://github.com/SecretumTheme/secretum/blob/master/license.txt GPL-2.0
 * @link       https://github.com/SecretumTheme/secretum/blob/master/inc/customize/settings/frontpage.php
 */

namespace Secretum;

// Panel.
$customizer->panel(
	'frontpage',
	__( 'Frontpage', 'secretum' )
);


// Section.
$customizer->section(
	'frontpage_display',
	'frontpage',
	__( 'Display', 'secretum' ),
	''
);
/**
// Checkbox.
$customizer->checkbox(
	'frontpage_display',
	'custom_frontpages',
	__( 'Enable Custom Frontpage Feature', 'secretum' ),
	__( 'Before enabling set all default frontpage and other design related settings. A custom frontpage must be published before it will display.', 'secretum' ),
	$default['custom_frontpages']
);
*/
// Checkbox.
$customizer->checkbox(
	'frontpage_display',
	'frontpage_header_status',
	__( 'Enable Frontpage Heading Area', 'secretum' ),
	'',
	$default['frontpage_header_status']
);


// Checkbox.
$customizer->checkbox(
	'frontpage_display',
	'frontpage_map_status',
	__( 'Enable Frontpage Google Map Area', 'secretum' ),
	'',
	$default['frontpage_map_status']
);


// Text Input.
$customizer->input_text(
	'frontpage_display',
	'frontpage_map_address',
	__( 'Google Map Business Name & Address', 'secretum' ),
	__( 'Use the exact address that Google has for your business in this format: Business Name, 000 W Something St Suite 1, City, ST 00000', 'secretum' ),
	$default['frontpage_map_address']
);


// Content.
$customizer->section(
	'frontpage_content',
	'frontpage',
	__( 'Content', 'secretum' ),
	__( 'Frontpage content management.', 'secretum' )
);


// Background Image.
$customizer->background_image(
	'frontpage_content',
	'frontpage_heading_bg',
	1900,
	400,
	__( 'Heading Background Image', 'secretum' ),
	__( 'Image will expand from center. 1900px or wider will limit the stretch.', 'secretum' )
);


// Textarea.
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


// Wrapper.
$wrapper->settings( [
	'section' => 'frontpage',
] );
