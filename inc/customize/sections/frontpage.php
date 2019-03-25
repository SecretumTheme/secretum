<?php
/**
 * Panels, Sections, & Settings
 *
 * @package    Secretum
 * @subpackage Core\Customize\Sections\Frontpage
 * @author     SecretumTheme <author@secretumtheme.com>
 * @copyright  2018-2019 Secretum
 * @license    https://github.com/SecretumTheme/secretum/blob/master/license.txt GPL-2.0
 * @link       https://github.com/SecretumTheme/secretum/blob/master/inc/customize/sections/frontpage.php
 * @since      1.0.0
 */

namespace Secretum;

// Panel.
$customizer->panel(
	'frontpage',
	__( 'Frontpage', 'secretum' )
);

// Content.
$customizer->section(
	'frontpage_heading',
	'frontpage',
	__( 'Heading Content', 'secretum' ),
	__( 'Content container below header/navbar and above the content body area.', 'secretum' )
);

// Checkbox.
$customizer->checkbox(
	'frontpage_heading',
	'frontpage_header_status',
	__( 'Enable Frontpage Heading Area', 'secretum' ),
	'',
	$defaults['frontpage_header_status']
);


// Background Image.
$customizer->background_image(
	'frontpage_heading',
	'frontpage_heading_bg',
	1900,
	400,
	__( 'Heading Background Image', 'secretum' ),
	__( 'Image will expand from center. 1900px or wider will limit the stretch.', 'secretum' )
);

// Textarea.
$customizer->textarea(
	'frontpage_heading',
	'frontpage_heading_html',
	__( 'Frontpage Heading HTML', 'secretum' ),
	__( 'Full HTML control of the heading area. HTML will not display until a modification is made and published.', 'secretum' ),
	'<div class="container-fluid py-5" id="container-heading">
	<div class="row">
		<div class="col-md">
			<div class="display-4 text-center text-capitalize text-center font-weight-bold color-whitish">' . get_bloginfo( 'name' ) . '</div>
			<div class="text-22 text-center text-capitalize text-center color-secondary">' . get_bloginfo( 'description' ) . '</div>
		</div>
	</div><!-- .row -->

	<br />

	<div class="row">
		<div class="col mt-1 text-center">
			<a href="#" class="btn btn-primary-light">' . __( 'Code is Poetry!', 'secretum' ) . '</a>
		</div>
	</div><!-- .row -->
</div><!-- .container -->',
	$defaults['frontpage_heading_html']
);


// Wrapper.
$wrapper->settings(
	[
		'section' => 'frontpage',
		'title'   => __( 'Heading Wrapper', 'secretum' ),
	]
);
